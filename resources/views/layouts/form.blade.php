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