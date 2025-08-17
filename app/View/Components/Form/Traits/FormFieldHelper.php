<?php

namespace App\View\Components\Form\Traits;

use Illuminate\Support\HtmlString;
use Illuminate\Support\Str;

trait FormFieldHelper
{
    /**
     * Processa os dados do campo
     */
    protected function processFieldData(): void
    {
        if (!isset($this->name)) {
            throw new \InvalidArgumentException('O atributo $name é obrigatório em componentes que usam FormFieldHelper.');
        }

        $this->dotName = $this->convertToDotNotation($this->name);

        if (property_exists($this, 'value') && isset($this->value)) {
            $this->value = old($this->dotName, $this->value);
        }

        $this->id = $this->id ?? $this->generateId();
    }

    /**
     * Converte nome com colchetes para dot notation para erros e old
     * Ex: user[emails][0] -> user.emails.0
     * Ex: product[price] -> product.price
     */
    protected function convertToDotNotation(string $name): string
    {
        // Substitui [índice] por .índice, mesmo se vazio
        $name = preg_replace('/\[([^\]]*)\]/', '.$1', $name);
        // Remove múltiplos pontos e pontos no início/fim
        return trim(preg_replace('/\.+/', '.', $name), '.');
    }

    /**
     * Gera um ID único e consistente baseado no nome
     */
    protected function generateId(): string
    {
        return Str::slug($this->name, '-') . '-' . substr(md5($this->name), 0, 6);
    }

    /**
     * Gera um ID "filho" para elementos relacionados
     */
    protected function makeChildId(string $suffix): string
    {
        return $this->id . '-' . Str::slug($suffix, '-');
    }

    /**
     * Verifica se o campo é obrigatório.
     * Se não for obrigatório, retorna uma string vazia. Caso contrário, retorna o asterisco vermelho.
     * @return HtmlString
     */
    public function requiredMark(): HtmlString
    {
        if (property_exists($this, 'required') && $this->required) {
            return new HtmlString('<sup class="text-danger" data-bs-toggle="tooltip" title="' . __('required field') . '">*</sup>');
        }

        return new HtmlString('');
    }

    /**
     * Verifica se há erros de validação para este campo
     */
    public function hasError(): bool
    {
        return session()->has('errors') && session('errors')->has($this->dotName);
    }

    /**
     * Verifica se o campo tem valor
     */
    public function hasValue(): bool
    {
        return filled($this->value);
    }
}