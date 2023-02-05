<x-layout title="Editar Produtos: {{ $produto->nome }}">
    <x-produtos.form :action="route('produtos.update', $produto->id)"
        :nome="$produto->nome"
        :descricao="$produto->descricao"
        :quantidade="$produto->quantidade"
        :precounitario="$produto->precounitario"
        :update="true"
    />
</x-layout>