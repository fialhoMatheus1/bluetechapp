@extends('padrao')
@section('content')

<section class="altura">
    <div class="conteudo">

        <form>
            <div class="card-cadastro shadow-lg p-3">

                @foreach($registrosUsuario as $registrosFinaisUsuario)
                <h1 class="titulo-login">Seus dados</h1>
                
                <p class="txt-editar">Código da conta:</p>
                <div class="centralizar-caixa">
                    <input class="textbox" name="id" value="{{old('id', $registrosFinaisUsuario->id)}}" id="inputId" type="text" placeholder="Codigo" readonly>
                </div>

                <p class="txt-editar">Nome:</p>
                <div class="centralizar-caixa">
                    <input class="textbox" name="name" value="{{old('name', $registrosFinaisUsuario->name)}}" id="inputNome" type="text" placeholder="Nome" readonly>
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
        </form>

    </div>

    </div>
</section>


@endsection