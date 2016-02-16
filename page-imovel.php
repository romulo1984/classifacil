<?php
//Inclui css no head
$css = [];
//Inclui javascript no final da página
$js = ['assets/js/page-anuncio.js'];
//Item do menu ativo
$menu['imoveis'] =  true;

include('_header.php');
?>

<div class="container">
    <div class="row padding-2x padding-bottom-3x">
        <div class="col-md-8 col-md-offset-2">

            <?php include('_search_bar.php'); ?>

        </div>
    </div>
</div>

<div class="container context-imoveis">
    <div class="row">

        <!-- Conteúdo do Anúncio -->
        <div class="col-md-8">

            <h1>Apartamento 3qts</h1>

            <div class="galeria-anuncio">
                <div class="row">
                    <div class="col-md-12">
                        <div class="slider-img-grande">
                            <a href="assets/img/exemplos/imoveis/page-imovel/imovel1.jpg" class="item-slider-galeria">
                                <img src="assets/img/exemplos/imoveis/page-imovel/imovel1.jpg" class="img-responsive" />
                            </a>
                            <a href="assets/img/exemplos/imoveis/page-imovel/imovel2.jpg" class="item-slider-galeria">
                                <img src="assets/img/exemplos/imoveis/page-imovel/imovel2.jpg" class="img-responsive" />
                            </a>
                            <a href="assets/img/exemplos/imoveis/page-imovel/imovel3.jpg" class="item-slider-galeria">
                                <img src="assets/img/exemplos/imoveis/page-imovel/imovel3.jpg" class="img-responsive" />
                            </a>
                            <a href="assets/img/exemplos/imoveis/page-imovel/imovel4.jpg" class="item-slider-galeria">
                                <img src="assets/img/exemplos/imoveis/page-imovel/imovel4.jpg" class="img-responsive" />
                            </a>
                            <a href="assets/img/exemplos/imoveis/page-imovel/imovel5.jpg" class="item-slider-galeria">
                                <img src="assets/img/exemplos/imoveis/page-imovel/imovel5.jpg" class="img-responsive" />
                            </a>
                            <a href="assets/img/exemplos/imoveis/page-imovel/imovel6.jpg" class="item-slider-galeria">
                                <img src="assets/img/exemplos/imoveis/page-imovel/imovel6.jpg" class="img-responsive" />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row slider-img-nav">
                            <div class="col-sm-3">
                                <div class="item-miniatura-galeria" style="background-image: url(assets/img/exemplos/imoveis/page-imovel/imovel1.jpg);"></div>
                            </div>
                            <div class="col-sm-3">
                                <div class="item-miniatura-galeria" style="background-image: url(assets/img/exemplos/imoveis/page-imovel/imovel2.jpg);"></div>
                            </div>
                            <div class="col-sm-3">
                                <div class="item-miniatura-galeria" style="background-image: url(assets/img/exemplos/imoveis/page-imovel/imovel3.jpg);"></div>
                            </div>
                            <div class="col-sm-3">
                                <div class="item-miniatura-galeria" style="background-image: url(assets/img/exemplos/imoveis/page-imovel/imovel4.jpg);"></div>
                            </div>
                            <div class="col-sm-3">
                                <div class="item-miniatura-galeria" style="background-image: url(assets/img/exemplos/imoveis/page-imovel/imovel5.jpg);"></div>
                            </div>
                            <div class="col-sm-3">
                                <div class="item-miniatura-galeria" style="background-image: url(assets/img/exemplos/imoveis/page-imovel/imovel6.jpg);"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <!-- Anunciante e Publicidade -->
        <div class="col-md-4">

            <!-- Anunciante -->
            <div class="info-vendedor">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Anunciante</h4>
                    </div>
                    <div class="panel-body">
                        <div class="media">
                            <div class="media-left media-middle">
                                <img src="http://lorempixel.com/60/60/people/9" class="img-circle">
                            </div>
                            <div class="media-body media-middle">
                                <h4>Marcela Silva</h4>
                                <h5>27 3333-2020</h5>
                            </div>
                        </div>
                        <div class="divisor-2x"></div>
                        <h4>Envie sua proposta</h4>
                        <form action="">
                            <div class="form-group">
                                <input type="text" class="form-control input-lg" placeholder="Nome completo">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control input-lg" placeholder="DDD + Telefone">
                            </div>
                            <textarea class="form-control input-lg" placeholder="Mensagem"></textarea>
                            <div class="divisor-1x"></div>
                            <div class="form-group">
                                <button class="btn btn-lg btn-default btn-verde-imoveis">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="sidebar-right-publicidade padding-2x">
                <img src="http://placehold.it/358x260" class="img-responsive">
                <br>
                <img src="http://placehold.it/358x260" class="img-responsive">
            </div>

        </div>

    </div>
</div>

<?php include('_footer.php'); ?>
<?php include('partials/_modal-indique.php'); ?>