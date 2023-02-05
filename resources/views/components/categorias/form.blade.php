<form action="{{ $action }}" method="post">
    <?php $acao = "Cadastrar"; ?>
    @csrf
    
    @if($update)
        @method('PUT')
        <?php $acao = "Alterar"; ?>
    @endif
    <div class="mb-2">
        <label for="nome" class="form-label">Nome:</label>
        <input type="text" id="nome" name="nome" 
            class="form-control" 
            @isset($nome) value="{{ $nome }}" @endisset />
    </div>
    <div class="mb-2">
        <button type="submit" class="btn btn-primary">{{ $acao }}</button>
    </div>
</form>