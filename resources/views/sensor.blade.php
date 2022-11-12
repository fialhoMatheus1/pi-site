@extends('padrao')
@section('content')

<section class="altura">

    <div class="conteudo">
        <h1 class="titulo-tabela">Seu sensor</h1>
        <table class="table table-striped tabela">
            <thead>
                <tr class="txt-tabela">
                    <th scope="col">Local</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($registrosSensor as $registrosFinaisSensor)
                <tr>
                    <th class="txt-tabela2">{{$registrosFinaisSensor->local}}</th>
                    <td class="txt-tabela2">{{$registrosFinaisSensor->status}}</td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</section>

@endsection