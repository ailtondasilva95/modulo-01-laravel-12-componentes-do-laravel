<?php

namespace App\View\Components\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Textarea extends Component
{
    use Traits\FormFieldHelper;

    /** @var string ID único do campo */
    public string $id;

    /** @var string Nome do campo em dot notation (para old() e erros) */
    public string $dotName;

    /**
     * Cria uma nova instância do componente Textarea.
     *
     * Renderiza um campo textarea com suporte a:
     * - Rótulo e placeholder
     * - Ícones esquerdo/direito (usando Bootstrap Icons ou similar)
     * - Texto de canto (ex: contador, dica)
     * - Validação Laravel (old input, erros)
     * - Acessibilidade e IDs únicos
     *
     * @param  string      $name        Nome do campo (ex: 'bio'). Usado em `name` e `id`.
     * @param  ?string     $icon        Ícone à esquerda do campo (ex: 'pencil').
     * @param  ?string     $label       Rótulo exibido acima do campo (opcional).
     * @param  ?string     $value       Valor inicial do campo (substituído por `old()` se houver).
     * @param  ?string     $corner      Texto no canto superior direito (ex: "máx. 200 caracteres").
     * @param  ?string     $rightIcon   Ícone à direita do campo (ex: 'bi bi-info-circle').
     * @param  ?string     $placeholder Texto de placeholder (quando o campo está vazio).
     * @param  bool        $required    Define se o campo é obrigatório (exibe * e marca `required`).
     * @param  int         $rows        Número de linhas visíveis do textarea (padrão: 4).
     * @return void
     */
    public function __construct(
        public string $name,
        public ?string $icon,
        public ?string $label,
        public ?string $value,
        public ?string $corner,
        public ?string $rightIcon,
        public ?string $placeholder,
        public bool $required = false,
        public int $rows = 4
    ) {
        $this->processFieldData();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.textarea');
    }
}