<?php

namespace App\View\Components\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    use Traits\FormFieldHelper;

    /** @var string ID único do campo */
    public string $id;

    /** @var string Nome do campo em dot notation (para old() e erros) */
    public string $dotName;

    /**
     * Cria uma nova instância do componente Input.
     *
     * Renderiza um campo de entrada (input) com suporte a:
     * - Vários tipos (text, email, password, number, etc.)
     * - Ícones esquerdo/direito
     * - Placeholder
     * - Máscaras estáticas ou dinâmicas (via atributos)
     * - Texto de canto (ex: contador, dica)
     * - Validação Laravel (old input, erros)
     * - Acessibilidade e IDs únicos
     *
     * @param  string  $name        Nome do campo (ex: 'email'). Usado em `name` e `id`.
     * @param  ?string $icon        Ícone à direita do campo (ex: 'pencil').
     * @param  ?string $mask        Máscara estática (ex: '999 999 999'). Usada com Alpine.JS e o Alpinejs Mask.
     * @param  ?string $label       Rótulo exibido acima do campo (opcional).
     * @param  ?string $value       Valor inicial do campo (substituído por `old()` se houver).
     * @param  ?string $corner      Texto no canto superior direito (ex: "máx. 100 caracteres").
     * @param  ?string $leftIcon    Ícone à esquerda (ex: 'envelope').
     * @param  ?string $placeholder Texto de placeholder (quando o campo está vazio).
     * @param  bool    $required    Define se o campo é obrigatório (exibe * e marca `required`).
     * @param  ?string $type        Tipo do input (text, email, password, number, etc.). Padrão: 'text'.
     * @return void
     */
    public function __construct(
        public string $name,
        public ?string $icon,
        public ?string $mask,
        public ?string $label,
        public ?string $value,
        public ?string $corner,
        public ?string $leftIcon,
        public ?string $placeholder,
        public bool $required = false,
        public string $type = 'text',
        public string $size = 'md',
    ) {
        $this->processFieldData();
    }

    /**
     * Verifica se o campo é do tipo password.
     *
     * Usado para ajustar comportamentos visuais (ex: ícone de olho).
     *
     * @return bool
     */
    public function isPasswordType(): bool
    {
        return strtolower($this->type) === 'password';
    }

    /**
     * Verifica se o campo é do tipo color.
     *
     * @return bool
     */
    public function isColor(): bool
    {
        return strtolower($this->type) === 'color';
    }

    /**
     * Verifica se o campo tem uma máscara estática definida.
     *
     * @return bool
     */
    public function hasStaticMask(): bool
    {
        return filled($this->mask) && is_string($this->mask) && !empty($this->mask);
    }

    /**
     * Verifica se o campo tem uma máscara dinâmica definida via atributo Blade.
     *
     * Exemplo: `mask:dynamic="$money($input, ',')"`
     *
     * @return bool
     */
    public function hasDynamicMask(): bool
    {
        return $this->attributes->has('mask:dynamic') && filled($this->attributes->get('mask:dynamic'));
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.input');
    }
}