<x-layout title="Categorias">
    <a href="/categorias/criar">Adicionar Categoria</a>
    <ul>
        @foreach($categorias as $categoria)
        <li>{{ $categoria }}</li>
        @endforeach 
    </ul>
</x-layout>