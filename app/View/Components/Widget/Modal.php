<?php

namespace App\View\Components\Widget;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Modal extends Component
{
    /**
     * Create a new component instance.
     * @param string $id Identificador único do modal
     * @param string|null $title Título do modal
     * @param string|null $footer Rodapé do modal
     * @param bool $static Define se o modal é estático (não fecha ao clicar fora ou pressionar ESC)
     * @param bool $centered Define se o modal é centralizado
     * @return void
     */
    public function __construct(
        public string $id,
        public ?string $title,
        public ?string $footer,
        public bool $static = false,
        public bool $centered = false,
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.widget.modal');
    }
}