@extends('padrao')
@section('content')

<section class="altura">
    <div class="conteudo">

        <form method="post" action="{{route('alterar-banco-usuario', $registrosFinaisUsuario->id)}}">
            <div class="card-cadastro shadow-lg p-3">
                @csrf
                @method('put')
                <h1 class="titulo-login">Editar conta</h1>

                <p class="txt-editar">Código da conta:</p>
                <div class="centralizar-caixa">
                    <input class="textbox" name="id" value="{{old('id', $registrosFinaisUsuario->id)}}" id="inputId" type="text" placeholder="Codigo" readonly>
                </div>
                <p class="txt-editar">Nome:</p>
                <div class="centralizar-caixa">
                    <input class="textbox" name="name" value="{{old('name', $registrosFinaisUsuario->name)}}" id="inputNome" type="text" placeholder="Nome">
                    @error('name')
                    <div class="text-danger">
                        *Preencher o campo <b>NOME</b>!!
                    </div>
                    @enderror
                </div>
                <p class="txt-editar">E-mail:</p>
                <div class="centralizar-caixa">
                    <input class="textbox" name="email" value="{{old('email', $registrosFinaisUsuario->email)}}" id="inputEmail" type="email" placeholder="E-mail">
                    @error('email')
                    <div class="text-danger">
                        *Preencher o campo <b>E-MAIL</b>!!
                    </div>
                    @enderror
                </div>
                <p class="txt-editar">Senha:</p>
                <div class="centralizar-caixa">
                    <input class="textbox" name="password" value="{{old('password', $registrosFinaisUsuario->password)}}" id="inputSenha" type="password" placeholder="Senha">
                    @error('password')
                    <div class="text-danger">
                        *Preencher o campo <b>SENHA</b>!!
                    </div>
                    @enderror
                </div>

                <div class="centralizar-botao">
                    <button type="submit" class="botao-entrar">Atualizar</button>
                </div>
            </div>
        </form>

    </div>



</section>

@endsection