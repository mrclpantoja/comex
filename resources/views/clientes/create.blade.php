<x-layout title="Adicionar Cliente">
    <form action="/clientes/salvar" method="post">
        @csrf
        <div class="mb-2">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" id="nome" name="nome" class="form-control" />
        </div>
        <div class="mb-2">
            <label for="nome" class="form-label">CPF:</label>
            <input type="text" id="cpf" name="cpf" class="form-control" />
        </div>
        <div class="mb-2">
            <label for="nome" class="form-label">Telefone:</label>
            <input type="text" id="telefone" name="telefone" class="form-control" />
        </div>
        <h2>Endereço</h2>
        <hr>
        <div class="mb-2">
            <label for="nome" class="form-label">Rua:</label>
            <input type="text" id="rua" name="rua" class="form-control" />
        </div>
        <div class="mb-2">
            <label for="nome" class="form-label">Número:</label>
            <input type="text" id="numero" name="numero" class="form-control" />
        </div>
        <div class="mb-2">
            <label for="nome" class="form-label">Complemento:</label>
            <input type="text" id="complemento" name="complemento" class="form-control" />
        </div>
        <div class="mb-2">
            <label for="nome" class="form-label">Bairro:</label>
            <input type="text" id="bairro" name="bairro" class="form-control" />
        </div>
        <div class="mb-2">
            <label for="nome" class="form-label">Cidade:</label>
            <input type="text" id="cidade" name="cidade" class="form-control" />
        </div>
        <div class="mb-2">
            <label for="nome" class="form-label">Estado:</label>
            <input type="text" id="estado" name="estado" class="form-control" />
        </div>
        <div class="mb-2">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
    </form>
</x-layout>