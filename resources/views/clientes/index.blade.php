<x-layout title="Clientes">
    <a class="btn btn-dark mb-2" href="/clientes/criar">Adicionar Cliente</a>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
              <th>id</th>
              <th>Nome do Cliente</th>
              <th>CPF</th>
              <th>Telefone</th>
            </tr>
          </thead>
          <tbody>
            @foreach($clientes as $cliente)
              <tr>
                <td>{{ $cliente['id'] }}</td>
                <td>{{ $cliente['nome'] }}</td>
                <td>{{ $cliente['cpf'] }}</td>
                <td>{{ $cliente['telefone'] }}</td>
            </tr>
            @endforeach 
          </tbody>
    </table>
</x-layout>