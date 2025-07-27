<?php

namespace App\View\Components\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    /**
     * Create a new component instance.
     * 
     * @param string|null $id ID do campo (será gerado automaticamente se não informado)
     * @param string $name Nome do campo (ex: user[name], product[0][price])
     * @param string|null $icon Ícone à esquerda do campo
     * @param string|null $mask Máscara para o campo, pode ser estáticas ou dinâmicas via Alpine.js
     * @param string|null $label Texto do rótulo do campo (ex: Nome Completo, Email)
     * @param string|null $value Valor do campo (valor padrão)
     * @param string|null $corner Texto de canto (ex: dica, informação adicional)
     * @param string|null $dotName Nome do campo em formato dot notation para erros e old (gerado automaticamente)
     * @param string|null $rightIcon Ícone à direita do campo
     * @param string|null $placeholder Texto de placeholder (ex: Digite seu nome...)
     * @param string $type Tipo do campo (text, email, password, number, etc.)
     * @param bool $required Define se o campo é obrigatório
     * @return void
     */
    public function __construct(
        public ?string $id,
        public string $name,
        public ?string $icon,
        public ?string $mask,
        public ?string $label,
        public ?string $value,
        public ?string $corner,
        public ?string $dotName,
        public ?string $rightIcon,
        public ?string $placeholder,
        public string $type = 'text',
        public bool $required = false,
    ) {
        $this->processFieldData();
    }

    /**
     * Processa os dados do campo
     */
    private function processFieldData(): void
    {
        $this->dotName = $this->convertToDotNotation($this->name);
        $this->value = old($this->dotName, $this->value);
        $this->id = $this->id ?? $this->generateId();
    }

    /**
     * Converte nome com colchetes para dot notation para erros e old
     */
    private function convertToDotNotation(string $name): string
    {
        $dotName = preg_replace('/\[(\d+)?\]/', '.$1', $name);
        return str_replace(['[', ']'], ['.', ''], $dotName);
    }

    /**
     * Gera um ID único para o campo
     */
    private function generateId(): string
    {
        return str_replace(['.', '[', ']'], ['-', '', ''], $this->name) . '-' . uniqid();
    }

    /**
     * Verifica se o campo é obrigatório.
     * Se não for obrigatório, retorna uma string vazia. Caso contrário, retorna o asterisco vermelho.
     */
    public function requiredMark(): string
    {
        if (!$this->required) {
            return '';
        }

        return '<sup class="text-danger" data-bs-toggle="tooltip" title="campo obrigatório">*</sup>';
    }

    /**
     * Verifica se o campo é do tipo password
     */
    public function isPasswordType(): bool
    {
        return $this->type === 'password';
    }

    /**
     * Verifica se o campo tem máscara estática
     */
    public function hasStaticMask(): bool
    {
        return filled($this->mask) && is_string($this->mask) && !empty(trim($this->mask));
    }

    /**
     * Verifica se o campo tem máscara dinâmica
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