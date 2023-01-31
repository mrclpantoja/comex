<x-layout title="Produtos">
    <a class="btn btn-dark mb-2" href="/produtos/criar">Adicionar Produto</a>
    <ul class="list-group">
        @foreach($produtos as $produto)
        <li class="list-group-item">{{ $produto['nome'] }}</li>
        @endforeach 
    </ul>
</x-layout>