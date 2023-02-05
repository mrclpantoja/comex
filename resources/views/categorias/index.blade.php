<x-layout title="Categorias">
    <a class="btn btn-dark mb-2" href="{{ route('categorias.create') }}">Adicionar Categoria</a>
    @isset($mensagemSucesso)
        <div class="alert alert-success">
          {{ $mensagemSucesso }}
        </div>
    @endisset
    <ul class="list-group">
        @foreach($categorias as $categoria)
          <li class="list-group-item d-flex justify-content-between align-items-center">
            {{ $categoria['nome'] }}
            <span class="d-flex">
              <a href="{{ route('categorias.edit', $categoria->id) }}" class="btn btn-primary btn-sm">
                E
              </a>
              &nbsp;
              <form action="{{ route('categorias.destroy', $categoria->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm">x</button>
              </form>
            </span>
          </li>
        @endforeach 
    </ul>
</x-layout>