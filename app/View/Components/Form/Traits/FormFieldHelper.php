<?php

namespace App\View\Components\Form\Traits;

trait FormFieldHelper
{
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
     * Ex: user[emails][0] -> user.emails.0
     * Ex: product[price] -> product.price
     */
    private function convertToDotNotation(string $name): string
    {
        $dotName = preg_replace('/\[(\d+)?\]/', '.$1', $name);
        return str_replace(['[', ']'], ['.', ''], $dotName);
    }

    /**
     * Gera um ID único para o campo
     * Baseado no nome do campo + timestamp para garantir unicidade
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
}