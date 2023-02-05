<x-layout title="Produtos">
    <a class="btn btn-dark mb-2" href="{{ route('produtos.create') }}">Adicionar Produto</a>
    @isset($mensagemSucesso)
        <div class="alert alert-success">
          {{ $mensagemSucesso }}
        </div>
    @endisset
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
              <th>id</th>
              <th>Produto</th>
              <th>Preço Unitário</th>
              <th>Estoque</th>
              <th>Ações</th>
            </tr>
          </thead>
          <tbody>
            @foreach($produtos as $produto)
              <tr>
                <td>{{ $produto['id'] }}</td>
                <td>{{ $produto['nome'] }}</td>
                <td>{{ $produto['precounitario'] }}</td>
                <td>{{ $produto['quantidade'] }}</td>
                <td>
                  <a href="{{ route('produtos.edit', $produto->id) }}" class="btn btn-primary btn-sm" style="float: left; margin-right: 2px;">
                    E
                  </a>
                  <form action="{{ route('produtos.destroy', $produto->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">x</button>
                  </form>
                </td>
            </tr>
            @endforeach 
          </tbody>
    </table>
    
</x-layout>