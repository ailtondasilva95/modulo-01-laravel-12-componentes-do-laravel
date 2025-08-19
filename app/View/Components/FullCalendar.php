<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FullCalendar extends Component
{
    /**
     * Cria uma nova instância do componente FullCalendar.
     * 
     * Renderiza um calendário interativo usando FullCalendar.js.
     * Compatível com:
     * - Várias visualizações (mês, semana, dia, lista)
     * - Eventos dinâmicos via AJAX ou array
     * - Navegação entre meses/anos
     * - Seleção de dias e eventos
     * - Personalização de cabeçalho e botões
     * - Suporte a idiomas e temas do Bootstrap 5
     * - Acessibilidade e IDs únicos
     * 
     * @param  string            $id               ID único do calendário (usado para gerar IDs consistentes).
     * @param  ?string           $initialDate      Data inicial do calendário (formato 'Y-m-d'). Se não fornecido, usa a data atual.
     * @param  ?string           $initialView      Visualização inicial do calendário. Se não fornecido, usa 'dayGridMonth'.
     * @param  ?array            $headerToolbar    Cabeçalho do calendário, define os botões de navegação e visualização
     * @param  array|string|null $events Eventos do calendário, pode ser um array de eventos ou uma URL para buscar eventos via AJAX. Se for um array, deve conter objetos com propriedades como 'title', 'start', 'end', 'color' e 'editable'. Se for uma string, deve ser a URL para buscar os Endpoints de eventos.
     * @param  bool              $focusWeekend      Destacar os finais de semana (Sábado e Domingo). Padrão é true.
     * @param  bool              $selectable        Define se o calendário permite seleção de dias. Padrão é true.
     * @param  bool              $editable          Define se o calendário permite edição de eventos. Padrão é true.
     * @param  int               $firstDay          Define o primeiro dia da semana (0 = Domingo, 1 = Segunda, etc.). Padrão é 0 (Domingo).
     * @return void
     */
    public function __construct(
        public string $id,
        public ?string $initialView,
        public ?string $initialDate,
        public ?array $headerToolbar,
        public array|string|null $events,
        public bool $dayMaxEvents = true, // se deve limitar o número de eventos exibidos por dia
        public bool $focusWeekend = true, // destacar os finais de semana (Sábado e Domingo)
        public bool $weekNumbers = true, // se os números das semanas devem ser exibidos
        public bool $selectable = true, // permitir seleção de dias
        public bool $editable = true, // se o calendário é editável
        public $firstDay = 0, // 0 = Domingo, 1 = Segunda, etc.
    ) {
        // se não for fornecida, usa a data atual formatada como string
        $this->initialDate = $initialDate ?: now()->toDateString();

        // tipo de visualização inicial do calendário
        // 'multiMonthYear' - visualização de múltiplos meses
        // 'listWeek' - visualização de lista semanal
        // 'timeGridWeek' - visualização de semana
        // 'dayGridMonth' - visualização de mês
        // 'dayGridYear' - visualização de ano
        // 'timeGridDay' - visualização de dia
        $this->initialView = $initialView ?: 'dayGridMonth';

        // se não for fornecida, define o cabeçalho padrão
        // 'left' - botões de navegação
        // 'center' - título do calendário
        // 'right' - botões de visualização ('ano', 'mês', 'semana', 'dia', 'lista')
        $this->headerToolbar =  $headerToolbar ?: [
            'left' => 'prev,next today',
            'center' => 'title',
            'right' => 'multiMonthYear,dayGridMonth,timeGridWeek,timeGridDay,listWeek',
        ];
    }

    /**
     * Gera um ID único e consistente para o calendário.
     * Usa o ID do componente e um hash para garantir que seja único.
     * @return string
     */
    public function generateId(): string
    {
        return 'full-calendar-' . $this->id . '-' . substr(md5($this->id), 0, 6);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.full-calendar');
    }
}