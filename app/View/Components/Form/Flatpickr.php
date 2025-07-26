<?php

namespace App\View\Components\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Flatpickr extends Component
{
    /**
     * Create a new component instance.
     * @param string $name Nome do campo
     * @param string|null $icon Ícone à esquerda do campo
     * @param string|null $label Texto do rótulo do campo
     * @param string|null $value Valor do campo
     * @param string|null $corner Texto de canto (ex: dica, informação adicional)
     * @param string|null $format Formato de data/hora (ex: d/m/Y H:i)
     * @param string|null $rightIcon Ícone à direita do campo right-icon
     * @param string|null $placeholder Texto de placeholder
     * @param string $type Tipo do campo (date, datetime, month, week, time )
     * @param bool $required Define se o campo é obrigatório
     * @return void
     */
    public function __construct(
        public string $name,
        public ?string $icon,
        public ?string $label,
        public ?string $value,
        public ?string $corner,
        public ?string $format,
        public ?string $rightIcon,
        public ?string $placeholder,
        public ?string $type = null,
        public bool $required = false,
    ) {
        // Define formato padrão baseado no tipo se não for especificado
        if (empty($this->format)) {
            $this->setDefaultFormat();
        }
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
     * Define o formato padrão baseado no tipo do campo
     */
    private function setDefaultFormat(): void
    {
        match ($this->type) {
            'datetime-local', 'datetime' => $this->format = 'd/m/Y H:i', // Formato: 31/12/2025 23:59
            'month' => $this->format = 'F, Y', // Formato: Dezembro, 2025
            'week' => $this->format = 'W, Y', // Formato: 38, 2025
            'time' => $this->format = 'H:i', // Formato: 23:59
            default => $this->format = 'd/m/Y', // Formato: 31/12/2025 (padrão)
        };
    }

    /**
     * Verifica se é um tipo de campo de data
     */
    public function isDateType(): bool
    {
        return in_array($this->type, [
            'datetime-local',
            'datetime',
            'month',
            'date',
            'week',
            'time'
        ]);
    }

    /**
     * Verifica se precisa de seleção de hora
     */
    public function needsTime(): bool
    {
        return in_array($this->type, [
            'datetime-local',
            'datetime',
            'time'
        ]);
    }

    /**
     * Verifica se precisa ocultar o calendário (apenas hora/mês/semana)
     */
    public function noCalendar(): bool
    {
        return in_array($this->type, [
            'time',
        ]);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.flatpickr');
    }
}