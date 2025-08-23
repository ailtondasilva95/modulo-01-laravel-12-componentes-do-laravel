<?php

namespace App\View\Components\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\Component;

class File extends Component
{
    use Traits\FormFieldHelper;

    /** @var string ID único do campo */
    public string $id;

    /** @var string Nome do campo em dot notation (para old() e erros) */
    public string $dotName;

    /**
     * Cria uma nova instância do componente File.
     * 
     * Usa o plugin Krajee File Input para interface avançada.
     *
     * @param  string  $name         Nome do campo (atributo name)
     * @param  ?string $label        Rótulo do campo
     * @param  ?string $corner       Texto auxiliar no canto superior direito
     * @param  ?int    $maxFileSize  Tamanho máximo por arquivo (em KB)
     * @param  ?array  $extensions   Extensões permitidas (ex: ['pdf', 'docx'])
     * @param  ?int    $maxFileCount Número máximo de arquivos (quando multiple=true)
     * @param  ?array  $previewFile  Arquivos de pré-visualização
     * @param  bool    $multiple     Permite seleção múltipla de arquivos
     * @param  bool    $required     Indica se o campo é obrigatório
     * @return void
     */
    public function __construct(
        public string $name,
        public ?string $label,
        public ?string $corner,
        public ?int $maxFileSize,
        public ?array $extensions,
        public ?int $maxFileCount,
        public ?array $previewFile,
        public bool $multiple = false,
        public bool $required = false
    ) {
        // Garante que o nome termine com [] se for múltiplo
        if ($this->multiple && !str_ends_with($this->name, '[]')) $this->name .= '[]';

        $this->processFieldData();
        $this->previewFile = $previewFile ?? old($this->dotName, []);
    }

    /**
     * Retorna as configurações de ícones para pré-visualização de arquivos
     *
     * Este método define os ícones Bootstrap Icons que serão usados para representar
     * diferentes tipos de arquivos no componente de upload. Cada entrada inclui:
     * - Um ícone específico para o tipo de arquivo
     * - Uma classe de cor para categorização visual
     * - Tamanho padrão (icon-4x) para consistência
     *
     * @return array
     */
    public function getPreviewFileIconSettings(): array
    {
        $groups = [
            // Documentos
            ['extensions' => ['docx', 'doc'], 'icon' => "bi-file-earmark-word text-primary"],
            ['extensions' => ['pdf'], 'icon' => "bi-file-earmark-pdf text-danger"],
            ['extensions' => ['txt'], 'icon' => "bi-file-earmark-text text-info"],

            // Planilhas
            ['extensions' => ['csv', 'xlsx', 'xls'], 'icon' => "bi-file-earmark-excel text-success"],

            // Apresentações
            ['extensions' => ['pptx'], 'icon' => "bi-filetype-pptx text-warning"],
            ['extensions' => ['ppt'], 'icon' => "bi-filetype-ppt text-warning"],

            // Imagens
            ['extensions' => ['jpeg', 'webp', 'jpg', 'png', 'gif', 'svg'], 'icon' => "bi-file-earmark-image text-info"],

            // Músicas
            ['extensions' => ['flac', 'mp3', 'wav', 'ogg'], 'icon' => "bi-file-earmark-music text-purple"],

            // Vídeos
            ['extensions' => ['mp4', 'mov', 'avi', 'mkv', 'flv', 'wmv'], 'icon' => "bi-file-earmark-play text-indigo"],

            // Compactados
            ['extensions' => ['zip', 'rar', '7z'], 'icon' => "bi-file-earmark-zip text-warning"],

            // Dev
            ['extensions' => ['java', 'js', 'ts', 'php', 'py', 'cpp', 'c', 'cs', 'html', 'css', 'sql', 'json'], 'icon' => "bi-file-earmark-code text-teal"],
        ];

        $icons = [];
        foreach ($groups as $group) {
            foreach ($group['extensions'] as $ext) {
                $icons[$ext] = "<i class='icon-4x bi {$group['icon']}'></i>";
            }
        }

        // Ícone padrão para extensões não mapeadas
        $icons['default'] = "<i class='icon-4x bi bi-file-earmark text-muted'></i>";

        return $icons;
    }

