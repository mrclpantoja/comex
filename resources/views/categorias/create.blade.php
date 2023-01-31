<x-layout title="Nova Categoria">
    <form action="/categorias/salvar" method="post">
        @csrf
        <div class="mb-2">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" id="nome" name="nome" class="form-control" />
        </div>
        <div class="mb-2">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
    </form>
</x-layout>