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
     * @param  ?string $corner      Texto no canto superior direito (ex: "máx. 200 caracteres").
     * @param  ?string $format      Formato de exibição. Se não informado, usa padrão baseado no tipo.
     * @param  ?string $leftIcon    Ícone à esquerda (ex: 'envelope').
     * @param  ?string $placeholder Texto de placeholder (ex: '31/12/2025').
     * @param  array|string|null $defaultDate Ex: '2025-12-31' ou ['2025-12-31', '2026-01-15'] para range.
     * @param  ?string $type        Tipo de seleção: 'date', 'datetime', 'time', 'month', 'week'. Padrão: 'date'.
     * @param  bool    $required    Define se o campo é obrigatório.
     * @param bool $range           Define se o campo permite seleção de intervalo (range).
     * @param string $size          Tamanho do campo: 'sm', 'md', 'lg'. Padrão: 'md'.
     * @return void
     */
    public function __construct(
        public string $name,
        public ?string $icon,
        public ?string $label,
        public ?string $corner,
        public ?string $format,
        public ?string $leftIcon,
        public ?string $placeholder,
        public array|string|null $defaultDate,
        public string $type = 'date',
        public bool $required = false,
        public bool $range = false,
        public string $size = 'md',
    ) {
        $this->processFieldData();
        $this->defaultDate = old($this->dotName, $this->defaultDate ?? null);

        // Se $format não for fornecido, define o padrão baseado no tipo
        $this->format ?: $this->setDefaultFormat();
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
        if(app()->getLocale() === 'en') {
            $this->format = match ($this->type) {
                'datetime' => 'm/d/Y H:i',          // Ex: 12/31/2025 14:30
                'month'    => 'F Y',                // Ex: December, 2025
                'week'     => '\W\\e\\e\\k W, Y',   // Ex: Week 38, 2025
                'time'     => 'H:i',                // Ex: 14:30
                default    => 'm/d/Y',              // Ex: 12/31/2025 (default)
            };
            return;
        } elseif(app()->getLocale() === 'de') {
            $this->format = match ($this->type) {
                'datetime' => 'd.m.Y H:i',           // Ex: 31.12.2025 14:30
                'month'    => 'F Y',                 // Ex: Dezember, 2025
                'week'     => '\W\\o\\c\\h\\e W, Y', // Ex: Woche 38, 2025
                'time'     => 'H:i',                 // Ex: 14:30
                default    => 'd.m.Y',               // Ex: 31.12.2025 (Standard)
            };
            return;
        } elseif(app()->getLocale() === 'fr') {
            $this->format = match ($this->type) {
                'datetime' => 'd/m/Y H:i',                        // Ex: 31/12/2025 14:30
                'month'    => 'F Y',                              // Ex: Décembre, 2025
                'week'     => '\S\\e\\m\\a\\i\\n\\e W, \\d\\e Y', // Ex: Semaine 38, de 2025
                'time'     => 'H:i',                              // Ex: 14:30
                default    => 'd/m/Y',                            // Ex: 31/12/2025 (par défaut)
            };
            return;
        } elseif(app()->getLocale() === 'it') {
            $this->format = match ($this->type) {
                'datetime' => 'd/m/Y H:i',                          // Ex: 31/12/2025 14:30
                'month'    => 'F Y',                                // Ex: Dicembre, 2025
                'week'     => '\S\\e\\t\\t\\i\\m\\a W, \\d\\i Y',   // Ex: Settimana 38, di 2025
                'time'     => 'H:i',                                // Ex: 14:30
                default    => 'd/m/Y',                              // Ex: 31/12/2025 (predefinito)
            };
            return;
        } elseif(app()->getLocale() === 'ru') {
            $this->format = match ($this->type) {
                'datetime' => 'd.m.Y H:i',                  // Ex: 31.12.2025 14:30
                'month'    => 'F Y г.',                     // Ex: Декабрь 2025 г..
                'week'     => '\Н\\е\\д\\е\\л\\я W, Y г',   // Ex: Неделя 52, 2025 г.
                'time'     => 'H:i',                        // Ex: 14:30
                default    => 'd.m.Y',                      // Ex: 31.12.2025 (по умолчанию)
            };
            return;
        } elseif(app()->getLocale() === 'zh_CN') {
            $this->format = match ($this->type) {
                'datetime' => 'Y年m月d日 H:i',  // Ex: 2025年12月31日 14:30
                'month'    => 'Y年m月',         // Ex: 2025年12月
                'week'     => 'Y年第W周',       // Ex: 2025年第52周
                'time'     => 'H:i',           // Ex: 14:30
                default    => 'Y年m月d日',      // Ex: 2025年12月31日
            };
            return;
        }
        
        // Formato padrão para outros idiomas
        match ($this->type) {
            'datetime' => $this->format = 'd/m/Y H:i',                     // Ex: 31/12/2025 14:30
            'month'    => $this->format = 'F \d\\e Y',                     // Ex: Dezembro, 2025
            'week'     => $this->format = '\S\\e\\m\\a\\n\\a W, \\d\\e Y', // Ex: Semana 38, de 2025
            'time'     => $this->format = 'H:i',                           // Ex: 14:30
            default    => $this->format = 'd/m/Y',                         // Ex: 31/12/2025 (padrão)
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