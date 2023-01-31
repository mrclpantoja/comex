<x-layout title="Clientes">
    <a class="btn btn-dark mb-2" href="/clientes/criar">Adicionar Cliente</a>
    <ul class="list-group">
        @foreach($clientes as $cliente)
        <li class="list-group-item">{{ $cliente['nome'] }}</li>
        @endforeach 
    </ul>
</x-layout>