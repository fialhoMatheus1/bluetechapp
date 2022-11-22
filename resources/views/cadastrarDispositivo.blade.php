@extends('padrao')
@section('content')

<section class="altura">

    <div class="conteudo">

        <form method="post" action="{{route('dispositivo')}}">
            @csrf
            <div class="card-cadastro shadow-lg p-3">
                <h1 class="titulo-login">Dispositivo</h1>

                <p class="txt-editar">Local do sensor:</p>
                <div class="centralizar-caixa-login">
                    <input class="textbox" name="local" id="inputLocal" type="text" placeholder="Sala de estar">
                    @error('local')
                    <div class="text-danger">
                        *Preencher o campo <b>LOCAL</b>!!
                    </div>
                    @enderror
                </div>
                <p class="txt-editar">Número serial:</p>
                <div class="centralizar-caixa-login">
                    <input class="textbox" name="serial" id="inputSerial" type="text" placeholder="6000">
                    @error('serial')
                    <div class="text-danger">
                        *Preencher o campo <b>N° SERIAL</b>!!
                    </div>
                    @enderror
                </div>
                <p class="txt-editar">Código da conta:</p>
                <div class="centralizar-caixa-login">
                    <input class="textbox" name="FK_Usuario" id="inputFK_Usuario" type="text" placeholder="555">
                    @error('FK_Usuario')
                    <div class="text-danger">
                        *Preencher o campo <b>Código da conta</b>!!
                    </div>
                    @enderror
                </div>

                <div class="centralizar-botao">
                    <button class="botao-entrar">Finalizar</button>
                </div>
            </div>
           
        </form>

    </div>




</section>

@endsection