<x-layout title="Adicionar Produto">
    <x-produtos.form :action="route('produtos.store')"
        :nome="old('nome')"
        :descricao="old('descricao')"
        :quantidade="old('quantidade')"
        :precounitario="old('precounitario')"
        :update="false"
    />
</x-layout>