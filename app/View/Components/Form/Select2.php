<?php

namespace App\View\Components\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Select2 extends Component
{
    use Traits\FormFieldHelper;

    /** @var string ID único do campo */
    public string $id;

    /** @var string Nome do campo em dot notation (para old() e erros) */
    public string $dotName;

    /**  @var array Valores selecionados (baseados em old() ou no valor passado) */
    public array $selectedValues;

    /**
     * Cria uma nova instância do componente Select2.
     *
     * @param  string       $name               Nome do campo (ex: 'tags[]'). Use '[]' para múltiplos.
     * @param  ?string      $icon               Ícone à esquerda do campo (ex: 'pencil').
     * @param  ?string      $label              Rótulo exibido acima do campo.
     * @param  array        $options            Opções no formato ['value' => 'Label'].
     * @param  ?string      $corner             Texto no canto superior direito (ex: "máx. 200 caracteres").
     * @param  ?string      $rightIcon          Ícone à direita do campo (ex: 'bi bi-info-circle').
     * @param  ?string      $placeholder        Texto quando nada está selecionado.
     * @param  array|string|null    $selected   Valores pré-selecionados.
     * @param  bool         $multiple           Habilita seleção múltipla.
     * @param  bool         $required           Define se é obrigatório.
     * @return void
     */
    public function __construct(
        public string $name,
        public ?string $icon,
        public ?string $label,
        public array $options,
        public ?string $corner,
        public ?string $rightIcon,
        public ?string $placeholder,
        public array|string|null $selected,
        public bool $multiple = false,
        public bool $required = false
    ) {
        // Garante que o nome termine com [] se for múltiplo
        if ($this->multiple && !str_ends_with($this->name, '[]')) {
            $this->name .= '[]';
        }

        $this->processFieldData();
        $this->selectedValues = $this->determineSelectedValues();
    }

    /**
     * Determina os valores selecionados.
     *
     * Prioridade: old() > $selected > vazio
     *
     * @return array
     */
    private function determineSelectedValues(): array
    {
        $oldInput = old($this->dotName);

        if ($oldInput !== null) {
            return is_array($oldInput) ? $oldInput : [(string) $oldInput];
        }

        if (is_array($this->selected)) {
            return $this->selected;
        }

        if ($this->selected !== null) {
            return [(string) $this->selected];
        }

        return [];
    }

    /**
     * Verifica se uma opção está selecionada.
     *
     * @param  string  $value
     * @return bool
     */
    public function isSelected(string $value): bool
    {
        return in_array($value, $this->selectedValues);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.select2');
    }
}