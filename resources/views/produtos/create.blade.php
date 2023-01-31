<x-layout title="Adicionar Produto">
    <form action="/produtos/salvar" method="post">
        @csrf
        <div class="mb-2">
            <label for="nome" class="form-label">Nome do Produto:</label>
            <input type="text" id="nome" name="nome" class="form-control" />
        </div>
        <div class="mb-2">
            <label for="nome" class="form-label">Descrição:</label>
            <input type="text" id="descricao" name="descricao" class="form-control" />
        </div>

        <div class="mb-2">
            <div class="row">
                <div class="col-sm-6">
                    <label for="nome" class="form-label">Quantidade Estoque:</label>
                    <input type="text" id="estoque" name="estoque" class="form-control" />    
                </div>
                <div class="col-sm-6">
                    <label for="nome" class="form-label">Preço Unitário:</label>
                    <input type="text" id="precounitario" name="precounitario" class="form-control" />
                </div>
            </div>
        </div>
        <div class="mb-2">
            <button type="submit" class="btn btn-primary">Cadastrar Produto</button>
        </div>
    </form>
</x-layout>