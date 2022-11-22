@extends('padrao')
@section('content')

<section class="altura">
    <div class="conteudo">

        <form method="post" action="{{route('salvar-banco-usuario')}}">
            @csrf
            <div class="card-cadastro shadow-lg p-3">
                <h1 class="titulo-login">Cadastre-se</h1>

                <p class="txt-editar">Nome:</p>
                <div class="centralizar-caixa">
                    <input class="textbox" name="name" id="inputNome" type="text" placeholder="Virgulino">
                    @error('name')
                    <div class="text-danger">
                        *Preencher o campo <b>NOME</b>!!
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
                    <input class="textbox" name="password" id="inputSenha" type="password" placeholder="Senha">
                    @error('password')
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