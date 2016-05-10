<?php
//Inclui css no head
$css = [];
//Inclui javascript no final da página
$js = ['assets/js/page-anuncio.js'];
//Item do menu ativo
$menu['diversos'] =  true;

include('_header.php');
?>

<div class="container">
    <div class="row padding-2x padding-bottom-3x">
        <div class="col-md-8 col-md-offset-2">

            <?php include('_search_bar.php'); ?>

        </div>
    </div>
</div>

<div class="container">
    <div class="row">

        <!-- Conteúdo do Anúncio -->
        <div class="col-md-8 context-diversos">

            <div class="container-anuncio">
                <h1>Geladeira Duplex</h1>

                <div class="galeria-anuncio">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="preco">
                                <div class="inner-preco">
                                    <span class="small">R$</span> 920
                                </div>
                            </div>
                            <div class="slider-img-grande">
                                <a href="assets/img/exemplos/diversos/page-diverso/diverso1.jpg" class="item-slider-galeria">
                                    <img src="assets/img/exemplos/diversos/page-diverso/diverso1.jpg" class="img-responsive" />
                                </a>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row slider-img-nav">
                                <div class="col-sm-3">
                                    <div class="item-miniatura-galeria" style="background-image: url(assets/img/exemplos/diversos/page-diverso/diverso1.jpg);"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="informacoes-anuncio">
                    <div class="row">
                        <div class="col-md-12">

                            <?php include('partials/_share-and-actions.php'); ?>

                            <div class="panel panel-default">

                                <div class="panel-body">
                                    <h3>Descrição</h3>
                                    <hr>
                                    <p>
                                        Você merece praticidade e conforto no dia a dia. E a Brastemp, nesses quesitos, sempre está contigo. A Geladeira BRM39 de 352 litros apresenta características essenciais que facilitam o seu dia a dia na cozinha, oferecendo a melhor conservação dos alimentos e de forma saudável.
                                    </p>
                                    <p>
                                        Com design arrojado e belíssimo acabamento em Evox, um material que protege contra a corrosão da porta, ela também é frost free. O porta-latas é removível e você pode levá-lo à mesa e ao freezer. Este que conta com uma capacidade de aproveitamento incrível. São 80 litros para guardar seus congelados.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <h3>Informações Adicionais</h3>
                                    <hr>
                                    <p>
                                        E o controle de temperatura pode ser regulado para melhor atender as condições de conservação dos alimentos, conforme o grau de utilização de seu refrigerador. A temperatura é ajustada pressionando o botão de controle até a posição desejada. A fruteira é removível e funciona como uma cestinha ou peneira que você pode usar para lavar as frutas na pia, encaixar na base e levar direto para a mesa. Assim, a água que escorre da fruta não fica em contato direto com alimento.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <h3>Localização</h3>
                                </div>
                                <div class="localizacao-mapa">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1871.259195167498!2d-40.29201669200893!3d-20.278799113696735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xb81818d8018a37%3A0xcb90f4a1f772c6d!2sR.+Maria+de+Lourdes+Poyares+Labuto%2C+190+-+Mata+da+Praia%2C+Vit%C3%B3ria+-+ES%2C+29065-540!5e0!3m2!1spt-BR!2sbr!4v1455670013722" width="800" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>
                                <div class="panel-body">
                                    <span class="fa fa-fw fa-lg fa-map-marker"></span> R. Maria de Lourdes, Mata da Praia, Vitória-ES
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <?php include('partials/_share-and-actions.php'); ?>
                        </div>

                        <div class="col-md-12">
                            <?php include('partials/_ads-footer-anuncio.php'); ?>
                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- Anunciante e Publicidade -->
        <div class="col-md-4 context-diversos">

            <div class="sidebar-affix">
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
                                <div class="form-group">
                                    <input type="email" class="form-control input-lg" placeholder="Seu email">
                                </div>
                                <textarea class="form-control input-lg" placeholder="Mensagem"></textarea>
                                <div class="divisor-1x"></div>
                                <div class="form-group">
                                    <button class="btn btn-lg btn-default btn-laranja-diversos">Enviar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="sidebar-right-publicidade padding-2x">
                    <img src="http://placehold.it/358x260" class="img-responsive img-ads">
                </div>
            </div>

        </div>

        <div class="col-md-8">

            <?php include('_ofertas-destaque.php'); ?>

        </div>

    </div>
</div>

<?php include('_footer.php'); ?>
<?php include('partials/_modal-indique.php'); ?>
<?php include('partials/_modal-denuncie.php'); ?>