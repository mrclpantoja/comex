<form action="{{ $action }}" method="post">
    <?php $acao = "Cadastrar"; ?>
    @csrf
    @if($update)
        @method('PUT')
        <?php $acao = "Alterar"; ?>
    @endif
    <div class="mb-2">
        <label for="nome" class="form-label">Nome:</label>
        <input type="text" id="nome" name="nome" class="form-control" @isset($nome) value="{{ $nome }}" @endisset/>
    </div>
    <div class="mb-2">
        <label for="nome" class="form-label">CPF:</label>
        <input type="text" id="cpf" name="cpf" class="form-control"@isset($cpf) value="{{ $cpf }}" @endisset />
    </div>
    <div class="mb-2">
        <label for="nome" class="form-label">Telefone:</label>
        <input type="text" id="telefone" name="telefone" class="form-control" @isset($telefone) value="{{ $telefone }}" @endisset/>
    </div>
    <h2>Endereço</h2>
    <hr>
    <div class="mb-2">
        <label for="nome" class="form-label">Rua:</label>
        <input type="text" id="rua" name="rua" class="form-control" @isset($rua) value="{{ $rua }}" @endisset/>
    </div>
    <div class="mb-2">
        <label for="nome" class="form-label">Número:</label>
        <input type="text" id="numero" name="numero" class="form-control" @isset($numero) value="{{ $numero }}" @endisset/>
    </div>
    <div class="mb-2">
        <label for="nome" class="form-label">Complemento:</label>
        <input type="text" id="complemento" name="complemento" class="form-control" @isset($complemento) value="{{ $complemento }}" @endisset/>
    </div>
    <div class="mb-2">
        <label for="nome" class="form-label">Bairro:</label>
        <input type="text" id="bairro" name="bairro" class="form-control" @isset($bairro) value="{{ $bairro }}" @endisset/>
    </div>
    <div class="mb-2">
        <label for="nome" class="form-label">Cidade:</label>
        <input type="text" id="cidade" name="cidade" class="form-control" @isset($cidade) value="{{ $cidade }}" @endisset/>
    </div>
    <div class="mb-2">
        <label for="nome" class="form-label">Estado:</label>
        <input type="text" id="estado" name="estado" class="form-control" @isset($estado) value="{{ $estado }}" @endisset />
    </div>
    <div class="mb-2">
        <button type="submit" class="btn btn-primary">{{ $acao }}</button>
    </div>
</form>

