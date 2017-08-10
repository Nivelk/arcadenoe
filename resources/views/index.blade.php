@extends('layouts.master')
@section('content')
    <header class="masthead">
        <script src="/js/componentes/jssor/jssor.slider-25.2.1.min.js" type="text/javascript"></script>
        <script src="/js/componentes/jssor/slide.master.js" type="text/javascript"></script>
        <style>
            .jssorl-004-double-tail-spin img {
                animation-name: jssorl-004-double-tail-spin;
                animation-duration: 1.2s;
                animation-iteration-count: infinite;
                animation-timing-function: linear;
            }

            @keyframes jssorl-004-double-tail-spin {
                from {
                    transform: rotate(0deg);
                }

                to {
                    transform: rotate(360deg);
                }
            }
        </style>
            <div id="jssor_1" class="header_slide" style="position:relative;margin:0 auto;top:0px;left:0px;width:1300px;overflow:hidden;visibility:hidden;padding-bottom:0px;">
        <!-- Loading Screen -->
            <div data-u="loading" class="jssorl-004-double-tail-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="/img/slide/double-tail-spin.svg" />
            </div>
        <!---Loading scren fim-->
        <!--slides-->
            <div data-u="slides" class="header_slide" style="cursor:default;position:relative;top:0px;left:0px;width:1300px;overflow:hidden;margin-bottom:0px;">
                <div>
                    <img src="/img/header.jpg" style="background-size:cover;width:100%;height:auto;margin-bottom:0px;"/>
                    <div class="header-content">
                        <div class="header-content-inner">
                            <h1 id="homeHeading">Clínica Veterinária Arca de Noé</h1>
                                <hr>
                            <p>Clínica Veterinária Arca de Noé o melhor do atendimento <br>médico veterinário ao seu Pet de estimação</p>
                            <p>A Arca de Noé é uma clínica completa, uma referência em cuidados veterinários ao seu animal de estimação!</p>
                        </div>
                    </div>
                </div>
            </div>
        <!--slide fim--->
            <script type="text/javascript">jssor_1_slider_init();</script>
        </div>
        <div class="header-content">
            <div class="header-content-inner">
                <a class="btn btn-info btn-xl btn-blue" href="{{route('sobre')}}">Explore nosso Site</a>
            </div>
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
                        <div class="sr-icons"><img src="{{url('/img/pata.png')}}"></div>
                        <h3>Ortopedia</h3>
                        <p class="text-muted">Conteudo relacionado a ortopedia texto curto mas relevante.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <div class="sr-icons"><img src="{{url('/img/oncologia.png')}}"></div>
                        <h3>Oncologia</h3>
                        <p class="text-muted">Conteudo relacionado a oncologia texto curto mas relevante.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <div class="sr-icons"><img src="{{url('/img/dente.png')}}"></div>
                        <h3>Odontologia</h3>
                        <p class="text-muted">Conteudo relacionado a ondontologia texto curto mas relevante.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <div class="sr-icons"><img src="{{url('/img/cardiologia.png')}}"></div>
                        <h3>Cardiologia</h3>
                        <p class="text-muted">Conteudo relacionado a Cardiologia texto curto mas relevante.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="no-padding" id="galeria">
        <div class="container-fluid">
            <div class="row no-gutter popup-gallery">
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="{{url('/img/portfolio/fullsize/1.jpg')}}">
                        <img class="img-fluid" src="{{url('/img/portfolio/thumbnails/1.jpg')}}" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Conteudo relacionado a Cardiologia texto curto mas relevante.
                                </div>
                                <div class="project-name">
                                    
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="{{url('/img/portfolio/fullsize/2.jpg')}}">
                        <img class="img-fluid" src="{{url('/img/portfolio/thumbnails/2.jpg')}}" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    
                                </div>
                                <div class="project-name">
                                    
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="{{url('/img/portfolio/fullsize/3.jpg')}}">
                        <img class="img-fluid" src="{{url('/img/portfolio/thumbnails/3.jpg')}}" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    
                                </div>
                                <div class="project-name">
                                    
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="{{url('/img/portfolio/fullsize/4.jpg')}}">
                        <img class="img-fluid" src="{{url('/img/portfolio/thumbnails/4.jpg')}}" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    
                                </div>
                                <div class="project-name">
                                    
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="{{url('/img/portfolio/fullsize/5.jpg')}}">
                        <img class="img-fluid" src="{{url('/img/portfolio/thumbnails/5.jpg')}}" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    
                                </div>
                                <div class="project-name">
                                    
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="{{url('/img/portfolio/fullsize/6.jpg')}}">
                        <img class="img-fluid" src="{{url('/img/portfolio/thumbnails/6.jpg')}}" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    
                                </div>
                                <div class="project-name">
                                    
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section id="contato">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <h2 class="section-heading">Entre em Contato!</h2>
                    <hr class="primary">
                        <form action="{{route('contato.send')}}" method="POST" class="from-group">
                            {{csrf_field()}}
                            <label for="nomeCompleto" class="">Nome completo:</label>
                            <input class="form-control form-control-lg" id="nomeCompleto" type="text" name="nomecompleto"/> 
                            <label for="emailMeng" class="">Email:</label>
                            <input class="form-control form-control-lg" id="emailMeng" type="email" name="email"/> 
                            <label for="telMeng" class="">Telefone:</label>
                            <input class="form-control form-control-lg" id="telMeng" type="text" name="telefone"/> 
                            <label for="endMeng" class="">Endereço:</label>
                            <input class="form-control form-control-lg" id="endMeng" type="text" name="endereco"/> 
                            <label for="assuntoMeng" class="">Assunto:</label>
                            <input class="form-control form-control-lg" id="assuntoMeng" type="text" name="assunto"/>
                            <label for="mensagenMeng" class="">Mensagem:</label>
                            <textarea class="form-control form-control-lg" id="mensagenMeng" name="mensagem"></textarea>
                                <br>
                            <input class="btn btn-info btn-xl sr-button btn-blue" type="submit" value="Enviar"/>
                        </form>
                        <br>
                    <p>Rua Monte Camberela, 101 Itaim Paulista - São Paulo - SP</p>
                </div>
                <div class="col-7">
                     <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5967d891ffddec6b"></script>
                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Farcadenoevetitaimpaulista%2F&tabs=timeline&width=900&height=200&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=674383036103265" width="900" height="200" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe> 
                </div>
                <div class="col-4">
                    <i class="fa fa-phone fa-2x sr-contact"></i><span>&nbsp;(11) 2561-2072</span>
                    <br>
                    <i class="fa fa-phone fa-2x sr-contact"></i><span>&nbsp;(11) 98107-0544 (Nextel)</span>
                    <br>
                    <i class="fa fa-phone fa-2x sr-contact"></i><span>&nbsp;(11) 98107-0647 (Nextel)</span>
                    <br>
                    <i class="fa fa-whatsapp fa-2x sr-contact"></i><span>&nbsp;Respondemos Whatsapp!</span>
                    <br>
                    
                    <p>
                        <i class="fa fa-envelope-o fa-2x sr-contact"></i>
                        <span>&nbsp;contato@arcadenoevet.com.br</span>
                    </p>
                </div>
                <div class="w-100"></div>
                <div class="col-12" style="padding-top:50px;">
                    <center>
                        <h3>PARCEIRO</h3>
                        <hr>
                        <img src="{{url('/img/header_logo.png')}}" alt="health fo pet"/>
                    </center>
                </div>
            </div>
        </div>
    </section>
@endsection