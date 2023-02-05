<x-layout title="Adicionar Cliente">
    <x-clientes.form :action="route('clientes.store')"
        :nome="old('nome')"
        :cpf="old('cpf')"
        :telefone="old('telefone')"
        :rua="old('rua')"
        :numero="old('numero')"
        :complemento="old('complemento')"
        :bairro="old('bairro')"
        :cidade="old('cidade')"
        :estado="old('estado')"
        :update="false"
    />
</x-layout>