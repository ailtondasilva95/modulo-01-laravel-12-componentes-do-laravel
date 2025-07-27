<?php

namespace App\View\Components\Widget;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Badge extends Component
{
    /**
     * Create a new component instance.
     * 
     * @param string|null $icon Ícone do badge
     * @param string|null $type Tipo de badge (ex: success, danger, etc.)
     * @param string|null $label Texto do badge
     * @param bool $pill Define se o badge tem bordas arredondadas
     * @param bool $outline Define se o badge é contornado
     * @param bool $circle Define se o badge é circular
     * @return void
     */
    public function __construct(
        public ?string $icon,
        public ?string $type,
        public ?string $label,
        public bool $pill = false,
        public bool $outline = false,
        public bool $circle = false,
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.widget.badge');
    }
}