<x-layout title="Categorias">
    <a class="btn btn-dark mb-2" href="/categorias/criar">Adicionar Categoria</a>
    <ul class="list-group">
        @foreach($categorias as $categoria)
        <li class="list-group-item">{{ $categoria['nome'] }}</li>
        @endforeach 
    </ul>
</x-layout>