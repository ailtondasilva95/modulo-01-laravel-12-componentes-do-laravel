<?php

namespace App\View\Components\Form\Traits;

use Illuminate\Support\HtmlString;
use Illuminate\Support\Str;

trait FormFieldHelper
{
    /**
     * Processa os dados do campo
     */
    private function processFieldData(): void
    {
        // Garante que $this->name esteja definido
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
    private function convertToDotNotation(string $name): string
    {
        // Substitui [índice] por .índice, mesmo se vazio
        $name = preg_replace('/\[([^\]]*)\]/', '.$1', $name);
        // Remove múltiplos pontos e pontos no início/fim
        return trim(preg_replace('/\.+/', '.', $name), '.');
    }

    /**
     * Gera um ID único para o campo
     * Baseado no nome do campo + timestamp para garantir unicidade
     */
    private function generateId(): string
    {
        // já trata ., [, ], espaços, etc. // ou uniqid() completo
        return Str::slug($this->name, '-') . '-' . substr(uniqid(), -6);
    }

    /**
     * Verifica se o campo é obrigatório.
     * Se não for obrigatório, retorna uma string vazia. Caso contrário, retorna o asterisco vermelho.
     * @return HtmlString
     */
    public function requiredMark(): HtmlString
    {
        if (!$this->required) {
            return new HtmlString('');
        }

        return new HtmlString('<sup class="text-danger" data-bs-toggle="tooltip" title="campo obrigatório">*</sup>');
    }

    /**
     * Verifica se há erros de validação para este campo
     */
    public function hasError(): bool
    {
        return session()->has('errors') && session('errors')->has($this->dotName);
    }

    /**
     * Obtém a mensagem de erro para este campo
     */
    public function getErrorMessage(): ?string
    {
        return $this->hasError() ? session('errors')->first($this->dotName) : null;
    }

    /**
     * Verifica se o campo tem valor
     */
    public function hasValue(): bool
    {
        return filled($this->value);
    }
}