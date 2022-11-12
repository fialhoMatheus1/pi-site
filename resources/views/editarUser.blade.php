@extends('padrao')
@section('content')

<section class="altura">
    <div class="conteudo">
        <form method="post" action="{{route('salvar-banco-usuario')}}">

            <div class="card-cadastro shadow-lg p-3">
                @foreach($registrosUsuario as $registrosFinaisUsuario)
                <h1 class="titulo">Seus Dados</h1>
                <br><br>
                <p class="txt-editar">Código da conta:</p>
                <div class="centralizar-caixa">
                    <input class="textbox" name="id" value="{{old('id', $registrosFinaisUsuario->id)}}" id="inputId" type="text" placeholder="Codigo" readonly>
                </div>

                <p class="txt-editar">Nome:</p>
                <div class="centralizar-caixa">
                    <input class="textbox" name="nome" value="{{old('nome', $registrosFinaisUsuario->nome)}}" id="inputNome" type="text" placeholder="Nome" readonly>
                </div>
                <p class="txt-editar">CPF:</p>
                <div class="centralizar-caixa">
                    <input class="textbox" name="cpf" value="{{old('cpf', $registrosFinaisUsuario->cpf)}}" id="inputCPF" type="text" placeholder="CPF" readonly>
                </div>
                <p class="txt-editar">Telefone:</p>
                <div class="centralizar-caixa">
                    <input class="textbox" name="telefone" value="{{old('telefone', $registrosFinaisUsuario->telefone)}}" id="inputTelefone" type="text" placeholder="Telefone" readonly>
                </div>
                <p class="txt-editar">E-mail:</p>
                <div class="centralizar-caixa">
                    <input class="textbox" name="email" value="{{old('email', $registrosFinaisUsuario->email)}}" id="inputEmail" type="email" placeholder="E-mail" readonly>
                </div>

                <div class="centralizar-botao">
                    <a href="{{route('alterar-usuario', $registrosFinaisUsuario->id)}}">
                        <button type="button" class="botao-entrar">Editar Dados</button>
                    </a>
                </div>
                @endforeach
            </div>

        </form>


    </div>



</section>


@endsection