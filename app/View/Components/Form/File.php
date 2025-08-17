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
     * @param  ?array  $previewFile  Arquivos de pré-visualização
     * @param  ?string $corner       Texto auxiliar no canto superior direito
     * @param  ?array  $extensions   Extensões permitidas (ex: ['pdf', 'docx'])
     * @param  ?int    $maxFileCount Número máximo de arquivos (quando multiple=true)
     * @param  ?int    $maxFileSize  Tamanho máximo por arquivo (em KB)
     * @param  bool    $multiple     Permite seleção múltipla de arquivos
     * @param  bool    $required     Indica se o campo é obrigatório
     * @return void
     */
    public function __construct(
        public string $name,
        public ?string $label,
        public ?array $previewFile,
        public ?string $corner,
        public ?array $extensions,
        public ?int $maxFileCount,
        public ?int $maxFileSize,
        public bool $multiple = false,
        public bool $required = false
    ) {
        // Garante que o nome termine com [] se for múltiplo
        if ($this->multiple && !str_ends_with($this->name, '[]')) {
            $this->name .= '[]';
        }

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
        return [
            // Documentos (Documentos de texto e PDF)
            'docx' => "<i class='icon-4x bi bi-file-earmark-word text-primary'></i>",
            'doc'  => "<i class='icon-4x bi bi-file-earmark-word text-primary'></i>",
            'pdf'  => "<i class='icon-4x bi bi-file-earmark-pdf text-danger'></i>",
            'txt'  => "<i class='icon-4x bi bi-file-earmark-text text-info'></i>",

            // Planilhas (Arquivos de dados tabulares)
            'csv'  => "<i class='icon-4x bi bi-file-earmark-excel text-success'></i>",
            'xlsx' => "<i class='icon-4x bi bi-file-earmark-excel text-success'></i>",
            'xls'  => "<i class='icon-4x bi bi-file-earmark-excel text-success'></i>",

            // Apresentações (Slides e apresentações)
            'pptx' => "<i class='icon-4x bi bi-filetype-pptx text-warning'></i>",
            'ppt'  => "<i class='icon-4x bi bi-filetype-ppt text-warning'></i>",

            // Imagens (Arquivos de imagem)
            'jpeg' => "<i class='icon-4x bi bi-file-earmark-image text-info'></i>",
            'webp' => "<i class='icon-4x bi bi-file-earmark-image text-info'></i>",
            'jpg'  => "<i class='icon-4x bi bi-file-earmark-image text-info'></i>",
            'png'  => "<i class='icon-4x bi bi-file-earmark-image text-info'></i>",
            'gif'  => "<i class='icon-4x bi bi-file-earmark-image text-info'></i>",
            'svg'  => "<i class='icon-4x bi bi-file-earmark-image text-info'></i>",

            // Músicas (Arquivos de áudio)
            'flac' => "<i class='icon-4x bi bi-file-earmark-music text-purple'></i>",
            'mp3'  => "<i class='icon-4x bi bi-file-earmark-music text-purple'></i>",
            'wav'  => "<i class='icon-4x bi bi-file-earmark-music text-purple'></i>",
            'ogg'  => "<i class='icon-4x bi bi-file-earmark-music text-purple'></i>",

            // Vídeos (Arquivos de vídeo)
            'mp4' => "<i class='icon-4x bi bi-file-earmark-play text-indigo'></i>",
            'mov' => "<i class='icon-4x bi bi-file-earmark-play text-indigo'></i>",
            'avi' => "<i class='icon-4x bi bi-file-earmark-play text-indigo'></i>",
            'mkv' => "<i class='icon-4x bi bi-file-earmark-play text-indigo'></i>",
            'flv' => "<i class='icon-4x bi bi-file-earmark-play text-indigo'></i>",
            'wmv' => "<i class='icon-4x bi bi-file-earmark-play text-indigo'></i>",

            // Arquivos compactados (ZIP, RAR, etc)
            'zip' => "<i class='icon-4x bi bi-file-earmark-zip text-warning'></i>",
            'rar' => "<i class='icon-4x bi bi-file-earmark-zip text-warning'></i>",
            '7z'  => "<i class='icon-4x bi bi-file-earmark-zip text-warning'></i>",

            // Dev
            'java' => "<i class='icon-4x bi bi-file-earmark-code text-teal'></i>",
            'js'   => "<i class='icon-4x bi bi-file-earmark-code text-teal'></i>",
            'ts'   => "<i class='icon-4x bi bi-file-earmark-code text-teal'></i>",
            'php'  => "<i class='icon-4x bi bi-file-earmark-code text-teal'></i>",
            'py'   => "<i class='icon-4x bi bi-file-earmark-code text-teal'></i>",
            'cpp'  => "<i class='icon-4x bi bi-file-earmark-code text-teal'></i>",
            'c'    => "<i class='icon-4x bi bi-file-earmark-code text-teal'></i>",
            'cs'   => "<i class='icon-4x bi bi-file-earmark-code text-teal'></i>",
            'html' => "<i class='icon-4x bi bi-file-earmark-code text-teal'></i>",
            'css'  => "<i class='icon-4x bi bi-file-earmark-code text-teal'></i>",
            'sql'  => "<i class='icon-4x bi bi-file-earmark-code text-teal'></i>",
            'json' => "<i class='icon-4x bi bi-file-earmark-code text-teal'></i>",

            // Padrão (Para extensões não mapeadas)
            'default' => "<i class='icon-4x bi bi-file-earmark text-muted'></i>",
        ];
    }

    /**
     * Determina a categoria do arquivo baseado em sua extensão
     *
     * @param string $filename Nome do arquivo ou caminho completo
     * @return string Retorna uma das seguintes categorias:
     *               - 'image' para imagens
     *               - 'video' para vídeos
     *               - 'code' para linguagens de programação
     *               - 'document' para documentos comuns
     *               - 'archive' para arquivos compactados
     *               - 'audio' para arquivos de som
     *               - 'other' para outros tipos não categorizados
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

        if ($headers && isset($headers['Content-Length'])) {
            return is_array($headers['Content-Length'])
                ? (int) end($headers['Content-Length'])
                : (int) $headers['Content-Length'];
        }

        return 0;
    }

    /**
     * Verifica se uma URL pertence ao domínio local da aplicação
     *
     * @param string $url URL a ser verificada
     * @return bool True se for uma URL local, False se for externa
     */
    private function isLocalUrl(string $url): bool
    {
        $appUrl = config('app.url');

        // Remove protocolo e www para comparação
        $normalize = function ($url) {
            return preg_replace(['/^https?:\/\//', '/^www\./'], '', $url);
        };

        $urlHost = parse_url($url, PHP_URL_HOST);

        // URLs sem host são consideradas locais (caminhos relativos)
        if (!$urlHost) {
            return true;
        }

        return $normalize($urlHost) === $normalize(parse_url($appUrl, PHP_URL_HOST));
    }

    /**
     * Obtém tamanho de arquivos locais acessíveis via URL
     *
     * @param string $url URL local (storage ou public)
     * @return int Tamanho em bytes
     */
    private function getLocalUrlSize(string $url): int
    {
        $localPath = $this->convertUrlToPath($url);

        if (Storage::exists($localPath)) {
            return Storage::size($localPath);
        }

        if (file_exists($localPath)) {
            return filesize($localPath);
        }

        return 0;
    }

    /**
     * Manipula o cálculo de tamanho para URLs (locais e remotas)
     * 
     * @param string $url URL completa a ser verificada
     * @return int Tamanho em bytes
     */
    private function handleUrlSize(string $url): int
    {
        if ($this->isLocalUrl($url)) {
            return $this->getLocalUrlSize($url);
        }

        return $this->getRemoteFileSize($url);
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
        if (filter_var($path, FILTER_VALIDATE_URL)) {
            return $this->handleUrlSize($path);
        }

        return 0;
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

        return collect($this->previewFile)->map(function ($value, $index) {
            $ext = strtolower(pathinfo($value, PATHINFO_EXTENSION));

            return [
                'size' => $this->getFileSize($value),
                'filename' => basename(path: $value),
                'caption' => basename(path: $value),
                // 'downloadUrl' => trim($value),
                'type' => $this->getFileTypeByExtension($ext),
                'key' => $index + 1,
            ];
        })->toArray();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.file');
    }
}