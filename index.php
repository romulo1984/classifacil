<?php
//Inclui css no head
$css = [];

//Inclui javascript no final da página
$js = ['assets/js/home.js'];
include('_header.php');
?>

<div class="container">
    <div class="row padding-2x">
        <div class="col-md-8 col-md-offset-2">

            <?php include('_search_bar.php'); ?>

        </div>
    </div>
</div>

<div class="container">

    <!-- Barra de categorias -->
    <div class="row">
        <div class="col-sm-3">
            <a href="imoveis.php" class="card text-center text-branco bg-verde-imoveis">
                <h1>
                    imóveis
                </h1>
            </a>
        </div>
        <div class="col-sm-3">
            <a href="veiculos.php" class="card text-center text-branco bg-roxo-veiculos">
                <h1>
                    veículos
                </h1>
            </a>
        </div>
        <div class="col-sm-3">
            <a href="diversos.php" class="card text-center text-branco bg-laranja-diversos">
                <h1>
                    diversos
                </h1>
            </a>
        </div>
        <div class="col-sm-3">
            <a href="anuncie.php" class="card text-center text-branco bg-vermelho" style="padding: 24px 10px;">
                <h4 class="text-300">
                    FAÇA O SEU
                </h4>
                <h2 class="text-500">anúncio</h2>
            </a>
        </div>

        <div class="col-sm-12">
            <div class="divisor-3x"></div>
        </div>

    </div>

    <!-- Banner Principal Home -->
    <div class="row">
        <div class="col-md-12">
            <img src="http://placehold.it/1140x120" alt="" class="img-responsive">
        </div>

        <div class="col-md-12">
            <div class="divisor-3x"></div>
        </div>

    </div>

    <!-- Destaques de Imóveis -->
    <div class="row context-imoveis">
        <div class="col-md-12 padding-bottom-2x">
            <h1>
                <span class="text-300">Ofertas em destaque </span><span class="text-verde-imoveis"><span class="fa fa-fw fa-home"></span> imóveis</span>
            </h1>
        </div>

        <div class="col-md-12">
            <div class="slider-home">

                <div class="row" id="slider-destaques-imoveis">

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="item-destaque" data-effect="mfp-zoom-in">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="preco">
                                        <div class="inner-preco bg-verde-imoveis">
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
                                                <a href="#" data-toggle="modal" data-target="#modal-indique">
                                                    <span class="fa fa-fw fa-user"></span>
                                                    indique
                                                </a>
                                            </div>
                                            <div class="pull-right">
                                                <div class="checkbox checkbox-verde-imoveis no-margin">
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

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="item-destaque">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="preco">
                                        <div class="inner-preco bg-verde-imoveis">
                                            <span class="small">R$</span> 820.650
                                        </div>
                                    </div>
                                    <a href="page-imovel.php" class="imagem-anuncio-destaque" style="background-image: url('assets/img/exemplos/imoveis/imovel2.jpg');">
                                    </a>
                                </div>
                                <div class="col-md-12">
                                    <div class="info-card-destaque">
                                        <h3 class="truncate">
                                            <a href="page-imovel.php">
                                                Casa na praia
                                            </a>
                                        </h3>
                                        <div class="truncate">Com piscina, área de lazer e campinho de futebol</div>
                                        <div class="divisor"></div>
                                        <div class="info-bloco truncate">
                                            <strong>6</strong> Quartos,
                                            <strong>3</strong> Suítes,
                                            <strong>10</strong> Vaga de Garagem
                                        </div>
                                        <div class="divisor"></div>
                                        <div class="indique-compare-box">
                                            <div class="pull-left">
                                                <a href="#" data-toggle="modal" data-target="#modal-indique">
                                                    <span class="fa fa-fw fa-user"></span>
                                                    indique
                                                </a>
                                            </div>
                                            <div class="pull-right">
                                                <div class="checkbox checkbox-verde-imoveis no-margin">
                                                    <input id="imoveis2" class="styled" type="checkbox">
                                                    <label for="imoveis2">compare</label>
                                                </div>
                                            </div>
                                            <div class="cleafix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="item-destaque">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="preco">
                                        <div class="inner-preco bg-verde-imoveis">
                                            <span class="small">R$</span> 620.100
                                        </div>
                                    </div>
                                    <a href="page-imovel.php" class="imagem-anuncio-destaque" style="background-image: url('assets/img/exemplos/imoveis/imovel3.jpg');">
                                    </a>
                                </div>
                                <div class="col-md-12">
                                    <div class="info-card-destaque">
                                        <h3 class="truncate">
                                            <a href="page-imovel.php">
                                                Chalé da Montanha
                                            </a>
                                        </h3>
                                        <div class="truncate">Nas montanhas geladas da Pedra da Cebola</div>
                                        <div class="divisor"></div>
                                        <div class="info-bloco truncate">
                                            <strong>1</strong> Quarto,
                                            <strong>1</strong> Suíte,
                                            <strong>1</strong> Vaga de Garagem
                                        </div>
                                        <div class="divisor"></div>
                                        <div class="indique-compare-box">
                                            <div class="pull-left">
                                                <a href="#" data-toggle="modal" data-target="#modal-indique">
                                                    <span class="fa fa-fw fa-user"></span>
                                                    indique
                                                </a>
                                            </div>
                                            <div class="pull-right">
                                                <div class="checkbox checkbox-verde-imoveis no-margin">
                                                    <input id="imoveis3" class="styled" type="checkbox">
                                                    <label for="imoveis3">compare</label>
                                                </div>
                                            </div>
                                            <div class="cleafix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="item-destaque">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="preco">
                                        <div class="inner-preco bg-verde-imoveis">
                                            <span class="small">R$</span> 1.200
                                        </div>
                                    </div>
                                    <a href="page-imovel.php" class="imagem-anuncio-destaque" style="background-image: url('assets/img/exemplos/imoveis/imovel4.jpg');">
                                    </a>
                                </div>
                                <div class="col-md-12">
                                    <div class="info-card-destaque">
                                        <h3 class="truncate">
                                            <a href="page-imovel.php">
                                                Apt 3qts aluguel
                                            </a>
                                        </h3>
                                        <div class="truncate">Próximo a praça do Carone</div>
                                        <div class="divisor"></div>
                                        <div class="info-bloco truncate">
                                            <strong>2</strong> Quartos,
                                            <strong>1</strong> Suíte,
                                            <strong>1</strong> Vaga de Garagem
                                        </div>
                                        <div class="divisor"></div>
                                        <div class="indique-compare-box">
                                            <div class="pull-left">
                                                <a href="#" data-toggle="modal" data-target="#modal-indique">
                                                    <span class="fa fa-fw fa-user"></span>
                                                    indique
                                                </a>
                                            </div>
                                            <div class="pull-right">
                                                <div class="checkbox checkbox-verde-imoveis no-margin">
                                                    <input id="imoveis4" class="styled" type="checkbox">
                                                    <label for="imoveis4">compare</label>
                                                </div>
                                            </div>
                                            <div class="cleafix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <div class="col-md-12">
            <div class="divisor-3x"></div>
        </div>

    </div>


    <!-- Destaques de Veículos -->
    <div class="row context-veiculos">
        <div class="col-md-12 padding-bottom-2x">
            <h1>
                <span class="text-300">Ofertas em destaque </span><span class="text-roxo-veiculos"><span class="fa fa-fw fa-car"></span> veículos</span>
            </h1>
        </div>

        <div class="col-md-12">
            <div class="slider-home">

                <div class="row" id="slider-destaques-veiculos">

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="item-destaque">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="preco">
                                        <div class="inner-preco bg-roxo-veiculos">
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
                                                <a href="#" data-toggle="modal" data-target="#modal-indique">
                                                    <span class="fa fa-fw fa-user"></span>
                                                    indique
                                                </a>
                                            </div>
                                            <div class="pull-right">
                                                <div class="checkbox checkbox-roxo-veiculos no-margin">
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

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="item-destaque">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="preco">
                                        <div class="inner-preco bg-roxo-veiculos">
                                            <span class="small">R$</span> 45.000
                                        </div>
                                    </div>
                                    <a href="page-imovel.php" class="imagem-anuncio-destaque" style="background-image: url('assets/img/exemplos/veiculos/carro2.jpg');">
                                    </a>
                                </div>
                                <div class="col-md-12">
                                    <div class="info-card-destaque">
                                        <h3 class="truncate">
                                            <a href="page-imovel.php">
                                                Fusion 2011
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
                                                <a href="#" data-toggle="modal" data-target="#modal-indique">
                                                    <span class="fa fa-fw fa-user"></span>
                                                    indique
                                                </a>
                                            </div>
                                            <div class="pull-right">
                                                <div class="checkbox checkbox-roxo-veiculos no-margin">
                                                    <input id="veiculo2" class="styled" type="checkbox">
                                                    <label for="veiculo2">compare</label>
                                                </div>
                                            </div>
                                            <div class="cleafix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="item-destaque">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="preco">
                                        <div class="inner-preco bg-roxo-veiculos">
                                            <span class="small">R$</span> 112.110
                                        </div>
                                    </div>
                                    <a href="page-imovel.php" class="imagem-anuncio-destaque" style="background-image: url('assets/img/exemplos/veiculos/carro3.jpg');">
                                    </a>
                                </div>
                                <div class="col-md-12">
                                    <div class="info-card-destaque">
                                        <h3 class="truncate">
                                            <a href="page-imovel.php">
                                                Fusca 1965
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
                                                <a href="#" data-toggle="modal" data-target="#modal-indique">
                                                    <span class="fa fa-fw fa-user"></span>
                                                    indique
                                                </a>
                                            </div>
                                            <div class="pull-right">
                                                <div class="checkbox checkbox-roxo-veiculos no-margin">
                                                    <input id="veiculo3" class="styled" type="checkbox">
                                                    <label for="veiculo3">compare</label>
                                                </div>
                                            </div>
                                            <div class="cleafix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="item-destaque">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="preco">
                                        <div class="inner-preco bg-roxo-veiculos">
                                            <span class="small">R$</span> 15.600
                                        </div>
                                    </div>
                                    <a href="page-imovel.php" class="imagem-anuncio-destaque" style="background-image: url('assets/img/exemplos/veiculos/carro4.jpg');">
                                    </a>
                                </div>
                                <div class="col-md-12">
                                    <div class="info-card-destaque">
                                        <h3 class="truncate">
                                            <a href="page-imovel.php">
                                                Pálio Hat
                                            </a>
                                        </h3>
                                        <div class="truncate">Quatro portas, vidro e trava elétrica</div>
                                        <div class="divisor"></div>
                                        <div class="info-bloco truncate">
                                            <strong>16 mil</strong> km,
                                            cor: <strong>prata</strong>,
                                            ano/modelo: <strong>2013/2014</strong>
                                        </div>
                                        <div class="divisor"></div>
                                        <div class="indique-compare-box">
                                            <div class="pull-left">
                                                <a href="#" data-toggle="modal" data-target="#modal-indique">
                                                    <span class="fa fa-fw fa-user"></span>
                                                    indique
                                                </a>
                                            </div>
                                            <div class="pull-right">
                                                <div class="checkbox checkbox-roxo-veiculos no-margin">
                                                    <input id="veiculo4" class="styled" type="checkbox">
                                                    <label for="veiculo4">compare</label>
                                                </div>
                                            </div>
                                            <div class="cleafix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <div class="col-md-12">
            <div class="divisor-3x"></div>
        </div>

    </div>


    <!-- Destaques de Diversos -->
    <div class="row context-diversos">
        <div class="col-md-12 padding-bottom-2x">
            <h1>
                <span class="text-300">Ofertas em destaque </span><span class="text-laranja-diversos"><span class="fa fa-fw fa-asterisk"></span> diversos</span>
            </h1>
        </div>

        <div class="col-md-12">
            <div class="slider-home">

                <div class="row" id="slider-destaques-diversos">

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="item-destaque">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="preco">
                                        <div class="inner-preco bg-laranja-diversos">
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
                                                <a href="#" data-toggle="modal" data-target="#modal-indique">
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

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="item-destaque">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="preco">
                                        <div class="inner-preco bg-laranja-diversos">
                                            <span class="small">R$</span> 1.200
                                        </div>
                                    </div>
                                    <a href="page-imovel.php" class="imagem-anuncio-destaque" style="background-image: url('assets/img/exemplos/diversos/diversos2.jpg');">
                                    </a>
                                </div>
                                <div class="col-md-12">
                                    <div class="info-card-destaque">
                                        <h3 class="truncate">
                                            <a href="page-imovel.php">
                                                Mesa de Escritório
                                            </a>
                                        </h3>
                                        <div class="truncate">Mesa em ótimo estado, de mógno, com detalhes em madeira prensada</div>
                                        <div class="divisor"></div>
                                        <div class="info-bloco truncate">
                                            novo? <strong>sim</strong>,
                                            cor: <strong>marrom e branco</strong>
                                        </div>
                                        <div class="divisor"></div>
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#" data-toggle="modal" data-target="#modal-indique">
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

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="item-destaque">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="preco">
                                        <div class="inner-preco bg-laranja-diversos">
                                            <span class="small">R$</span> 2.420
                                        </div>
                                    </div>
                                    <a href="page-imovel.php" class="imagem-anuncio-destaque" style="background-image: url('assets/img/exemplos/diversos/diversos3.jpg');">
                                    </a>
                                </div>
                                <div class="col-md-12">
                                    <div class="info-card-destaque">
                                        <h3 class="truncate">
                                            <a href="page-imovel.php">
                                                Bicicleta Retrô
                                            </a>
                                        </h3>
                                        <div class="truncate">Bike toda montada, no estilo calói cecci 1984</div>
                                        <div class="divisor"></div>
                                        <div class="info-bloco truncate">
                                            novo? <strong>não</strong>,
                                            cor: <strong>rosa e verde</strong>
                                        </div>
                                        <div class="divisor"></div>
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#" data-toggle="modal" data-target="#modal-indique">
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

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="item-destaque">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="preco">
                                        <div class="inner-preco bg-laranja-diversos">
                                            <span class="small">R$</span> 250
                                        </div>
                                    </div>
                                    <a href="page-imovel.php" class="imagem-anuncio-destaque" style="background-image: url('assets/img/exemplos/diversos/diversos4.jpg');">
                                    </a>
                                </div>
                                <div class="col-md-12">
                                    <div class="info-card-destaque">
                                        <h3 class="truncate">
                                            <a href="page-imovel.php">
                                                Filhote de Poodle
                                            </a>
                                        </h3>
                                        <div class="truncate">Filhote de Poodle com apenas 3 meses de nascido</div>
                                        <div class="divisor"></div>
                                        <div class="info-bloco truncate">
                                            cor: <strong>creme</strong>
                                        </div>
                                        <div class="divisor"></div>
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#" data-toggle="modal" data-target="#modal-indique">
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

        <div class="col-md-12">
            <div class="divisor-3x"></div>
        </div>

    </div>


</div>

<?php include('_footer.php'); ?>
<?php include('partials/_modal-indique.php'); ?>