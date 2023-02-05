<x-layout title="Editar Cliente: {{ $cliente->nome }}">
    <x-clientes.form :action="route('clientes.update', $cliente->id)"
        :nome="$cliente->nome"
        :cpf="$cliente->cpf"
        :telefone="$cliente->telefone"
        :rua="$cliente->rua"
        :numero="$cliente->numero"
        :complemento="$cliente->complemento"
        :bairro="$cliente->bairro"
        :cidade="$cliente->cidade"
        :estado="$cliente->estado"
        :update="true"
    />
</x-layout>