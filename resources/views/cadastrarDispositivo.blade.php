@extends('padrao')
@section('content')

<section class="altura">

    <div class="conteudo">

        <div class="quadro-cad controlar-quadro">

            <form method="post" action="{{route('salvar-banco-dispositivo')}}">
                @csrf
                <h1 class="titulo">Dispositivo</h1>
                <br><br>
                <input class="textbox" name="FK_Usuario" id="inputFK_Usuario" type="protected" placeholder="Código de usuário">

                <br><br>
                <input class="textbox" name="local" id="inputLocal" type="text" placeholder="Local do sensor">
                @error('local')
                <div class="text-danger">
                    *Preencher o campo <b>LOCAL</b>!!
                </div>
                @enderror
                <br><br>
                <input class="textbox" name="serial" id="inputSerial" type="text" placeholder="N° Serial">
                @error('serial')
                <div class="text-danger">
                    *Preencher o campo <b>N° SERIAL</b>!!
                </div>
                @enderror
                <br><br>
                <button type="submit" class="botao-entrar">Finalizar</button>
            </form>

        </div>

    </div>

    <form method="" action="">
        @csrf
        <div class="card-cadastro shadow-lg p-3">
            <h1 class="titulo-login">Dispositivo</h1>
            <div class="centralizar-caixa-login">
                <input class="textbox" name="local" id="inputLocal" type="text" placeholder="Local do sensor">
                @error('local')
                <div class="text-danger">
                    *Preencher o campo <b>LOCAL</b>!!
                </div>
                @enderror
            </div>
            <div class="centralizar-caixa-login">
                <input class="textbox" name="serial" id="inputSerial" type="text" placeholder="N° Serial">
                @error('serial')
                <div class="text-danger">
                    *Preencher o campo <b>N° SERIAL</b>!!
                </div>
                @enderror
            </div>

            <div class="centralizar-botao">
                <button class="botao-entrar">Finalizar</button>
            </div>
        </div>
        </div>
    </form>


</section>

@endsection