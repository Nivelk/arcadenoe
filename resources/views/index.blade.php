@extends('layouts.master')
@section('header')
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                
                <header class="masthead">
                    <img src="/img/header.jpg" style="background-position: center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
                    <div class="header-content">
                            <div class="header-content-inner">
                                <h1 id="homeHeading">Clínica Veterinária Arca de Noé</h1>
                                    <hr>
                                    <p>Clínica Veterinária Arca de Noé o melhor do atendimento <br>médico veterinário ao seu Pet de estimação</p>
                                    <p>A Arca de Noé é uma clínica completa, uma referência em cuidados veterinários ao seu animal de estimação!</p>
                            </div>
                        <a class="btn btn-info btn-xl btn-blue" href="{{route('sobre')}}">Explore nosso Site</a>
                    </div>
                    <div class="table-absolut">
                        <div class="table-fixed">
                            <div class="col">
                                <img src="/img/icon24.png"/>
                                <h2>LIGUE EMERGÊNCIA 24H</h2>
                            </div>
                            <i class="fa fa-phone fa-5x"></i>
                            <p>(11) 2561-2072</p>
                            <p>(11) 98107-0544 (Nextel)</p>
                            <p>(11) 98107-0647 (Nextel)</p>
                            <p>Respondemos Whatsapp!</p>
                        </div>
                    </div>
                </header>
            </div>
            <div class="swiper-slide">Slide 2</div>
            <div class="swiper-slide">Slide 3</div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>
     <script src="/js/componentes/Swiper-3.4.2/dist/js/swiper.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper('.swiper-container', {
        //pagination: '.swiper-pagination',
        paginationClickable: true,
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: 2500,
        autoplayDisableOnInteraction: false
    });
    </script>
@section('content')
    <section class="bg-info" id="sobre">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <h2 class="section-heading text-white">Sobre Nós</h2>
                    <hr class="light">
                    <p class="text-faded text-justify">Agora, sob nova administração, a clínica veterinária Arca de Noé, muito conhecida e localizada na região do Itaim Paulista em São Paulo, encontra-se em pleno funcionamento, proporcionando aos seus clientes um serviço de alta qualidade.</p>
                    <p class="text-faded text-justify">Possuímos uma variedade de serviços na área de saude animal, visando sempre a evolução da medicina veterinária, melhorando cada dia mais a qualidade de vida dos animais e proporcionando bem estar ao proprietário.</p>
                    <p class="text-faded text-justify">Nossos profissionais estão sempre a postos para cuidar e salvar seu bichinho em situações extremas como:</p>
                    <p class="text-faded text-justify">Atropelamentos, Hemorragias, Intoxicações/Envenenamentos, Queimaduras e mordeduras extensas, Vômitos Sucessivos, Convulsões, Desmaios, Queda de altura, Perda de apetite prolongado em filhotes, Distenção Abdominal, Dificuldades em urinar ou defecar (Obstruções), Dor intensa, Parto prolongado, Prostração severa.
                    </p>
                    <a class="btn btn-default btn-xl sr-button" href="{{route('servicos')}}">Nossos Trabalhos</a>
                </div>
            </div>
        </div>
    </section>

    <section id="servicos">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Nosso diferencial</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <div class="sr-icons"><img src="{{url('/img/icon-24h.png')}}"></div>
                        <h3>Atendimento 24h</h3>
                        <p class="text-muted">Conteudo relacionado a ortopedia texto curto mas relevante.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <div class="sr-icons"><img src="{{url('/img/icon-cardiologia.png')}}"></div>
                        <h3>Exames Complementares</h3>
                        <p class="text-muted">Conteudo relacionado a oncologia texto curto mas relevante.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <div class="sr-icons"><img src="{{url('/img/icon-especialidade.png')}}"></div>
                        <h3>Atendimento Especializado</h3>
                        <p class="text-muted">Conteudo relacionado a ondontologia texto curto mas relevante.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <div class="sr-icons"><img src="{{url('/img/icon-internacao.png')}}"></div>
                        <h3>Cirurgia Internação</h3>
                        <p class="text-muted">Conteudo relacionado a Cardiologia texto curto mas relevante.</p>
                    </div>
                </div>
                 <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <div class="sr-icons"><img src="{{url('/img/icon-internacao.png')}}"></div>
                        <h3>Cirurgia Internação</h3>
                        <p class="text-muted">Conteudo relacionado a Cardiologia texto curto mas relevante.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.gallery')
    @include('layouts.form')
@endsection