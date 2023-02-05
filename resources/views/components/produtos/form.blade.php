<form action="{{ $action }}" method="post">
    <?php $acao = "Cadastrar"; ?>
    @csrf
    @if($update)
        @method('PUT')
        <?php $acao = "Alterar"; ?>
    @endif
    <div class="mb-2">
        <label for="nome" class="form-label">Nome do Produto:</label>
        <input type="text" id="nome" name="nome" class="form-control" @isset($nome) value="{{ $nome }}" @endisset/>
    </div>
    <div class="mb-2">
        <label for="nome" class="form-label">Descrição:</label>
        <input type="text" id="descricao" name="descricao" class="form-control" @isset($descricao) value="{{ $descricao }}" @endisset/>
    </div>

    <div class="mb-2">
        <div class="row">
            <div class="col-sm-6">
                <label for="nome" class="form-label">Quantidade Estoque:</label>
                <input type="text" id="quantidade" name="quantidade" class="form-control" @isset($quantidade) value="{{ $quantidade }}" @endisset/>    
            </div>
            <div class="col-sm-6">
                <label for="nome" class="form-label">Preço Unitário:</label>
                <input type="text" id="precounitario" name="precounitario" class="form-control" @isset($precounitario) value="{{ $precounitario }}" @endisset/>
            </div>
        </div>
    </div>
    <div class="mb-2">
        <button type="submit" class="btn btn-primary">{{ $acao }}</button>
    </div>
</form>