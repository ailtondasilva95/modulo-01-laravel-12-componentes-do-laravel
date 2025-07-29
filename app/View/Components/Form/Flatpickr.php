<?php

namespace App\View\Components\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Flatpickr extends Component
{
    use Traits\FormFieldHelper;

    /**
     * ID único do campo.
     *
     * Gerado automaticamente por `generateId()` se não for fornecido.
     * Usado principalmente para associar labels com inputs via atributo `for`.
     *
     * Exemplo: "permissions-create-5f34a1b2c"
     *
     * @var string
     */
    public string $id;

    /**
     * Nome do campo em notação de ponto (dot notation).
     *
     * Converte nomes com colchetes (ex: user[profile][name]) para formato compatível
     * com `old()` e `errors()` do Laravel (ex: user.profile.name).
     *
     * Usado para recuperar valores antigos e verificar erros de validação.
     *
     * @var string
     */
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
     * @param  string      $name         Nome do campo (ex: 'start_at'). Usado em `name` e `id`.
     * @param  ?string     $label        Rótulo exibido acima do campo (opcional).
     * @param  ?string     $value        Valor inicial (data no formato Y-m-d H:i:s, substituído por `old()`).
     * @param  ?string     $placeholder  Texto de placeholder (ex: '31/12/2025').
     * @param  ?string     $type         Tipo de seleção: 'date', 'datetime', 'time', 'month', 'week'. Padrão: 'date'.
     * @param  ?string     $format       Formato de exibição. Se não informado, usa padrão baseado no tipo.
     * @param  ?string     $icon         Ícone à esquerda (ex: 'bi bi-calendar').
     * @param  ?string     $rightIcon    Ícone à direita (ex: 'bi bi-clock').
     * @param  ?string     $corner       Texto no canto inferior (ex: "máx. 30 dias à frente").
     * @param  bool        $required     Define se o campo é obrigatório.
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
        public bool $required = false,
        public ?string $type = null
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