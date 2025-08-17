<?php

namespace App\View\Components\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Flatpickr extends Component
{
    use Traits\FormFieldHelper;

    /** @var string ID único do campo */
    public string $id;

    /** @var string Nome do campo em dot notation (para old() e erros) */
    public string $dotName;

    /**
     * Cria uma nova instância do componente Flatpickr.
     *
     * Renderiza um input com suporte a seleção de data/hora usando Flatpickr.js.
     * Compatível com:
     * - Vários formatos (data, hora, mês, semana)
     * - Ícones esquerdo/direito
     * - Placeholder
     * - Texto de canto (ex: dica)
     * - Validação Laravel (old input, erros)
     * - Acessibilidade e IDs únicos
     *
     * @param  string  $name        Nome do campo (ex: 'start_at'). Usado em `name` e `id`.
     * @param  ?string $icon        Ícone à direita do campo (ex: 'pencil').
     * @param  ?string $label       Rótulo exibido acima do campo (opcional).
     * @param  ?string $value       Valor inicial (data no formato Y-m-d H:i:s, substituído por `old()`).
     * @param  ?string $corner      Texto no canto superior direito (ex: "máx. 200 caracteres").
     * @param  ?string $format      Formato de exibição. Se não informado, usa padrão baseado no tipo.
     * @param  ?string $leftIcon    Ícone à esquerda (ex: 'envelope').
     * @param  ?string $placeholder Texto de placeholder (ex: '31/12/2025').
     * @param  bool    $required    Define se o campo é obrigatório.
     * @param  ?string $type        Tipo de seleção: 'date', 'datetime', 'time', 'month', 'week'. Padrão: 'date'.
     * @return void
     */
    public function __construct(
        public string $name,
        public ?string $icon,
        public ?string $label,
        public ?string $value,
        public ?string $corner,
        public ?string $format,
        public ?string $leftIcon,
        public ?string $placeholder,
        public bool $required = false,
        public ?string $type = 'date',
        public string $size = 'md',
    ) {
        $this->processFieldData();

        if (!$this->format) {
            $this->setDefaultFormat();
        }
    }

    /**
     * Define o formato padrão baseado no tipo do campo.
     *
     * Usado quando `$format` não é fornecido.
     *
     * @return void
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
     * Verifica se o campo precisa de seleção de hora.
     *
     * @return bool
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
     * Verifica se o calendário deve ser ocultado (ex: apenas hora).
     *
     * @return bool
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