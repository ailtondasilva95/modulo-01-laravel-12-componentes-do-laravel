<?php

namespace App\View\Components\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FileAvatar extends Component
{
    use Traits\FormFieldHelper;

    /** @var string ID único do campo */
    public string $id;

    /** @var string Nome do campo em dot notation (para old() e erros) */
    public string $dotName;
    
    /**
     * Cria uma nova instância do componente FileAvatar.
     * 
     * Usa o plugin Krajee File Input para interface avançada.
     *
     * Renderiza um campo de entrada (file-avatar) com suporte a:
     * - Texto de canto (ex: contador, dica)
     * - Validação Laravel (old input, erros)
     * - Acessibilidade e IDs únicos
     *
     * @param  string  $name         Nome do campo (ex: 'email'). Usado em `name` e `id`.
     * @param  ?string $label        Rótulo exibido acima do campo (opcional).
     * @param  ?string $corner       Texto no canto superior direito do preview (ex: "máx. 100 caracteres").
     * @param  ?string $previewImage          URL ou caminho da imagem atual (para preview inicial).
     * @param  array   $extensions   Lista de extensões permitidas (sem ponto).
     * @param  int     $maxFileSize  Tamanho máximo do arquivo em **quilobytes (KB)**.
     * @param  bool    $required     Define se o campo é obrigatório (exibe * e marca `required`).
     * @return void
     */
    public function __construct(
        public string $name,
        public ?string $label,
        public ?string $corner,
        public ?string $previewImage,
        public array $extensions = ['png', 'jpg', 'jpeg'], // Padrão para avatares
        public int $maxFileSize = 10240, // Padrão 10MB padrão
        public bool $required = false,
    )
    {
        $this->processFieldData();
    }

    /**
     * Gera a string de aceitação para o atributo `accept`
     * Ex: '.png,.jpg,.jpeg'
     */
    public function getAcceptAttr(): string
    {
        return '.' . implode(',.', $this->extensions);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.file-avatar');
    }
}