<?php

namespace App\View\Components\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
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
     * Cria uma nova instância do componente Input.
     *
     * Renderiza um campo de entrada (input) com suporte a:
     * - Vários tipos (text, email, password, number, etc.)
     * - Ícones esquerdo/direito
     * - Placeholder
     * - Máscaras estáticas ou dinâmicas (via atributos)
     * - Texto de canto (ex: contador, dica)
     * - Validação Laravel (old input, erros)
     * - Acessibilidade e IDs únicos
     *
     * @param  string      $name         Nome do campo (ex: 'email'). Usado em `name` e `id`.
     * @param  ?string     $label        Rótulo exibido acima do campo (opcional).
     * @param  ?string     $value        Valor inicial do campo (substituído por `old()` se houver).
     * @param  ?string     $placeholder  Texto de placeholder (quando o campo está vazio).
     * @param  ?string     $type         Tipo do input (text, email, password, number, etc.). Padrão: 'text'.
     * @param  ?string     $icon         Ícone à esquerda (ex: 'bi bi-envelope'). Deve ser compatível com o frontend.
     * @param  ?string     $rightIcon    Ícone à direita (ex: 'bi bi-eye').
     * @param  ?string     $corner       Texto no canto inferior direito (ex: "máx. 100 caracteres").
     * @param  ?string     $mask         Máscara estática (ex: '999 999 999'). Usada com Alpine.JS e o Alpinejs Mask.
     * @param  bool        $required     Define se o campo é obrigatório (exibe * e marca `required`).
     * @return void
     */
    public function __construct(
        public string $name,
        public ?string $icon,
        public ?string $mask,
        public ?string $label,
        public ?string $value,
        public ?string $corner,
        public ?string $rightIcon,
        public ?string $placeholder,
        public bool $required = false,
        public string $type = 'text'
    ) {
        $this->processFieldData();
    }

    /**
     * Verifica se o campo é do tipo password.
     *
     * Usado para ajustar comportamentos visuais (ex: ícone de olho).
     *
     * @return bool
     */
    public function isPasswordType(): bool
    {
        return $this->type === 'password';
    }

    /**
     * Verifica se o campo tem uma máscara estática definida.
     *
     * @return bool
     */
    public function hasStaticMask(): bool
    {
        return filled($this->mask) && is_string($this->mask) && !empty(trim($this->mask));
    }

    /**
     * Verifica se o campo tem uma máscara dinâmica definida via atributo Blade.
     *
     * Exemplo: `mask:dynamic="$money($input, ',')"`
     *
     * @return bool
     */
    public function hasDynamicMask(): bool
    {
        return $this->attributes->has('mask:dynamic') && filled($this->attributes->get('mask:dynamic'));
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.input');
    }
}