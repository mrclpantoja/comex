<x-layout title="Editar Categoria: {{ $categoria->nome }}">
    <x-categorias.form 
        :action="route('categorias.update', $categoria->id)"
        :nome="$categoria->nome" :update="true"
        :teste="2" />
</x-layout>