    /**
     * Determina a categoria do arquivo baseado em sua extensão
     *
     * @param string $filename Nome do arquivo ou caminho completo
     * @return string Retorna uma das seguintes categorias:
     *  - 'image' para imagens
     *  - 'video' para vídeos
     *  - 'code' para linguagens de programação
     *  - 'document' para documentos comuns
     *  - 'archive' para arquivos compactados
     *  - 'audio' para arquivos de som
     *  - 'other' para outros tipos não categorizados
     */
    private function getFileTypeByExtension(string $extension): string
    {
        $map = [
            'office' => ['doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'odt', 'ods', 'odp'],
            'image' => ['jpg', 'jpeg', 'png', 'gif', 'bmp', 'tiff', 'webp', 'ico'],
            'gdocs' => ['gdoc', 'gsheet', 'gslide'],
            'html'  => ['html', 'htm', 'xhtml'],
            'text'  => ['txt'],
            'pdf'   => ['pdf'],
        ];

        foreach ($map as $type => $extensions) {
            if (in_array(strtolower($extension), $extensions, true)) {
                return $type;
            }
        }

        // Padrão para extensões não categorizadas
        return 'other';
    }

    /**
     * Converte URL local para caminho físico no sistema de arquivos
     *
     * @param string $url URL local (ex: http://site.com/storage/arquivo.txt)
     * @return string Caminho físico correspondente (ex: /var/www/storage/app/public/arquivo.txt)
     */
    private function convertUrlToPath(string $url): string
    {
        $baseUrl = config('app.url');
        $storagePath = '/storage/';

        // Converte URL de storage para caminho físico
        if (strpos($url, $storagePath) !== false) {
            $relativePath = str_replace($baseUrl . $storagePath, '', $url);
            return storage_path('app/public/' . $relativePath);
        }

        // Converte URL de asset (public) para caminho físico
        if (strpos($url, $baseUrl) === 0) {
            $relativePath = str_replace($baseUrl, '', $url);
            return public_path($relativePath);
        }

        return $url;
    }

    /**
     * Obtém tamanho de arquivo remoto via cabeçalhos HTTP
     *
     * @param string $url URL remota completa
     * @return int Tamanho em bytes (0 se não conseguir determinar)
     */
    private function getRemoteFileSize(string $url): int
    {
        $headers = @get_headers($url, 1);

        return ($headers && isset($headers['Content-Length'])) ? (int) (is_array($headers['Content-Length'])
            ? end($headers['Content-Length']) : $headers['Content-Length']) : 0;
    }

    /**
     * Verifica se uma URL pertence ao domínio local da aplicação
     *
     * @param string $url URL a ser verificada
     * @return bool True se for uma URL local, False se for externa
     */
    private function isLocalUrl(string $url): bool
    {
        $appHost = parse_url(config('app.url'), PHP_URL_HOST);
        $urlHost = parse_url($url, PHP_URL_HOST);

        return !$urlHost || preg_replace('/^www\./', '', $urlHost) === preg_replace('/^www\./', '', $appHost);
    }

    /**
     * Obtém tamanho de arquivos locais acessíveis via URL
     *
     * @param string $url URL local (storage ou public)
     * @return int Tamanho em bytes
     */
    private function getLocalUrlSize(string $url): int
    {
        $path = $this->convertUrlToPath($url);

        return Storage::exists($path)
            ? Storage::size($path) : (file_exists($path) ? filesize($path) : 0);
    }

    /**
     * Manipula o cálculo de tamanho para URLs (locais e remotas)
     * 
     * @param string $url URL completa a ser verificada
     * @return int Tamanho em bytes
     */
    private function handleUrlSize(string $url): int
    {
        return $this->isLocalUrl($url)
            ? $this->getLocalUrlSize($url) : $this->getRemoteFileSize($url);
    }

    /**
     * Obtém o tamanho de um arquivo (local ou remoto) em bytes
     *
     * Esta função verifica o tamanho do arquivo em vários cenários:
     * 1. Arquivos no filesystem do Laravel (Storage)
     * 2. Arquivos no sistema de arquivos local
     * 3. URLs remotas (via cabeçalhos HTTP)
     * 4. URLs locais (convertendo para caminhos físicos)
     *
     * @param string $path Caminho do arquivo que pode ser:
     * - Caminho relativo no storage do Laravel
     * - Caminho absoluto no sistema de arquivos
     * - URL completa (http://...)
     * - URL local (/storage/... ou /imagens/...)
     *
     * @return int Tamanho do arquivo em bytes. Retorna 0 se:
     * - O arquivo não existir
     * - Não conseguir determinar o tamanho
     * - A URL remota não fornecer cabeçalho Content-Length
     */
    private function getFileSize(string $path): int
    {
        // Verificação primária - Arquivos no storage do Laravel
        if (Storage::exists($path)) {
            return Storage::size($path);
        }

        // Verificação secundária - Arquivos no sistema local
        if (file_exists($path)) {
            return filesize($path);
        }

        // Verificação terciária - URLs (locais ou remotas)
        return filter_var($path, FILTER_VALIDATE_URL)
            ? $this->handleUrlSize($path) : 0;
    }

    /**
     * Gera o atributo accept para o input file
     * 
     * @return string String no formato .ext1,.ext2,...
     */
    public function getAcceptAttr(): string
    {
        return $this->extensions ? '.' . implode(',.', $this->extensions) : '*';
    }

    /**
     * Configurações de pré-visualização para o plugin FileInput
     * 
     * @return array Array de configurações no formato esperado pelo plugin
     */
    public function getInitialPreviewConfig(): array
    {
        if (empty($this->previewFile)) {
            return [];
        }

        return collect($this->previewFile)->map(fn($value, $index) => [
            'size' => $this->getFileSize($value),
            'filename' => basename(path: $value),
            'caption' => basename(path: $value),
            // 'downloadUrl' => trim($value),
            'type' => $this->getFileTypeByExtension(strtolower(pathinfo($value, PATHINFO_EXTENSION))),
            'key' => $index + 1,
        ])->toArray();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.file');
    }
}