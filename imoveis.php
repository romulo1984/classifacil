<?php
//Inclui css no head
$css = ['assets/css/pagination.css'];
//Inclui javascript no final da página
$js = ['assets/js/imoveis.js'];
//Item do menu ativo
$menu['imoveis'] =  true;

include('_header.php');
?>

<div class="container context-imoveis">
    <div class="row padding-2x">
        <div class="col-sm-3 titulo-categoria">
            <h1>Imóveis</h1>
        </div>
        <div class="col-sm-9">

            <?php include('_search_bar.php'); ?>

        </div>
    </div>
</div>

<div class="container context-imoveis">

    <div class="row">
        <!-- SIDEBAR ESQUERDA -->
        <div class="col-md-3">
            <div class="sidebar-filtro sidebar-affix">

                <h4>Aprimore a sua <strong>busca</strong></h4>

                <div class="tags-selecionados-busca">
                     <span class="label label-verde-imoveis">
                        <span class="fa fa-fw fa-close"></span>
                        Comprar
                    </span>
                    <span class="label label-verde-imoveis">
                        <span class="fa fa-fw fa-close"></span>
                        Vitória-ES
                    </span>
                    <span class="label label-verde-imoveis">
                        <span class="fa fa-fw fa-close"></span>
                        Lojas
                    </span>
                    <span class="label label-verde-imoveis">
                        <span class="fa fa-fw fa-close"></span>
                        Salas
                    </span>
                    <span class="label label-verde-imoveis">
                        <span class="fa fa-fw fa-close"></span>
                        Até R$ 500
                    </span>
                    <div class="divisor-1x"></div>
                    <a href="#" class="small">
                        <span class="fa fa-fw fa-close"></span>
                        limpar todos os filtros
                    </a>
                </div>

                <div class="panel-group accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" href="#pretensao">
                                    Pretensão
                                    <i class="indicator fa fa-fw fa-minus pull-right"></i>
                                </a
                            </h4>
                        </div>
                        <div id="pretensao" class="panel-collapse collapse in">
                            <div class="panel-body list-group">
                                <a href="#" class="list-group-item">Comprar <strong>(1365)</strong></a>
                                <a href="#" class="list-group-item">Alugar <strong>(2365)</strong></a>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" href="#tipo">
                                    Tipo
                                    <i class="indicator fa fa-fw fa-minus pull-right"></i>
                                </a
                            </h4>
                        </div>
                        <div id="tipo" class="panel-collapse collapse in">
                            <div class="panel-body list-group">
                                <a href="#" class="list-group-item">Terrenos <strong>(522)</strong></a>
                                <a href="#" class="list-group-item">Casas <strong>(895)</strong></a>
                                <a href="#" class="list-group-item">Apartamentos <strong>(1254)</strong></a>
                                <a href="#" class="list-group-item">Lojas <strong>(245)</strong></a>
                                <a href="#" class="list-group-item">Salas <strong>(122)</strong></a>
                                <a href="#" class="list-group-item">Imóveis na planta <strong>(365)</strong></a>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" href="#estado">
                                    Estado
                                    <i class="indicator fa fa-fw fa-plus pull-right"></i>
                                </a
                            </h4>
                        </div>
                        <div id="estado" class="panel-collapse collapse">
                            <div class="panel-body list-group">
                                <a href="#" class="list-group-item">Acre <strong>(452)</strong></a>
                                <a href="#" class="list-group-item">Alagoas <strong>(142)</strong></a>
                                <a href="#" class="list-group-item">Amapá <strong>(244)</strong></a>
                                <a href="#" class="list-group-item">Amazonas <strong>(274)</strong></a>
                                <a href="#" class="list-group-item">Bahia <strong>(227)</strong></a>
                                <a href="#" class="list-group-item">Ceará <strong>(345)</strong></a>
                                <a href="#" class="list-group-item">Distrito Federal <strong>(224)</strong></a>
                                <a href="#" class="list-group-item">Espírito Santo <strong>(574)</strong></a>
                                <a href="#" class="list-group-item">Goiás <strong>(351)</strong></a>
                                <a href="#" class="list-group-item">Maranhão <strong>(447)</strong></a>
                                <a href="#" class="list-group-item">Mato Grosso <strong>(674)</strong></a>
                                <a href="#" class="list-group-item">Mato Grosso do Sul <strong>(114)</strong></a>
                                <a href="#" class="list-group-item">Minas Gerais <strong>(367)</strong></a>
                                <a href="#" class="list-group-item">Pará <strong>(456)</strong></a>
                                <a href="#" class="list-group-item">Paraíba <strong>(522)</strong></a>
                                <a href="#" class="list-group-item">Paraná <strong>(544)</strong></a>
                                <a href="#" class="list-group-item">Pernambuco <strong>(741)</strong></a>
                                <a href="#" class="list-group-item">Piauí <strong>(341)</strong></a>
                                <a href="#" class="list-group-item">Rio de Janeiro <strong>(114)</strong></a>
                                <a href="#" class="list-group-item">Rio Grando do Norte <strong>(224)</strong></a>
                                <a href="#" class="list-group-item">Rio Grando do Sul <strong>(344)</strong></a>
                                <a href="#" class="list-group-item">Rondônia <strong>(125)</strong></a>
                                <a href="#" class="list-group-item">Roraima <strong>(233)</strong></a>
                                <a href="#" class="list-group-item">Santa Catarina <strong>(78)</strong></a>
                                <a href="#" class="list-group-item">São Paulo <strong>(254)</strong></a>
                                <a href="#" class="list-group-item">Sergipe <strong>(126)</strong></a>
                                <a href="#" class="list-group-item">Tocantins <strong>(744)</strong></a>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" href="#cidade">
                                    Cidade
                                    <i class="indicator fa fa-fw fa-plus pull-right"></i>
                                </a>
                            </h4>
                        </div>
                        <div id="cidade" class="panel-collapse collapse">
                            <div class="panel-body list-group">
                                <a href="#" class="list-group-item">Vitória <strong>(665)</strong></a>
                                <a href="#" class="list-group-item">Vilha Velha <strong>(3258)</strong></a>
                                <a href="#" class="list-group-item">Serra <strong>(754)</strong></a>
                                <a href="#" class="list-group-item">Cariacica <strong>(215)</strong></a>
                                <a href="#" class="list-group-item">Guarapari <strong>(58)</strong></a>
                                <a href="#" class="list-group-item">Viana <strong>(122)</strong></a>
                                <a href="#" class="list-group-item">Colatina <strong>(24)</strong></a>
                                <a href="#" class="list-group-item">Linhares <strong>(36)</strong></a>
                                <a href="#" class="list-group-item">Outras Cidades <strong>(362)</strong></a>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" href="#bairro">
                                    Bairro
                                    <i class="indicator fa fa-fw fa-plus pull-right"></i>
                                </a>
                            </h4>
                        </div>
                        <div id="bairro" class="panel-collapse collapse">
                            <div class="panel-body list-group">
                                <a href="#" class="list-group-item">Jardim da Penha <strong>(665)</strong></a>
                                <a href="#" class="list-group-item">Jardim Camburi <strong>(3258)</strong></a>
                                <a href="#" class="list-group-item">Praia do Canto <strong>(754)</strong></a>
                                <a href="#" class="list-group-item">Centro <strong>(215)</strong></a>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" href="#valor">
                                    Valor
                                    <i class="indicator fa fa-fw fa-plus pull-right"></i>
                                </a>
                            </h4>
                        </div>
                        <div id="valor" class="panel-collapse collapse">
                            <div class="panel-body list-group">
                                <a href="#" class="list-group-item">Até R$ 500 <strong>(12)</strong></a>
                                <a href="#" class="list-group-item">De R$ 500 à R$ 1.000 <strong>(695)</strong></a>
                                <a href="#" class="list-group-item">De R$ 1.000 à R$ 1.500 <strong>(754)</strong></a>
                                <a href="#" class="list-group-item">Acima de R$ 1.500 <strong>(215)</strong></a>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" href="#quartos">
                                    Quartos
                                    <i class="indicator fa fa-fw fa-plus pull-right"></i>
                                </a>
                            </h4>
                        </div>
                        <div id="quartos" class="panel-collapse collapse">
                            <div class="panel-body list-group">
                                <a href="#" class="list-group-item">1 Quarto <strong>(665)</strong></a>
                                <a href="#" class="list-group-item">2 Quartos <strong>(3258)</strong></a>
                                <a href="#" class="list-group-item">3 Quartos <strong>(754)</strong></a>
                                <a href="#" class="list-group-item">4 ou mais <strong>(215)</strong></a>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" href="#suites">
                                    Suítes
                                    <i class="indicator fa fa-fw fa-plus pull-right"></i>
                                </a>
                            </h4>
                        </div>
                        <div id="suites" class="panel-collapse collapse">
                            <div class="panel-body list-group">
                                <a href="#" class="list-group-item">1 <strong>(115)</strong></a>
                                <a href="#" class="list-group-item">2 <strong>(622)</strong></a>
                                <a href="#" class="list-group-item">3 ou mais <strong>(225)</strong></a>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" href="#imobiliarias">
                                    Imobiliárias
                                    <i class="indicator fa fa-fw fa-plus  pull-right"></i>
                                </a>
                            </h4>
                        </div>
                        <div id="imobiliarias" class="panel-collapse collapse">
                            <div class="panel-body list-group">
                                <a href="#" class="list-group-item">Argo <strong>(22)</strong></a>
                                <a href="#" class="list-group-item">RS <strong>(95)</strong></a>
                                <a href="#" class="list-group-item">Lorenge <strong>(215)</strong></a>
                                <a href="#" class="list-group-item">Cittá <strong>(321)</strong></a>
                                <a href="#" class="list-group-item">Metron <strong>(56)</strong></a>
                                <a href="#" class="list-group-item">Morar <strong>(654)</strong></a>
                                <a href="#" class="list-group-item">Galwan <strong>(322)</strong></a>
                                <a href="#" class="list-group-item">MRV <strong>(785)</strong></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- CONTEUDO CENTRAL -->
        <div class="col-md-9">
            <div class="conteudo-categoria">

                <!-- Slider Destaque -->
                <div class="row" id="slider-destaques-imoveis">
                    <div class="col-md-12">
                        <div class="item-destaque destaque-horizontal" data-effect="mfp-zoom-in">
                            <div class="row">
                                <div class="col-md-5">
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
                                <div class="col-md-7">
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
                                                <div class="checkbox no-margin">
                                                    <input id="imoveis1a" class="styled" type="checkbox">
                                                    <label for="imoveis1a">compare</label>
                                                </div>
                                            </div>
                                            <div class="cleafix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="item-destaque destaque-horizontal">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="preco">
                                        <div class="inner-preco">
                                            <span class="small">R$</span> 620.100
                                        </div>
                                    </div>
                                    <a href="page-imovel.php" class="imagem-anuncio-destaque" style="background-image: url('assets/img/exemplos/imoveis/imovel3.jpg');">
                                    </a>
                                </div>
                                <div class="col-md-7">
                                    <div class="info-card-destaque">
                                        <h3 class="truncate">
                                            <a href="page-imovel.php">
                                                Chalé da Montanha
                                            </a>
                                        </h3>
                                        <div class="truncate">Nas montanhas geladas da Pedra da Cebola</div>
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
                                                <div class="checkbox no-margin">
                                                    <input id="imoveis3a" class="styled" type="checkbox">
                                                    <label for="imoveis3a">compare</label>
                                                </div>
                                            </div>
                                            <div class="cleafix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="item-destaque destaque-horizontal" data-effect="mfp-zoom-in">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="preco">
                                        <div class="inner-preco">
                                            <span class="small">R$</span> 320.000
                                        </div>
                                    </div>
                                    <a
                                        href="page-imovel.php"
                                        class="imagem-anuncio-destaque"
                                        style="background-image: url('assets/img/exemplos/imoveis/imovel2.jpg');"
                                    >
                                    </a>
                                </div>
                                <div class="col-md-7">
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
                                                <div class="checkbox no-margin">
                                                    <input id="imoveis2a" class="styled" type="checkbox">
                                                    <label for="imoveis2a">compare</label>
                                                </div>
                                            </div>
                                            <div class="cleafix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="item-destaque destaque-horizontal">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="preco">
                                        <div class="inner-preco">
                                            <span class="small">R$</span> 620.100
                                        </div>
                                    </div>
                                    <a href="page-imovel.php" class="imagem-anuncio-destaque" style="background-image: url('assets/img/exemplos/imoveis/imovel4.jpg');">
                                    </a>
                                </div>
                                <div class="col-md-7">
                                    <div class="info-card-destaque">
                                        <h3 class="truncate">
                                            <a href="page-imovel.php">
                                                Chalé da Montanha
                                            </a>
                                        </h3>
                                        <div class="truncate">Nas montanhas geladas da Pedra da Cebola</div>
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
                                                <div class="checkbox no-margin">
                                                    <input id="imoveis4a" class="styled" type="checkbox">
                                                    <label for="imoveis4a">compare</label>
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

                <!-- Paginação e Disposição dos anúncios -->
                <div class="paginacao-w-disposicao context-imoveis">
                    <?php include('partials/_pagination.php'); ?>
                </div>

                <!-- Anúncios -->
                <div class="row">

                    <div class="item-change-block-list col-md-4 col-sm-6">
                        <div class="item-bloco" data-effect="mfp-zoom-in">
                            <div class="row">
                                <div class="col-sm-12 col-imagem">
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
                                <div class="col-sm-12 col-info">
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

                    <div class="item-change-block-list col-md-4 col-sm-6">
                        <div class="item-bloco">
                            <div class="row">
                                <div class="col-sm-12 col-imagem">
                                    <div class="preco">
                                        <div class="inner-preco">
                                            <span class="small">R$</span> 820.650
                                        </div>
                                    </div>
                                    <a href="page-imovel.php" class="imagem-anuncio-destaque" style="background-image: url('assets/img/exemplos/imoveis/imovel2.jpg');">
                                    </a>
                                </div>
                                <div class="col-sm-12 col-info">
                                    <div class="info-card-destaque">
                                        <h3 class="truncate">
                                            <a href="page-imovel.php">
                                                Casa na praia
                                            </a>
                                        </h3>
                                        <div class="truncate">Com piscina, área de lazer e campinho de futebol</div>
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
                                                <div class="checkbox no-margin">
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

                    <div class="item-change-block-list col-md-4 col-sm-6">
                        <div class="item-bloco">
                            <div class="row">
                                <div class="col-sm-12 col-imagem">
                                    <div class="preco">
                                        <div class="inner-preco">
                                            <span class="small">R$</span> 620.100
                                        </div>
                                    </div>
                                    <a href="page-imovel.php" class="imagem-anuncio-destaque" style="background-image: url('assets/img/exemplos/imoveis/imovel3.jpg');">
                                    </a>
                                </div>
                                <div class="col-sm-12 col-info">
                                    <div class="info-card-destaque">
                                        <h3 class="truncate">
                                            <a href="page-imovel.php">
                                                Chalé da Montanha
                                            </a>
                                        </h3>
                                        <div class="truncate">Nas montanhas geladas da Pedra da Cebola</div>
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
                                                <div class="checkbox no-margin">
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

                    <div class="item-change-block-list col-md-4 col-sm-6">
                        <div class="item-bloco">
                            <div class="row">
                                <div class="col-sm-12 col-imagem">
                                    <div class="preco">
                                        <div class="inner-preco">
                                            <span class="small">R$</span> 1.200
                                        </div>
                                    </div>
                                    <a href="page-imovel.php" class="imagem-anuncio-destaque" style="background-image: url('assets/img/exemplos/imoveis/imovel4.jpg');">
                                    </a>
                                </div>
                                <div class="col-sm-12 col-info">
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
                                                <div class="checkbox no-margin">
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

                    <div class="item-change-block-list col-md-4 col-sm-6">
                        <div class="item-bloco" data-effect="mfp-zoom-in">
                            <div class="row">
                                <div class="col-sm-12 col-imagem">
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
                                <div class="col-sm-12 col-info">
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
                                                <div class="checkbox no-margin">
                                                    <input id="imoveis5" class="styled" type="checkbox">
                                                    <label for="imoveis5">compare</label>
                                                </div>
                                            </div>
                                            <div class="cleafix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item-change-block-list col-md-4 col-sm-6">
                        <div class="item-bloco">
                            <div class="row">
                                <div class="col-sm-12 col-imagem">
                                    <div class="preco">
                                        <div class="inner-preco">
                                            <span class="small">R$</span> 820.650
                                        </div>
                                    </div>
                                    <a href="page-imovel.php" class="imagem-anuncio-destaque" style="background-image: url('assets/img/exemplos/imoveis/imovel2.jpg');">
                                    </a>
                                </div>
                                <div class="col-sm-12 col-info">
                                    <div class="info-card-destaque">
                                        <h3 class="truncate">
                                            <a href="page-imovel.php">
                                                Casa na praia
                                            </a>
                                        </h3>
                                        <div class="truncate">Com piscina, área de lazer e campinho de futebol</div>
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
                                                <div class="checkbox no-margin">
                                                    <input id="imoveis6" class="styled" type="checkbox">
                                                    <label for="imoveis6">compare</label>
                                                </div>
                                            </div>
                                            <div class="cleafix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item-change-block-list col-md-4 col-sm-6">
                        <div class="item-bloco">
                            <div class="row">
                                <div class="col-sm-12 col-imagem">
                                    <div class="preco">
                                        <div class="inner-preco">
                                            <span class="small">R$</span> 620.100
                                        </div>
                                    </div>
                                    <a href="page-imovel.php" class="imagem-anuncio-destaque" style="background-image: url('assets/img/exemplos/imoveis/imovel3.jpg');">
                                    </a>
                                </div>
                                <div class="col-sm-12 col-info">
                                    <div class="info-card-destaque">
                                        <h3 class="truncate">
                                            <a href="page-imovel.php">
                                                Chalé da Montanha
                                            </a>
                                        </h3>
                                        <div class="truncate">Nas montanhas geladas da Pedra da Cebola</div>
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
                                                <div class="checkbox no-margin">
                                                    <input id="imoveis7" class="styled" type="checkbox">
                                                    <label for="imoveis7">compare</label>
                                                </div>
                                            </div>
                                            <div class="cleafix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item-change-block-list col-md-4 col-sm-6">
                        <div class="item-bloco">
                            <div class="row">
                                <div class="col-sm-12 col-imagem">
                                    <div class="preco">
                                        <div class="inner-preco">
                                            <span class="small">R$</span> 1.200
                                        </div>
                                    </div>
                                    <a href="page-imovel.php" class="imagem-anuncio-destaque" style="background-image: url('assets/img/exemplos/imoveis/imovel4.jpg');">
                                    </a>
                                </div>
                                <div class="col-sm-12 col-info">
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
                                                <div class="checkbox no-margin">
                                                    <input id="imoveis8" class="styled" type="checkbox">
                                                    <label for="imoveis8">compare</label>
                                                </div>
                                            </div>
                                            <div class="cleafix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item-change-block-list col-md-4 col-sm-6">
                        <div class="item-bloco" data-effect="mfp-zoom-in">
                            <div class="row">
                                <div class="col-sm-12 col-imagem">
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
                                <div class="col-sm-12 col-info">
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
                                                <div class="checkbox no-margin">
                                                    <input id="imoveis9" class="styled" type="checkbox">
                                                    <label for="imoveis9">compare</label>
                                                </div>
                                            </div>
                                            <div class="cleafix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 hidden-sm">
                        <img src="http://placehold.it/850x120" class="img-responsive">
                    </div>

                    <div class="item-change-block-list col-md-4 col-sm-6">
                        <div class="item-bloco">
                            <div class="row">
                                <div class="col-sm-12 col-imagem">
                                    <div class="preco">
                                        <div class="inner-preco">
                                            <span class="small">R$</span> 820.650
                                        </div>
                                    </div>
                                    <a href="page-imovel.php" class="imagem-anuncio-destaque" style="background-image: url('assets/img/exemplos/imoveis/imovel2.jpg');">
                                    </a>
                                </div>
                                <div class="col-sm-12 col-info">
                                    <div class="info-card-destaque">
                                        <h3 class="truncate">
                                            <a href="page-imovel.php">
                                                Casa na praia
                                            </a>
                                        </h3>
                                        <div class="truncate">Com piscina, área de lazer e campinho de futebol</div>
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
                                                <div class="checkbox no-margin">
                                                    <input id="imoveis10" class="styled" type="checkbox">
                                                    <label for="imoveis10">compare</label>
                                                </div>
                                            </div>
                                            <div class="cleafix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item-change-block-list col-md-4 col-sm-6">
                        <div class="item-bloco">
                            <div class="row">
                                <div class="col-sm-12 col-imagem">
                                    <div class="preco">
                                        <div class="inner-preco">
                                            <span class="small">R$</span> 620.100
                                        </div>
                                    </div>
                                    <a href="page-imovel.php" class="imagem-anuncio-destaque" style="background-image: url('assets/img/exemplos/imoveis/imovel3.jpg');">
                                    </a>
                                </div>
                                <div class="col-sm-12 col-info">
                                    <div class="info-card-destaque">
                                        <h3 class="truncate">
                                            <a href="page-imovel.php">
                                                Chalé da Montanha
                                            </a>
                                        </h3>
                                        <div class="truncate">Nas montanhas geladas da Pedra da Cebola</div>
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
                                                <div class="checkbox no-margin">
                                                    <input id="imoveis11" class="styled" type="checkbox">
                                                    <label for="imoveis11">compare</label>
                                                </div>
                                            </div>
                                            <div class="cleafix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item-change-block-list col-md-4 col-sm-6">
                        <div class="item-bloco">
                            <div class="row">
                                <div class="col-sm-12 col-imagem">
                                    <div class="preco">
                                        <div class="inner-preco">
                                            <span class="small">R$</span> 1.200
                                        </div>
                                    </div>
                                    <a href="page-imovel.php" class="imagem-anuncio-destaque" style="background-image: url('assets/img/exemplos/imoveis/imovel4.jpg');">
                                    </a>
                                </div>
                                <div class="col-sm-12 col-info">
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
                                                <div class="checkbox no-margin">
                                                    <input id="imoveis12" class="styled" type="checkbox">
                                                    <label for="imoveis12">compare</label>
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

                <!-- Paginação e Disposição dos anúncios -->
                <div class="paginacao-w-disposicao context-imoveis">
                    <?php include('partials/_pagination.php'); ?>
                </div>

            </div>
        </div>

    </div>


</div>

<?php include('_footer.php'); ?>
<?php include('partials/_modal-indique.php'); ?>