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
     * @param  string  $name           Nome do campo (ex: "permissions[]"). Usado em `name=""` do input.
     * @param  ?string $label          Rótulo do grupo exibido acima dos checkboxes (opcional).
     * @param  ?array  $options        Opções no formato ['valor' => 'Rótulo']. Pode ser nulo (padrão: array vazio).
     * @param  ?string $helpText       Texto de ajuda exibido abaixo do grupo (opcional).
     * @param  array|string|null $checked  Valores marcados inicialmente. Pode ser string (único valor), array ou nulo.
     * @param  bool    $required       Define se o campo é obrigatório (adiciona * e valida).
     * @param  bool    $switch         Se verdadeiro, exibe os checkboxes como switches toggle (Bootstrap form-switch).
     * @param  bool    $inline         Se verdadeiro, exibe os checkboxes em linha (form-check-inline).
     * @return void
     */
    public function __construct(
        public string $name,
        public ?string $label,
        public ?array $options,
        public ?string $helpText,
        public array|string|null $checked,
        public bool $required = false,
        public bool $switch = false,
        public bool $inline = false
    ) {
        $this->options = $this->options ?? [];
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
        $oldInput = old($this->dotName);
        if ($oldInput !== null) {
            return is_array($oldInput) ? $oldInput : [(string) $oldInput];
        }

        if (is_array($this->checked)) {
            return $this->checked;
        }

        if ($this->checked !== null) {
            return [(string) $this->checked];
        }

        return [];
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
     * Gera um ID único e seguro para um input checkbox baseado no valor da opção.
     *
     * Substitui caracteres especiais (como ponto e colchetes) por hífens para garantir
     * compatibilidade com IDs HTML. Útil para associar labels com inputs via `for`.
     *
     * @param string $optionValue Valor da opção (ex: "admin", "user.create").
     * @return string ID HTML seguro (ex: "permissions-option-admin").
     */
    public function getOptionId(string $optionValue): string
    {
        $cleanValue = str_replace(['.', '[', ']'], '-', $optionValue);
        $cleanValue = preg_replace('/-+/', '-', $cleanValue);
        return $this->id . '-option-' . trim($cleanValue, '-');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.checkbox');
    }
}