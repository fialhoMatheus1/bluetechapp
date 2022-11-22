@extends('padrao')
@section('content')

<section class="altura">
  <div class="conteudo">

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="/imgs/homepage6.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="/imgs/MicrosoftTeams-image (9).png" class="d-block w-100" alt="...">
        </div>
      </div>
    </div>

    <p>A BlueTech veio para melhorar a vida das pessoas.
      Além de nosso produto fisico, criamos um soft. Nosso site
      veio para complementar seu aparelho, passando informações
      de forma mais simples, eficiente e rápida em questão a necessidade
      de nossos clientes.</p>

    <p>Em nosso site você consegue configurar o aparelho e receber
      informações da tal função exercida por ele. Assim, fazendo com que
      você se sinta seguro e informado sobre sua residência.</p>

    <p>Mais segurança a sua disposição, e menos preocupação!</p>


    <div class="controlarCards">
      <div class="card shadow-lg p-3 mb-5  rounded">
        <h5 class="card-title text-info text-center">Crie sua conta</h5>
        <p class="txtCard">
          Crie sua conta em nosso site e encontre o seu sensor para se manter atualizado na segurança de sua casa em tempo real.
        </p>

        <div class="botaoCard2">
          <a href="{{route('cadastrar-usuario')}}" class="botaohome btn text-light btn-info">Quero ver!</a>
        </div>
      </div>

      <div class="card shadow-lg p-3 mb-5  rounded">
        <h5 class="card-title text-info text-center">Veja seu dispositivo</h5>
        <p class="txtCard">
          No nosso site você consegue monitorar seu aparelho onde quer que você esteja. Para aessar essa funcionalidade clique <a href="{{'cadastrar-usuario'}}">aqui</a> para se cadastrar.
        </p>

        <div class="botaoCard">
          <a href="{{route('login')}}" class="botaohome btn text-light btn-info">Quero ver!</a>
        </div>
      </div>
    </div>



</section>




@endsection