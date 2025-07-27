<?php

namespace App\View\Components\Widget;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Avatar extends Component
{
    /**
     * Create a new component instance.
     * 
     * @param string|null $src URL da imagem do avatar
     * @param string|null $type Tipo de avatar (ex: user, admin, etc.)
     * @param string|null $label Texto do rótulo do avatar
     * @param string|null $initials Iniciais do usuário, se o rótulo não for fornecido
     * @param bool $outline Define se o avatar tem bordas arredondadas
     * @return void
     */
    public function __construct(
        public ?string $src,
        public ?string $type,
        public ?string $label,
        public ?string $initials,
        public bool $outline = false,
    ) {
        $this->initials = $initials ?? $this->getInitials($this->label);
    }

    /**
     * Obtém as iniciais do rótulo.
     * Se o rótulo for uma única palavra, devolve a primeira letra.
     * Se o rótulo tiver várias palavras, devolve a primeira letra da primeira e da última palavra.
     * @param string|null $label Rótulo do avatar
     * @return string Iniciais do rótulo
     */
    private function getInitials(?string $label): string
    {
        $parts = explode(' ', $label);
        $filtered = count($parts) > 1 ? [$parts[0], end($parts)] : [$parts[0]];
        return collect($filtered)->map(fn($word) => mb_substr($word, 0, 1))->join('');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.widget.avatar');
    }
}