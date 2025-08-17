<?php

namespace App\View\Components\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Checkbox extends Component
{
    use Traits\FormFieldHelper;

    /** @var string ID único do campo */
    public string $id;

    /** @var string Nome do campo em dot notation (para old() e erros) */
    public string $dotName;

    /**  @var array Valores marcados (baseados em old() ou no valor passado) */
    public array $checkedValues;

    /**
     * Cria uma nova instância do componente Checkbox.
     * 
     * Este componente renderiza um grupo de checkboxes (ou switches) com suporte a:
     * - Validação Laravel (old input, erros)
     * - Acessibilidade (IDs únicos, labels associadas)
     * - Layout inline ou vertical
     * - Exibição como switches do Bootstrap
     *
     * @param  string            $name     Nome do campo (ex: "permissions[]"). Usado em `name=""` do input.
     * @param  ?string           $label    Rótulo do grupo exibido acima dos checkboxes (opcional).
     * @param  ?string           $helpText Texto de ajuda exibido abaixo do grupo (opcional).
     * @param  array|string|null $checked  Valores marcados inicialmente. Pode ser string , array ou nulo.
     * @param  bool              $required Define se o campo é obrigatório (adiciona * e valida).
     * @param  bool              $switch   Se verdadeiro, exibe os checkboxes como switches toggle (form-switch).
     * @param  bool              $inline   Se verdadeiro, exibe os checkboxes em linha (form-check-inline).
     * @param  array             $options  Opções no formato ['valor' => 'Rótulo']. (padrão: array vazio).
     * @return void
     */
    public function __construct(
        public string $name,
        public ?string $label,
        public ?string $helpText,
        public array|string|null $checked,
        public bool $required = false,
        public bool $switch = false,
        public bool $inline = false,
        public array $options = []
    ) {
        // Se não terminar com [] e houver múltiplas opções, força o formato array
        if (count($options) > 1 && !str_ends_with($name, '[]')) {
            $this->name .= '[]';
        }
        
        $this->processFieldData();
        $this->checkedValues = $this->determineCheckedValues();
    }

    /**
     * Determina os valores que devem estar marcados (checked) no checkbox.
     *
     * Prioriza os valores enviados no `old()` (após submissão com erro), seguidos pelos
     * valores fornecidos diretamente no atributo `$checked`. Se nenhum estiver presente,
     * retorna um array vazio.
     *
     * @return array Lista de valores marcados (como strings).
     */
    private function determineCheckedValues(): array
    {
        return (array) old($this->dotName, $this->checked ?? []);
    }

    /**
     * Verifica se um valor específico está marcado (checked).
     *
     * Utilizado na view para definir o atributo `checked` em cada input.
     *
     * @param string $optionValue Valor da opção a ser verificada.
     * @return bool Verdadeiro se o valor estiver na lista de marcados.
     */
    public function isChecked(string $optionValue): bool
    {
        return in_array($optionValue, $this->checkedValues);
    }

    /**
     * Gera um ID único para uma opção específica.
     */
    public function getOptionId(string $optionValue): string
    {
        return $this->makeChildId("option-$optionValue");
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.checkbox');
    }
}