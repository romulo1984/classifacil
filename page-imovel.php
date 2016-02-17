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

            <div class="container-anuncio">
                <h1>Apartamento 3qts</h1>

                <div class="galeria-anuncio">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="preco">
                                <div class="inner-preco">
                                    <span class="small">R$</span> 320.000
                                </div>
                            </div>
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

                <div class="informacoes-anuncio">
                    <div class="row">
                        <div class="col-md-12">

                            <?php include('partials/_share-and-actions.php'); ?>

                            <div class="panel panel-default">

                                <div class="panel-body">
                                    <h3>Descrição</h3>
                                    <hr>
                                    <p>
                                        Apartamentos de 3 Quartos, com 108m²;
                                    </p>
                                    <p>
                                        Coberturas de 3 quartos com 121m² até 153m². CONDOMÍNIO COMPLETO, QUE COMBINA LAZER, SEGURANÇA, QUALIDADE DE VIDA E EXCLUSIVIDADE.
                                    </p>
                                    <p>
                                        ALÉM DISSO, TODAS AS UNIDADES SERÃO ENTREGUES COM PORCELANATO E PREVISÃO PARA SPLIT E AS COBERTURAS TAMBÉM COM CHURRASQUEIRA E PREVISÃO PARA PISCINA. Um empreendimento diferenciado começa por uma localização única. A combinação perfeita entre conforto e elegância chega na melhor localização da Freguesia.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h3>Detalhes do imóvel</h3>
                                            <hr>
                                        </div>
                                        <div class="col-md-6">
                                            <p><strong>Valor:</strong> R$ 320.000,00</p>
                                            <p><strong>Seção:</strong> Venda</p>
                                            <p><strong>Região:</strong> Vitória</p>
                                            <p><strong>Quartos:</strong> 3</p>
                                            <p><strong>Tipo de Imóvel:</strong> Apartamento</p>
                                            <p><strong>Suítes:</strong> 2</p>
                                            <p><strong>Origem do anúncio:</strong> Imobiliária</p>
                                            <p><strong>Iddade do Imóvel:</strong> Lançamento</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p><strong>Apartamentos por andar:</strong> 4</p>
                                            <p><strong>Banheiros:</strong> 3</p>
                                            <p><strong>Elevadores:</strong> 3</p>
                                            <p><strong>Salas:</strong> 1</p>
                                            <p><strong>Closets:</strong> 1</p>
                                            <p><strong>Vagas de Garagem:</strong> 2</p>
                                            <p><strong>àrea do imóvel (m²):</strong> 112</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <h3>Detalhes do condomínio</h3>
                                    <hr>
                                    <p></p><strong>Área de serviço</strong></p>
                                    <p></p><strong>Garagem coberta</strong></p>
                                    <p></p><strong>Garagem Independente</strong></p>
                                    <p></p><strong>Varanda</strong></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <h3>Características de segurança</h3>
                                    <hr>
                                    <p></p><strong>Cerca Elétrica</strong></p>
                                    <p></p><strong>Circuito Interno de TV</strong></p>
                                    <p></p><strong>Guarita</strong></p>
                                    <p></p><strong>Porteiro 24 horas</strong></p>
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

        <div class="col-md-12">

            <h2 class="text-300">Ofestas em destaque</h2>

            <div class="destaques-pagina-anuncio">

                <div class="row">

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 context-imoveis">
                        <h2 class="padding-2x text-verde-imoveis">
                            <span class="fa fa-fw fa-home"></span>
                            imóveis
                        </h2>
                        <div class="item-destaque" data-effect="mfp-zoom-in">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="preco">
                                        <div class="inner-preco">
                                            <span class="small">R$</span> 320.000
                                        </div>
                                    </div>
                                    <a
                                        href="page-imovel.php"
                                        class="imagem-anuncio-destaque"
                                        style="background-image: url('assets/img/exemplos/imoveis/imovel1.jpg');"
                                    >
                                    </a>
                                </div>
                                <div class="col-md-12">
                                    <div class="info-card-destaque">
                                        <h3 class="truncate">
                                            <a href="page-imovel.php">
                                                Apartamento 3qts
                                            </a>
                                        </h3>
                                        <div class="truncate">Todo mobiliado, sol da manhã e baixo condomínio</div>
                                        <div class="divisor"></div>
                                        <div class="info-bloco truncate">
                                            <strong>2</strong> Quartos,
                                            <strong>1</strong> Suíte,
                                            <strong>1</strong> Vaga de Garagem
                                        </div>
                                        <div class="divisor"></div>
                                        <div class="indique-compare-box">
                                            <div class="pull-left">
                                                <a href="#" class="btn btn-xs" data-toggle="modal" data-target="#modal-indique">
                                                    <span class="fa fa-fw fa-user"></span>
                                                    indique
                                                </a>
                                            </div>
                                            <div class="pull-right">
                                                <div class="checkbox no-margin">
                                                    <input id="imoveis1" class="styled" type="checkbox">
                                                    <label for="imoveis1">compare</label>
                                                </div>
                                            </div>
                                            <div class="cleafix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 context-veiculos">
                        <h2 class="padding-2x text-roxo-veiculos">
                            <span class="fa fa-fw fa-car"></span>
                            veículos
                        </h2>
                        <div class="item-destaque">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="preco">
                                        <div class="inner-preco">
                                            <span class="small">R$</span> 86.350
                                        </div>
                                    </div>
                                    <div id="anuncio-001">
                                        <a
                                            href="page-imovel.php"
                                            class="imagem-anuncio-destaque"
                                            style="background-image: url('assets/img/exemplos/veiculos/carro1.jpg');">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="info-card-destaque">
                                        <h3 class="truncate">
                                            <a href="page-imovel.php">
                                                Corolla 2013
                                            </a>
                                        </h3>
                                        <div class="truncate">Com airbag duplo, câmbio automático, freio a disco, etc</div>
                                        <div class="divisor"></div>
                                        <div class="info-bloco truncate">
                                            <strong>16 mil</strong> km,
                                            cor: <strong>prata</strong>,
                                            ano/modelo: <strong>2013/2014</strong>
                                        </div>
                                        <div class="divisor"></div>
                                        <div class="indique-compare-box">
                                            <div class="pull-left">
                                                <a href="#" class="btn btn-xs" data-toggle="modal" data-target="#modal-indique">
                                                    <span class="fa fa-fw fa-user"></span>
                                                    indique
                                                </a>
                                            </div>
                                            <div class="pull-right">
                                                <div class="checkbox no-margin">
                                                    <input id="veiculo1" class="styled" type="checkbox">
                                                    <label for="veiculo1">compare</label>
                                                </div>
                                            </div>
                                            <div class="cleafix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 context-diversos">
                        <h2 class="padding-2x text-laranja-diversos">
                            <span class="fa fa-fw fa-asterisk"></span>
                            diversos
                        </h2>
                        <div class="item-destaque">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="preco">
                                        <div class="inner-preco">
                                            <span class="small">R$</span> 920
                                        </div>
                                    </div>
                                    <a href="page-imovel.php" class="imagem-anuncio-destaque" style="background-image: url('assets/img/exemplos/diversos/diversos1.jpg');">
                                    </a>
                                </div>
                                <div class="col-md-12">
                                    <div class="info-card-destaque">
                                        <h3 class="truncate">
                                            <a href="page-imovel.php">
                                                Geladeira Duplex
                                            </a>
                                        </h3>
                                        <div class="truncate">Geladeira semi-nova, com apenas 5 meses de uso</div>
                                        <div class="divisor"></div>
                                        <div class="info-bloco truncate">
                                            novo? <strong>não</strong>,
                                            voltagem: <strong>110v</strong>
                                        </div>
                                        <div class="divisor"></div>
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#" class="btn" data-toggle="modal" data-target="#modal-indique">
                                                    <span class="fa fa-fw fa-user"></span>
                                                    indique
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>
</div>

<?php include('_footer.php'); ?>
<?php include('partials/_modal-indique.php'); ?>
<?php include('partials/_modal-denuncie.php'); ?>