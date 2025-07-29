<?php

namespace App\View\Components\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Radio extends Component
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
     * Cria uma nova instância do componente Radio.
     *
     * Renderiza um grupo de botões de rádio com suporte a:
     * - Rótulo do grupo
     * - Valores persistentes (old input)
     * - Validação e mensagens de erro
     * - Layout em linha ou vertical
     * - Texto de ajuda
     * - Acessibilidade (IDs únicos e labels associadas)
     *
     * @param  string      $name         Nome do campo (ex: 'gender'). Usado em `name` dos inputs.
     * @param  ?string     $label        Rótulo exibido acima do grupo (opcional).
     * @param  ?string     $value        Valor padrão do campo (raramente usado diretamente).
     * @param  ?array      $options      Opções no formato ['valor' => 'Rótulo']. Pode ser nulo (padrão: vazio).
     * @param  ?string     $helpText     Texto de ajuda exibido abaixo do grupo.
     * @param  ?string     $checkedValue Valor atualmente selecionado (substituído por `old()` se houver).
     * @param  bool        $required     Define se o campo é obrigatório (exibe * e marca como required).
     * @param  bool        $inline       Se verdadeiro, exibe os radios em linha (form-check-inline).
     * @return void
     */
    public function __construct(
        public string $name,
        public ?string $label,
        public ?string $value,
        public ?array $options,
        public ?string $helpText,
        public ?string $checkedValue,
        public bool $required = false,
        public bool $inline = false
    ) {
        $this->processFieldData();
        $this->checkedValue = old($this->dotName, $this->checkedValue);
    }

    /**
     * Verifica se uma opção específica está selecionada
     */
    public function isChecked(string $optionValue): bool
    {
        return $optionValue == $this->checkedValue;
    }

    /**
     * Gera um ID único para cada opção de radio
     */
    public function getOptionId(string $optionValue): string
    {
        return $this->id . '-' . str_replace(['.', '[', ']'], ['-', '', ''], $optionValue);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.radio');
    }
}