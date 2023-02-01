<x-layout title="Produtos">
    <a class="btn btn-dark mb-2" href="/produtos/criar">Adicionar Produto</a>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
              <th>id</th>
              <th>Produto</th>
              <th>Preço Unitário</th>
              <th>Estoque</th>
            </tr>
          </thead>
          <tbody>
            @foreach($produtos as $produto)
              <tr>
                <td>{{ $produto['id'] }}</td>
                <td>{{ $produto['nome'] }}</td>
                <td>{{ $produto['precounitario'] }}</td>
                <td>{{ $produto['quantidade'] }}</td>
            </tr>
            @endforeach 
          </tbody>
    </table>
    
</x-layout>