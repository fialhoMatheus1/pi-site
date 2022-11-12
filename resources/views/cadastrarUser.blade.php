@extends('padrao')
@section('content')

<section class="altura">
    <div class="conteudo">

        <form method="post" action="{{route('salvar-banco-usuario')}}">
            @csrf
            <div class="card-cadastro shadow-lg p-3">
                <h1 class="titulo">Cadastre-se</h1>
                <br><br>

                <p class="txt-editar">Nome:</p>
                <div class="centralizar-caixa">
                    <input class="textbox" name="nome" id="inputNome" type="text" placeholder="Virgulino">
                    @error('nome')
                    <div class="text-danger">
                        *Preencher o campo <b>NOME</b>!!
                    </div>
                    @enderror
                </div>
                <p class="txt-editar">CPF:</p>
                <div class="centralizar-caixa">
                    <input class="textbox" name="cpf" id="inputCPF" type="text" placeholder="000.000.000-0">@error('cpf')
                    <div class="text-danger">
                        *Preencher o campo <b>CPF</b>!!
                    </div>
                    @enderror
                </div>
                <p class="txt-editar">Telefone:</p>
                <div class="centralizar-caixa">
                    <input class="textbox" name="telefone" id="inputTelefone" type="text" placeholder="(00)90000-0000">
                    @error('telefone')
                    <div class="text-danger">
                        *Preencher o campo <b>TELEFONE</b>!!
                    </div>
                    @enderror
                </div>
                <p class="txt-editar">E-mail:</p>
                <div class="centralizar-caixa">
                    <input class="textbox" name="email" id="inputEmail" type="email" placeholder="virgo-lino@servicodeemail.com">
                    @error('email')
                    <div class="text-danger">
                        *Preencher o campo <b>EMAIL</b>!!
                    </div>
                    @enderror
                </div>
                <p class="txt-editar">Senha:</p>
                <div class="centralizar-caixa">
                    <input class="textbox" name="senha" id="inputSenha" type="password" placeholder="Senha">
                    @error('senha')
                    <div class="text-danger">
                        *Preencher o campo <b>SENHA</b>!!
                    </div>
                    @enderror
                </div>

                <div class="centralizar-botao">
                    <button type="submit" class="botao-entrar">Cadastrar</button>
                </div>

            </div>
        </form>
</section>


@endsection