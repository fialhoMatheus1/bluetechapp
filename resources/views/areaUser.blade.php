@extends('padrao')
@section('content')

<section class="altura">

    <div class="esq">
        <div class="margin-user">
            <img src="{{'/imgs/user.png'}}" class="img-user"> <b class="titulo">Sua área</b>
        </div>
        <br>
        <center>
            <p>Seja bem vindo!</p>
        </center>
        <div class="centralizar-botao-user">
            <a href="{{'dados-usuario'}}">
                <button type="submit" class="botao-user">Veja seus dados</button>
            </a>
        </div>

        <div class="centralizar-botao-user">
            <a href="{{'dispositivo'}}">
                <button type="submit" class="botao-user">Registre seu dispositivo</button>
            </a>
        </div>
    </div>


    <div class="dir">
        <h1 class="titulo-tabela">Seu sensor</h1>
        <table class="table table-striped tabela">
            <thead>
                <tr class="txt-tabela">
                    <th scope="col">Local</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($registrosDispositivo as $registroLocal)
                @foreach($registrosSensor as $registroStatus)

                <tr>
                    <th class="txt-tabela2">{{$registroLocal->local}}</th>
                    <td class="txt-tabela2">
                        @if($registroStatus->status == 1)
                        Aberto

                        @endif
                        @if($registroStatus->status == 0)
                        Fechado

                        @endif
                    </td>
                </tr>
                @endforeach
                @endforeach



            </tbody>
        </table>

    </div>



</section>



@endsection