<?php
//Inclui css no head
$css = ['assets/css/pagination.css'];
//Inclui javascript no final da página
$js = [];

include('_header.php');
?>

<div class="container">
    <div class="row padding-2x">
        <div class="col-sm-4 titulo-categoria text-roxo-busca">
            <h3 style="font-size:2.7em;">Resultados da busca</h3>
        </div>
        <div class="col-sm-8">

            <?php include('_search_bar.php'); ?>

        </div>
    </div>
</div>

<div class="container">
    <div class="row padding-2x">
        <div class="col-md-12">

            <ul class="nav nav-tabs">
                <li class="active">
                    <a data-toggle="tab" href="#resultados-imoveis" class="text-verde-imoveis">
                        <h3>Imóveis <span class="small">(8)</span></h3>
                    </a>
                </li>
                <li>
                    <a data-toggle="tab" href="#resultados-veiculos" class="text-roxo-veiculos">
                        <h3>Veículos <span class="small">(21)</span></h3>
                    </a>
                </li>
                <li>
                    <a data-toggle="tab" href="#resultados-diversos" class="text-laranja-diversos">
                        <h3>Diversos <span class="small">(19)</span></h3>
                    </a>
                </li>
            </ul>

            <div class="tab-content" style="margin-top:30px;">
                <!-- Resultados de busca de Imóveis -->
                <div id="resultados-imoveis" class="row context-imoveis tab-pane fade in active">
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
                                            <a class="accordion-toggle" data-toggle="collapse" href="#lazer">
                                                Lazer
                                                <i class="indicator fa fa-fw fa-plus pull-right"></i>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="lazer" class="panel-collapse collapse">
                                        <div class="panel-body list-group">
                                            <a href="#" class="list-group-item">Quadra de Esportes <strong>(115)</strong></a>
                                            <a href="#" class="list-group-item">Piscina <strong>(622)</strong></a>
                                            <a href="#" class="list-group-item">Playground <strong>(225)</strong></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" href="#seguranca">
                                                Segurança
                                                <i class="indicator fa fa-fw fa-plus pull-right"></i>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="seguranca" class="panel-collapse collapse">
                                        <div class="panel-body list-group">
                                            <a href="#" class="list-group-item">Porteiro 24h <strong>(362)</strong></a>
                                            <a href="#" class="list-group-item">Cerca Elétrica <strong>(85)</strong></a>
                                            <a href="#" class="list-group-item">Câmeras <strong>(116)</strong></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" href="#construtoras">
                                                Construtoras
                                                <i class="indicator fa fa-fw fa-plus  pull-right"></i>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="construtoras" class="panel-collapse collapse">
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

                <!-- Resultados de busca de Diversos -->
                <div id="resultados-veiculos" class="row context-veiculos tab-pane fade">
                    <!-- SIDEBAR ESQUERDA -->
                    <div class="col-md-3">
                        <div class="sidebar-filtro sidebar-affix">

                            <h4>Aprimore a sua <strong>busca</strong></h4>

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
                                            <a href="#" class="list-group-item">Comprar <strong>(2254)</strong></a>
                                            <a href="#" class="list-group-item">Alugar <strong>(265)</strong></a>
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
                                            <a href="#" class="list-group-item">Carro <strong>(522)</strong></a>
                                            <a href="#" class="list-group-item">Caminhão <strong>(895)</strong></a>
                                            <a href="#" class="list-group-item">ônibus <strong>(1254)</strong></a>
                                            <a href="#" class="list-group-item">Moto <strong>(245)</strong></a>
                                            <a href="#" class="list-group-item">Agrícola <strong>(365)</strong></a>
                                            <a href="#" class="list-group-item">Embarcações <strong>(365)</strong></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" href="#marca">
                                                Marca
                                                <i class="indicator fa fa-fw fa-plus  pull-right"></i>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="marca" class="panel-collapse collapse">
                                        <div class="panel-body list-group">
                                            <a href="#" class="list-group-item">Ford <strong>(22)</strong></a>
                                            <a href="#" class="list-group-item">Mercedes <strong>(95)</strong></a>
                                            <a href="#" class="list-group-item">BMW <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">Volvo <strong>(321)</strong></a>
                                            <a href="#" class="list-group-item">Fiat <strong>(56)</strong></a>
                                            <a href="#" class="list-group-item">Volkswagen <strong>(654)</strong></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" href="#estado-veiculo">
                                                Estado do Veículo
                                                <i class="indicator fa fa-fw fa-plus pull-right"></i>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="estado-veiculo" class="panel-collapse collapse">
                                        <div class="panel-body list-group">
                                            <a href="#" class="list-group-item">Novo <strong>(665)</strong></a>
                                            <a href="#" class="list-group-item">Seminovo <strong>(3258)</strong></a>
                                            <a href="#" class="list-group-item">Usado <strong>(754)</strong></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" href="#ano">
                                                Ano
                                                <i class="indicator fa fa-fw fa-plus pull-right"></i>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="ano" class="panel-collapse collapse">
                                        <div class="panel-body list-group">
                                            <a href="#" class="list-group-item">2016 <strong>(665)</strong></a>
                                            <a href="#" class="list-group-item">2015 <strong>(3258)</strong></a>
                                            <a href="#" class="list-group-item">2014 <strong>(754)</strong></a>
                                            <a href="#" class="list-group-item">2013 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">2012 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">2011 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">2010 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">2009 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">2008 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">2007 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">2006 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">2005 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">2004 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">2003 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">2002 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">2001 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">2000 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">1999 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">1998 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">1997 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">1996 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">1995 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">1994 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">1993 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">1992 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">1991 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">1990 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">1989 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">1987 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">1986 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">1985 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">1984 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">1983 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">1982 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">1981 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">1980 <strong>(215)</strong></a>
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
                                            <a href="#" class="list-group-item">Até R$ 1.000 <strong>(665)</strong></a>
                                            <a href="#" class="list-group-item">De R$ 1.000 à R$ 3.000 <strong>(3258)</strong></a>
                                            <a href="#" class="list-group-item">De R$ 3.000 à R$ 5.000 <strong>(754)</strong></a>
                                            <a href="#" class="list-group-item">De R$ 5.000 à R$ 10.000 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">De R$ 10.000 à R$ 20.000 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">De R$ 20.000 à R$ 30.000 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">De R$ 30.000 à R$ 40.000 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">De R$ 40.000 à R$ 50.000 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">De R$ 50.000 à R$ 60.000 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">De R$ 60.000 à R$ 70.000 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">De R$ 70.000 à R$ 80.000 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">De R$ 80.000 à R$ 90.000 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">De R$ 90.000 à R$ 100.000 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">Acima de R$ 100.000 <strong>(215)</strong></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" href="#motor">
                                                Motor
                                                <i class="indicator fa fa-fw fa-plus pull-right"></i>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="motor" class="panel-collapse collapse">
                                        <div class="panel-body list-group">
                                            <a href="#" class="list-group-item">1.0 <strong>(665)</strong></a>
                                            <a href="#" class="list-group-item">1.3 <strong>(3258)</strong></a>
                                            <a href="#" class="list-group-item">1.4 <strong>(754)</strong></a>
                                            <a href="#" class="list-group-item">1.5 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">1.6 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">1.8 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">2.0 <strong>(215)</strong></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" href="#cor">
                                                Cor
                                                <i class="indicator fa fa-fw fa-plus pull-right"></i>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="cor" class="panel-collapse collapse">
                                        <div class="panel-body list-group">
                                            <a href="#" class="list-group-item">Prata <strong>(665)</strong></a>
                                            <a href="#" class="list-group-item">Preto <strong>(3258)</strong></a>
                                            <a href="#" class="list-group-item">Branco <strong>(754)</strong></a>
                                            <a href="#" class="list-group-item">Vermelho <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">Azul <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">Amarelo <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">Rosa <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">Roxo <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">Cinza <strong>(215)</strong></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" href="#vendedor">
                                                Vendedor
                                                <i class="indicator fa fa-fw fa-plus pull-right"></i>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="vendedor" class="panel-collapse collapse">
                                        <div class="panel-body list-group">
                                            <a href="#" class="list-group-item">Particular <strong>(665)</strong></a>
                                            <a href="#" class="list-group-item">Concessionária <strong>(3258)</strong></a>
                                            <a href="#" class="list-group-item">Revenda <strong>(754)</strong></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- CONTEUDO CENTRAL -->
                    <div class="col-md-9">
                        <div class="conteudo-categoria">

                            <!-- Paginação e Disposição dos anúncios -->
                            <div class="paginacao-w-disposicao">
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
                                                    href="page-veiculo.php"
                                                    class="imagem-anuncio-destaque"
                                                    style="background-image: url('assets/img/exemplos/veiculos/carro1.jpg');">
                                                </a>
                                            </div>
                                            <div class="col-sm-12 col-info">
                                                <div class="info-card-destaque">
                                                    <h3 class="truncate">
                                                        <a href="page-veiculo.php">
                                                            Apartamento 3qts
                                                        </a>
                                                    </h3>
                                                    <div class="truncate">Todo mobiliado, sol da manhã e baixo condomínio</div>
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
                                                <a href="page-veiculo.php" class="imagem-anuncio-destaque" style="background-image: url('assets/img/exemplos/veiculos/carro2.jpg');">
                                                </a>
                                            </div>
                                            <div class="col-sm-12 col-info">
                                                <div class="info-card-destaque">
                                                    <h3 class="truncate">
                                                        <a href="page-veiculo.php">
                                                            Casa na praia
                                                        </a>
                                                    </h3>
                                                    <div class="truncate">Com piscina, área de lazer e campinho de futebol</div>
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
                                                <a href="page-veiculo.php" class="imagem-anuncio-destaque" style="background-image: url('assets/img/exemplos/veiculos/carro3.jpg');">
                                                </a>
                                            </div>
                                            <div class="col-sm-12 col-info">
                                                <div class="info-card-destaque">
                                                    <h3 class="truncate">
                                                        <a href="page-veiculo.php">
                                                            Chalé da Montanha
                                                        </a>
                                                    </h3>
                                                    <div class="truncate">Nas montanhas geladas da Pedra da Cebola</div>
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
                                                <a href="page-veiculo.php" class="imagem-anuncio-destaque" style="background-image: url('assets/img/exemplos/veiculos/carro4.jpg');">
                                                </a>
                                            </div>
                                            <div class="col-sm-12 col-info">
                                                <div class="info-card-destaque">
                                                    <h3 class="truncate">
                                                        <a href="page-veiculo.php">
                                                            Apt 3qts aluguel
                                                        </a>
                                                    </h3>
                                                    <div class="truncate">Próximo a praça do Carone</div>
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
                                                    href="page-veiculo.php"
                                                    class="imagem-anuncio-destaque"
                                                    style="background-image: url('assets/img/exemplos/veiculos/carro1.jpg');"
                                                >
                                                </a>
                                            </div>
                                            <div class="col-sm-12 col-info">
                                                <div class="info-card-destaque">
                                                    <h3 class="truncate">
                                                        <a href="page-veiculo.php">
                                                            Apartamento 3qts
                                                        </a>
                                                    </h3>
                                                    <div class="truncate">Todo mobiliado, sol da manhã e baixo condomínio</div>
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
                                                <a href="page-veiculo.php" class="imagem-anuncio-destaque" style="background-image: url('assets/img/exemplos/veiculos/carro2.jpg');">
                                                </a>
                                            </div>
                                            <div class="col-sm-12 col-info">
                                                <div class="info-card-destaque">
                                                    <h3 class="truncate">
                                                        <a href="page-veiculo.php">
                                                            Casa na praia
                                                        </a>
                                                    </h3>
                                                    <div class="truncate">Com piscina, área de lazer e campinho de futebol</div>
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
                                                <a href="page-veiculo.php" class="imagem-anuncio-destaque" style="background-image: url('assets/img/exemplos/veiculos/carro3.jpg');">
                                                </a>
                                            </div>
                                            <div class="col-sm-12 col-info">
                                                <div class="info-card-destaque">
                                                    <h3 class="truncate">
                                                        <a href="page-veiculo.php">
                                                            Chalé da Montanha
                                                        </a>
                                                    </h3>
                                                    <div class="truncate">Nas montanhas geladas da Pedra da Cebola</div>
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
                                                <a href="page-veiculo.php" class="imagem-anuncio-destaque" style="background-image: url('assets/img/exemplos/veiculos/carro4.jpg');">
                                                </a>
                                            </div>
                                            <div class="col-sm-12 col-info">
                                                <div class="info-card-destaque">
                                                    <h3 class="truncate">
                                                        <a href="page-veiculo.php">
                                                            Apt 3qts aluguel
                                                        </a>
                                                    </h3>
                                                    <div class="truncate">Próximo a praça do Carone</div>
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
                                                    href="page-veiculo.php"
                                                    class="imagem-anuncio-destaque"
                                                    style="background-image: url('assets/img/exemplos/veiculos/carro1.jpg');"
                                                >
                                                </a>
                                            </div>
                                            <div class="col-sm-12 col-info">
                                                <div class="info-card-destaque">
                                                    <h3 class="truncate">
                                                        <a href="page-veiculo.php">
                                                            Apartamento 3qts
                                                        </a>
                                                    </h3>
                                                    <div class="truncate">Todo mobiliado, sol da manhã e baixo condomínio</div>
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
                                                <a href="page-veiculo.php" class="imagem-anuncio-destaque" style="background-image: url('assets/img/exemplos/veiculos/carro2.jpg');">
                                                </a>
                                            </div>
                                            <div class="col-sm-12 col-info">
                                                <div class="info-card-destaque">
                                                    <h3 class="truncate">
                                                        <a href="page-veiculo.php">
                                                            Casa na praia
                                                        </a>
                                                    </h3>
                                                    <div class="truncate">Com piscina, área de lazer e campinho de futebol</div>
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
                                                <a href="page-veiculo.php" class="imagem-anuncio-destaque" style="background-image: url('assets/img/exemplos/veiculos/carro3.jpg');">
                                                </a>
                                            </div>
                                            <div class="col-sm-12 col-info">
                                                <div class="info-card-destaque">
                                                    <h3 class="truncate">
                                                        <a href="page-veiculo.php">
                                                            Chalé da Montanha
                                                        </a>
                                                    </h3>
                                                    <div class="truncate">Nas montanhas geladas da Pedra da Cebola</div>
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
                                                <a href="page-veiculo.php" class="imagem-anuncio-destaque" style="background-image: url('assets/img/exemplos/veiculos/carro4.jpg');">
                                                </a>
                                            </div>
                                            <div class="col-sm-12 col-info">
                                                <div class="info-card-destaque">
                                                    <h3 class="truncate">
                                                        <a href="page-veiculo.php">
                                                            Apt 3qts aluguel
                                                        </a>
                                                    </h3>
                                                    <div class="truncate">Próximo a praça do Carone</div>
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
                            <div class="paginacao-w-disposicao">
                                <?php include('partials/_pagination.php'); ?>
                            </div>

                        </div>
                    </div>

                </div>

                <!-- Resultados de busca de Diversos -->
                <div id="resultados-diversos" class="row context-diversos tab-pane fade">
                    <!-- SIDEBAR ESQUERDA -->
                    <div class="col-md-3">
                        <div class="sidebar-filtro sidebar-affix">

                            <h4>Aprimore a sua <strong>busca</strong></h4>

                            <div class="panel-group accordion">
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
                                            <a href="#" class="list-group-item">Emprego <strong>(522)</strong></a>
                                            <a href="#" class="list-group-item">Prestação de Serviços <strong>(895)</strong></a>
                                            <a href="#" class="list-group-item">Animais <strong>(1254)</strong></a>
                                            <a href="#" class="list-group-item">Bicicleta <strong>(245)</strong></a>
                                            <a href="#" class="list-group-item">Eletromoésticos <strong>(365)</strong></a>
                                            <a href="#" class="list-group-item">Informática <strong>(365)</strong></a>
                                            <a href="#" class="list-group-item">Celular <strong>(365)</strong></a>
                                            <a href="#" class="list-group-item">Móveis <strong>(365)</strong></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" href="#estado">
                                                Estado
                                                <i class="indicator fa fa-fw fa-plus  pull-right"></i>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="estado" class="panel-collapse collapse">
                                        <div class="panel-body list-group">
                                            <a href="#" class="list-group-item">Novo <strong>(22)</strong></a>
                                            <a href="#" class="list-group-item">Seminovo <strong>(95)</strong></a>
                                            <a href="#" class="list-group-item">Usado <strong>(215)</strong></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" href="#valor">
                                                Valor
                                                <i class="indicator fa fa-fw fa-plus  pull-right"></i>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="valor" class="panel-collapse collapse">
                                        <div class="panel-body list-group">
                                            <a href="#" class="list-group-item">Até R$ 1.99 <strong>(22)</strong></a>
                                            <a href="#" class="list-group-item">De R$ 1.99 à R$ 50 <strong>(95)</strong></a>
                                            <a href="#" class="list-group-item">De R$ 50 à R$ 100 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">De R$ 100 à R$ 300 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">De R$ 300 à R$ 500 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">De R$ 500 à R$ 1.000 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">De R$ 1.000 à R$ 2.000 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">De R$ 2.000 à R$ 5.000 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">De R$ 5.000 à R$ 10.000 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">Acima de R$ 10.000 <strong>(215)</strong></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" href="#ano">
                                                Ano
                                                <i class="indicator fa fa-fw fa-plus pull-right"></i>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="ano" class="panel-collapse collapse">
                                        <div class="panel-body list-group">
                                            <a href="#" class="list-group-item">2016 <strong>(665)</strong></a>
                                            <a href="#" class="list-group-item">2015 <strong>(3258)</strong></a>
                                            <a href="#" class="list-group-item">2014 <strong>(754)</strong></a>
                                            <a href="#" class="list-group-item">2013 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">2012 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">2011 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">2010 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">2009 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">2008 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">2007 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">2006 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">2005 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">2004 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">2003 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">2002 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">2001 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">2000 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">1999 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">1998 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">1997 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">1996 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">1995 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">1994 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">1993 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">1992 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">1991 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">1990 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">1989 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">1987 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">1986 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">1985 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">1984 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">1983 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">1982 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">1981 <strong>(215)</strong></a>
                                            <a href="#" class="list-group-item">1980 <strong>(215)</strong></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" href="#marca">
                                                Marca
                                                <i class="indicator fa fa-fw fa-plus pull-right"></i>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="marca" class="panel-collapse collapse">
                                        <div class="panel-body list-group">
                                            <a href="#" class="list-group-item">A definir</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" href="#modelo">
                                                Modelo
                                                <i class="indicator fa fa-fw fa-plus pull-right"></i>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="modelo" class="panel-collapse collapse">
                                        <div class="panel-body list-group">
                                            <a href="#" class="list-group-item">A definir</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" href="#garantia">
                                                Garantia
                                                <i class="indicator fa fa-fw fa-plus pull-right"></i>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="garantia" class="panel-collapse collapse">
                                        <div class="panel-body list-group">
                                            <a href="#" class="list-group-item">A definir</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" href="#raca">
                                                Raça
                                                <i class="indicator fa fa-fw fa-plus pull-right"></i>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="raca" class="panel-collapse collapse">
                                        <div class="panel-body list-group">
                                            <a href="#" class="list-group-item">A definir</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- CONTEUDO CENTRAL -->
                    <div class="col-md-9">
                        <div class="conteudo-categoria">

                            <!-- Paginação e Disposição dos anúncios -->
                            <div class="paginacao-w-disposicao">
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
                                                <a href="page-diverso.php" class="imagem-anuncio-destaque" style="background-image: url('assets/img/exemplos/diversos/diversos3.jpg');">
                                                </a>
                                            </div>
                                            <div class="col-sm-12 col-info">
                                                <div class="info-card-destaque">
                                                    <h3 class="truncate">
                                                        <a href="page-diverso.php">
                                                            Apartamento 3qts
                                                        </a>
                                                    </h3>
                                                    <div class="truncate">Todo mobiliado, sol da manhã e baixo condomínio</div>
                                                    <div class="divisor"></div>
                                                    <div class="info-bloco truncate">
                                                        novo? <strong>sim</strong>,
                                                        cor: <strong>marrom e branco</strong>
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
                                                <a href="page-diverso.php" class="imagem-anuncio-destaque" style="background-image: url('assets/img/exemplos/diversos/diversos2.jpg');">
                                                </a>
                                            </div>
                                            <div class="col-sm-12 col-info">
                                                <div class="info-card-destaque">
                                                    <h3 class="truncate">
                                                        <a href="page-diverso.php">
                                                            Casa na praia
                                                        </a>
                                                    </h3>
                                                    <div class="truncate">Com piscina, área de lazer e campinho de futebol</div>
                                                    <div class="divisor"></div>
                                                    <div class="info-bloco truncate">
                                                        novo? <strong>sim</strong>,
                                                        cor: <strong>marrom e branco</strong>
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
                                                <a href="page-diverso.php" class="imagem-anuncio-destaque" style="background-image: url('assets/img/exemplos/diversos/diversos3.jpg');">
                                                </a>
                                            </div>
                                            <div class="col-sm-12 col-info">
                                                <div class="info-card-destaque">
                                                    <h3 class="truncate">
                                                        <a href="page-diverso.php">
                                                            Chalé da Montanha
                                                        </a>
                                                    </h3>
                                                    <div class="truncate">Nas montanhas geladas da Pedra da Cebola</div>
                                                    <div class="divisor"></div>
                                                    <div class="info-bloco truncate">
                                                        novo? <strong>sim</strong>,
                                                        cor: <strong>marrom e branco</strong>
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
                                                <a href="page-diverso.php" class="imagem-anuncio-destaque" style="background-image: url('assets/img/exemplos/diversos/diversos4.jpg');">
                                                </a>
                                            </div>
                                            <div class="col-sm-12 col-info">
                                                <div class="info-card-destaque">
                                                    <h3 class="truncate">
                                                        <a href="page-diverso.php">
                                                            Apt 3qts aluguel
                                                        </a>
                                                    </h3>
                                                    <div class="truncate">Próximo a praça do Carone</div>
                                                    <div class="divisor"></div>
                                                    <div class="info-bloco truncate">
                                                        novo? <strong>sim</strong>,
                                                        cor: <strong>marrom e branco</strong>
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
                                                    href="page-diverso.php"
                                                    class="imagem-anuncio-destaque"
                                                    style="background-image: url('assets/img/exemplos/diversos/diversos1.jpg');"
                                                >
                                                </a>
                                            </div>
                                            <div class="col-sm-12 col-info">
                                                <div class="info-card-destaque">
                                                    <h3 class="truncate">
                                                        <a href="page-diverso.php">
                                                            Apartamento 3qts
                                                        </a>
                                                    </h3>
                                                    <div class="truncate">Todo mobiliado, sol da manhã e baixo condomínio</div>
                                                    <div class="divisor"></div>
                                                    <div class="info-bloco truncate">
                                                        novo? <strong>sim</strong>,
                                                        cor: <strong>marrom e branco</strong>
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
                                                <a href="page-diverso.php" class="imagem-anuncio-destaque" style="background-image: url('assets/img/exemplos/diversos/diversos2.jpg');">
                                                </a>
                                            </div>
                                            <div class="col-sm-12 col-info">
                                                <div class="info-card-destaque">
                                                    <h3 class="truncate">
                                                        <a href="page-diverso.php">
                                                            Casa na praia
                                                        </a>
                                                    </h3>
                                                    <div class="truncate">Com piscina, área de lazer e campinho de futebol</div>
                                                    <div class="divisor"></div>
                                                    <div class="info-bloco truncate">
                                                        novo? <strong>sim</strong>,
                                                        cor: <strong>marrom e branco</strong>
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
                                                <a href="page-diverso.php" class="imagem-anuncio-destaque" style="background-image: url('assets/img/exemplos/diversos/diversos3.jpg');">
                                                </a>
                                            </div>
                                            <div class="col-sm-12 col-info">
                                                <div class="info-card-destaque">
                                                    <h3 class="truncate">
                                                        <a href="page-diverso.php">
                                                            Chalé da Montanha
                                                        </a>
                                                    </h3>
                                                    <div class="truncate">Nas montanhas geladas da Pedra da Cebola</div>
                                                    <div class="divisor"></div>
                                                    <div class="info-bloco truncate">
                                                        novo? <strong>sim</strong>,
                                                        cor: <strong>marrom e branco</strong>
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
                                                <a href="page-diverso.php" class="imagem-anuncio-destaque" style="background-image: url('assets/img/exemplos/diversos/diversos4.jpg');">
                                                </a>
                                            </div>
                                            <div class="col-sm-12 col-info">
                                                <div class="info-card-destaque">
                                                    <h3 class="truncate">
                                                        <a href="page-diverso.php">
                                                            Apt 3qts aluguel
                                                        </a>
                                                    </h3>
                                                    <div class="truncate">Próximo a praça do Carone</div>
                                                    <div class="divisor"></div>
                                                    <div class="info-bloco truncate">
                                                        novo? <strong>sim</strong>,
                                                        cor: <strong>marrom e branco</strong>
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
                                                    href="page-diverso.php"
                                                    class="imagem-anuncio-destaque"
                                                    style="background-image: url('assets/img/exemplos/diversos/diversos1.jpg');"
                                                >
                                                </a>
                                            </div>
                                            <div class="col-sm-12 col-info">
                                                <div class="info-card-destaque">
                                                    <h3 class="truncate">
                                                        <a href="page-diverso.php">
                                                            Apartamento 3qts
                                                        </a>
                                                    </h3>
                                                    <div class="truncate">Todo mobiliado, sol da manhã e baixo condomínio</div>
                                                    <div class="divisor"></div>
                                                    <div class="info-bloco truncate">
                                                        novo? <strong>sim</strong>,
                                                        cor: <strong>marrom e branco</strong>
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
                                                <a href="page-diverso.php" class="imagem-anuncio-destaque" style="background-image: url('assets/img/exemplos/diversos/diversos2.jpg');">
                                                </a>
                                            </div>
                                            <div class="col-sm-12 col-info">
                                                <div class="info-card-destaque">
                                                    <h3 class="truncate">
                                                        <a href="page-diverso.php">
                                                            Casa na praia
                                                        </a>
                                                    </h3>
                                                    <div class="truncate">Com piscina, área de lazer e campinho de futebol</div>
                                                    <div class="divisor"></div>
                                                    <div class="info-bloco truncate">
                                                        novo? <strong>sim</strong>,
                                                        cor: <strong>marrom e branco</strong>
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
                                                <a href="page-diverso.php" class="imagem-anuncio-destaque" style="background-image: url('assets/img/exemplos/diversos/diversos3.jpg');">
                                                </a>
                                            </div>
                                            <div class="col-sm-12 col-info">
                                                <div class="info-card-destaque">
                                                    <h3 class="truncate">
                                                        <a href="page-diverso.php">
                                                            Chalé da Montanha
                                                        </a>
                                                    </h3>
                                                    <div class="truncate">Nas montanhas geladas da Pedra da Cebola</div>
                                                    <div class="divisor"></div>
                                                    <div class="info-bloco truncate">
                                                        novo? <strong>sim</strong>,
                                                        cor: <strong>marrom e branco</strong>
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
                                                <a href="page-diverso.php" class="imagem-anuncio-destaque" style="background-image: url('assets/img/exemplos/diversos/diversos4.jpg');">
                                                </a>
                                            </div>
                                            <div class="col-sm-12 col-info">
                                                <div class="info-card-destaque">
                                                    <h3 class="truncate">
                                                        <a href="page-diverso.php">
                                                            Apt 3qts aluguel
                                                        </a>
                                                    </h3>
                                                    <div class="truncate">Próximo a praça do Carone</div>
                                                    <div class="divisor"></div>
                                                    <div class="info-bloco truncate">
                                                        novo? <strong>sim</strong>,
                                                        cor: <strong>marrom e branco</strong>
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
                            <div class="paginacao-w-disposicao">
                                <?php include('partials/_pagination.php'); ?>
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