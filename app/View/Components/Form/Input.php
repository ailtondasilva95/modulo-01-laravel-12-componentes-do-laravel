<?php

namespace App\View\Components\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{

    /**
     * Create a new component instance.
     * @param string $name Nome do campo
     * @param string|null $icon Ícone à esquerda do campo
     * @param string|null $mask Máscara para o campo, pode ser estáticas ou dinâmicas via Alpine.js
     * @param string|null $label Texto do rótulo do campo
     * @param string|null $value Valor do campo
     * @param string|null $corner Texto de canto (ex: dica, informação adicional)
     * @param string|null $rightIcon Ícone à direita do campo right-icon
     * @param string|null $placeholder Texto de placeholder
     * @param string $type Tipo do campo (text, email, password, etc.)
     * @param bool $required Define se o campo é obrigatório
     * @return void
     */
    public function __construct(
        public string $name,
        public ?string $icon,
        public ?string $mask,
        public ?string $label,
        public ?string $value,
        public ?string $corner,
        public ?string $rightIcon,
        public ?string $placeholder,
        public string $type = 'text',
        public bool $required = false,
    ) {
        //
    }

    /**
     * Verifica se o campo é do tipo password
     */
    public function isPasswordType(): bool
    {
        return $this->type === 'password';
    }

    /**
     * Verifica se o campo tem máscara estática
     */
    public function hasStaticMask(): bool
    {
        return filled($this->mask) && is_string($this->mask) && !empty(trim($this->mask));
    }

    /**
     * Verifica se o campo tem máscara dinâmica
     */
    public function hasDynamicMask(): bool
    {
        return $this->attributes->has('mask:dynamic') && filled($this->attributes->get('mask:dynamic'));
    }

    /**
     * Verifica se o campo é obrigatório.
     * Se não for obrigatório, retorna uma string vazia. Caso contrário, retorna o asterisco vermelho.
     */
    public function requiredMark(): string
    {
        if (!$this->required) {
            return '';
        }

        return '<sup class="text-danger" data-bs-toggle="tooltip" title="campo obrigatório">*</sup>';
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.input');
    }
}