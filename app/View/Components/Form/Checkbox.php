<?php

namespace App\View\Components\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Checkbox extends Component
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
     * Os valores atualmente marcados (checked) no grupo de checkboxes.
     *
     * Pode vir de:
     * - Dados antigos (old) após falha de validação
     * - Valor passado no atributo 'checked'
     * - Array vazio, se nenhum valor estiver selecionado
     *
     * @var array<int|string, mixed>
     */
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

    public function isChecked(string $optionValue): bool
    {
        return in_array($optionValue, $this->checkedValues);
    }

    public function getOptionId(string $optionValue): string
    {
        $cleanValue = str_replace(['.', '[', ']'], '-', $optionValue);
        $cleanValue = preg_replace('/-+/', '-', $cleanValue);
        return $this->id . '-option-' . trim($cleanValue, '-');
    }

    public function render(): View|Closure|string
    {
        return view('components.form.checkbox');
    }
}