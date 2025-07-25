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
     * @param string|null $label Texto do rótulo do campo
     * @param string|null $icon Ícone à esquerda do campo
     * @param string|null $value Valor do campo
     * @param string|null $corner Texto de canto (ex: dica, informação adicional)
     * @param string|null $rightIcon Ícone à direita do campo right-icon
     * @param string|null $placeholder Texto de placeholder
     * @param string $type Tipo do campo (text, email, password, etc.)
     * @param bool $required Define se o campo é obrigatório
     * @param string|array|null $mask Máscara para o campo, pode ser estáticas ou dinâmicas via Alpine.js
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
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.input');
    }
}