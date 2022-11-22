@extends('padrao')
@section('content')

<section class="altura">

    <div class="conteudo">

        <form method="post" action="{{route('auth.user')}}">
            @csrf
            <div class="card-cadastro shadow-lg p-3">
                <h1 class="titulo-login">Login</h1>
                <div class="centralizar-caixa-login">
                    <input class="textbox" name="email" type="email" placeholder="E-mail">
                </div>
                <div class="centralizar-caixa-login">
                    <input class="textbox" name="password" type="password" placeholder="Senha">
                </div>

                <div class="centralizar-botao">
                    <button class="botao-entrar">Entrar</button>
                </div>

                <div>
                    <p class="msg">Não possui uma conta?</p>
                    <div class="centralizar-botao-cadastrar">
                        <a href="{{'cadastrar-usuario'}}">
                            <button type="submit" class="botao-cadastrar">Cadastre-se</button>
                        </a>
                    </div>
                </div>
            </div>
        </form>

    </div>


</section>

@endsection