@extends('padrao')
@section('content')

<section class="altura">

    <div class="conteudo">

    <form method="post" action="{{route('alterar-banco-usuario', $registrosFinaisUsuario->id)}}">
        <div class="card-cadastro shadow-lg p-3">
            @csrf
            @method('put')
            <h1 class="titulo">Editar Conta</h1>
            <br><br>

            <input class="textbox" name="id" value="{{old('id', $registrosFinaisUsuario->id)}}" id="inputId" type="text" placeholder="Codigo" readonly>

            <br><br>
            <input class="textbox" name="nome" value="{{old('nome', $registrosFinaisUsuario->nome)}}" id="inputNome" type="text" placeholder="Nome">
            @error('nome')
            <div class="text-danger">
                *Preencher o campo <b>NOME</b>!!
            </div>
            @enderror
            <br><br>
            <input class="textbox" name="cpf" value="{{old('cpf', $registrosFinaisUsuario->cpf)}}" id="inputCPF" type="text" placeholder="CPF">
            @error('cpf')
            <div class="text-danger">
                *Preencher o campo <b>CPF</b>!!
            </div>
            @enderror
            <br><br>
            <input class="textbox" name="telefone" value="{{old('telefone', $registrosFinaisUsuario->telefone)}}" id="inputTelefone" type="text" placeholder="Telefone">
            @error('telefone')
            <div class="text-danger">
                *Preencher o campo <b>TELEFONE</b>!!
            </div>
            @enderror
            <br><br>
            <input class="textbox" name="email" value="{{old('email', $registrosFinaisUsuario->email)}}" id="inputEmail" type="text" placeholder="E-mail">
            @error('email')
            <div class="text-danger">
                *Preencher o campo <b>E-MAIL</b>!!
            </div>
            @enderror
            <br><br>
            <button type="submit" class="botao-entrar">Atualizar</button>
        </div>
    </form>

    </div>

    

</section>

@endsection