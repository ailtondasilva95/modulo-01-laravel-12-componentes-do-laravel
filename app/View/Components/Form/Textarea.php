<?php

namespace App\View\Components\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Textarea extends Component
{
    use Traits\FormFieldHelper;
    
    /**
     * Create a new component instance.
     * 
     * @param string|null $id ID do campo (será gerado automaticamente se não informado)
     * @param string $name Nome do campo (ex: user[name], product[0][price])
     * @param string|null $icon Ícone à esquerda do campo
     * @param string|null $label Texto do rótulo do campo
     * @param string|null $value Valor do campo (valor padrão)
     * @param string|null $corner Texto de canto (ex: dica, informação adicional)
     * @param string|null $dotName Nome do campo em formato dot notation para erros e old (gerado automaticamente)
     * @param string|null $rightIcon Ícone à direita do campo
     * @param string|null $placeholder Texto de placeholder
     * @param bool $required Define se o campo é obrigatório
     * @return void
     */
    public function __construct(
        public ?string $id,
        public string $name,
        public ?string $icon,
        public ?string $label,
        public ?string $value,
        public ?string $corner,
        public ?string $dotName,
        public ?string $rightIcon,
        public ?string $placeholder,
        public bool $required = false,
    )
    {
        $this->processFieldData();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.textarea');
    }
}