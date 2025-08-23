<?php

namespace App\View\Components;

use Closure;
use Illuminate\Support\Str;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Chart extends Component
{

    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $id,
        public ?string $api,
        public ?array $config,
        public string $type = 'bar',
        public array $options = [],
    ) {
        $this->id = $id ?? 'myChart-'.Str::random(6);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.chart');
    }
}