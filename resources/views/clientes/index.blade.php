<x-layout title="Clientes">
    <a class="btn btn-dark mb-2" href="{{ route('clientes.create') }}">Adicionar Cliente</a>
    @isset($mensagemSucesso)
        <div class="alert alert-success">
          {{ $mensagemSucesso }}
        </div>
    @endisset
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
              <th>id</th>
              <th>Nome do Cliente</th>
              <th>CPF</th>
              <th>Telefone</th>
              <th>Ações</th>
            </tr>
          </thead>
          <tbody>
            @foreach($clientes as $cliente)
              <tr>
                <td>{{ $cliente['id'] }}</td>
                <td>{{ $cliente['nome'] }}</td>
                <td>{{ $cliente['cpf'] }}</td>
                <td>{{ $cliente['telefone'] }}</td>
                <td>
                  <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-primary btn-sm" style="float: left; margin-right: 2px;">
                    E
                  </a>
                  <form action="{{ route('clientes.destroy', $cliente->id) }}" method="post">
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