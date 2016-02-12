<?php
//Inclui css no head
$css = ['assets/css/pagination.css'];
//Inclui javascript no final da página
$js = ['assets/js/veiculos.js'];
//Item do menu ativo
$menu['veiculos'] =  true;

include('_header.php');
?>

    <div class="container context-veiculos">
        <div class="row padding-2x">
            <div class="col-sm-3 titulo-categoria">
                <h1>veículos</h1>
            </div>
            <div class="col-sm-9">

                <?php include('_search_bar.php'); ?>

            </div>
        </div>
    </div>

    <div class="container context-veiculos">

        <div class="row">
            <!-- SIDEBAR ESQUERDA -->
            <div class="col-md-3">
                <div class="sidebar-filtro">

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

                    <!-- Slider Destaque -->
                    <div class="row" id="slider-destaques-veiculos">
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
                                            data-src="https://www.youtube.com/watch?v=RDWLJXu7NY8"
                                            class="imagem-anuncio-destaque"
                                            style="background-image: url('assets/img/exemplos/veiculos/carro1.jpg');">
                                        </a>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="info-card-destaque">
                                            <h3 class="truncate">
                                                <a href="#">
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
                                                    <a href="#" class="btn btn-xs" data-toggle="modal" data-target="#modal-indique">
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
                                        <a href="assets/img/exemplos/veiculos/carro3.jpg" class="imagem-anuncio-destaque" style="background-image: url('assets/img/exemplos/veiculos/carro3.jpg');">
                                        </a>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="info-card-destaque">
                                            <h3 class="truncate">
                                                <a href="#">
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
                                                    <a href="#" class="btn btn-xs" data-toggle="modal" data-target="#modal-indique">
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
                                            data-src="https://www.youtube.com/watch?v=RDWLJXu7NY8"
                                            class="imagem-anuncio-destaque"
                                            style="background-image: url('assets/img/exemplos/veiculos/carro2.jpg');">
                                        </a>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="info-card-destaque">
                                            <h3 class="truncate">
                                                <a href="#">
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
                                                    <a href="#" class="btn btn-xs" data-toggle="modal" data-target="#modal-indique">
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
                                        <a href="assets/img/exemplos/veiculos/carro4.jpg" class="imagem-anuncio-destaque" style="background-image: url('assets/img/exemplos/veiculos/carro4.jpg');">
                                        </a>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="info-card-destaque">
                                            <h3 class="truncate">
                                                <a href="#">
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
                                                    <a href="#" class="btn btn-xs" data-toggle="modal" data-target="#modal-indique">
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
                    <div class="paginacao-w-disposicao">
                        <?php include('partials/_pagination.php'); ?>
                    </div>

                    <!-- Anúncios -->
                    <div class="row">

                        <div class="col-md-4 col-sm-6">
                            <div class="item-bloco" data-effect="mfp-zoom-in">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="preco">
                                            <div class="inner-preco">
                                                <span class="small">R$</span> 320.000
                                            </div>
                                        </div>
                                        <a
                                            data-src="https://www.youtube.com/watch?v=RDWLJXu7NY8"
                                            class="imagem-anuncio-destaque"
                                            style="background-image: url('assets/img/exemplos/veiculos/carro1.jpg');">
                                        </a>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="info-card-destaque">
                                            <h3 class="truncate">
                                                <a href="#">
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

                        <div class="col-md-4 col-sm-6">
                            <div class="item-bloco">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="preco">
                                            <div class="inner-preco">
                                                <span class="small">R$</span> 820.650
                                            </div>
                                        </div>
                                        <a href="assets/img/exemplos/veiculos/carro2.jpg" class="imagem-anuncio-destaque" style="background-image: url('assets/img/exemplos/veiculos/carro2.jpg');">
                                        </a>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="info-card-destaque">
                                            <h3 class="truncate">
                                                <a href="#">
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
                                                    <a href="#" class="btn btn-xs" data-toggle="modal" data-target="#modal-indique">
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

                        <div class="col-md-4 col-sm-6">
                            <div class="item-bloco">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="preco">
                                            <div class="inner-preco">
                                                <span class="small">R$</span> 620.100
                                            </div>
                                        </div>
                                        <a href="assets/img/exemplos/veiculos/carro3.jpg" class="imagem-anuncio-destaque" style="background-image: url('assets/img/exemplos/veiculos/carro3.jpg');">
                                        </a>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="info-card-destaque">
                                            <h3 class="truncate">
                                                <a href="#">
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
                                                    <a href="#" class="btn btn-xs" data-toggle="modal" data-target="#modal-indique">
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

                        <div class="col-md-4 col-sm-6">
                            <div class="item-bloco">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="preco">
                                            <div class="inner-preco">
                                                <span class="small">R$</span> 1.200
                                            </div>
                                        </div>
                                        <a href="assets/img/exemplos/veiculos/carro4.jpg" class="imagem-anuncio-destaque" style="background-image: url('assets/img/exemplos/veiculos/carro4.jpg');">
                                        </a>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="info-card-destaque">
                                            <h3 class="truncate">
                                                <a href="#">
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
                                                    <a href="#" class="btn btn-xs" data-toggle="modal" data-target="#modal-indique">
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

                        <div class="col-md-4 col-sm-6">
                            <div class="item-bloco" data-effect="mfp-zoom-in">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="preco">
                                            <div class="inner-preco">
                                                <span class="small">R$</span> 320.000
                                            </div>
                                        </div>
                                        <a
                                            class="imagem-anuncio-destaque"
                                            data-iframe="true"
                                            data-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d935.6111039512758!2d-40.29878357076004!3d-20.281863941195898!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xb8181d578622f9%3A0xe26701711552ada4!2sR.+Comiss%C3%A1rio+Ot%C3%A1vio+Queir%C3%B3s%2C+267+-+Jardim+da+Penha%2C+Vit%C3%B3ria+-+ES%2C+29060-270!5e0!3m2!1spt-BR!2sbr!4v1454543113587"
                                            style="background-image: url('assets/img/exemplos/veiculos/carro1.jpg');"
                                        >
                                        </a>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="info-card-destaque">
                                            <h3 class="truncate">
                                                <a href="#">
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
                                                    <a href="#" class="btn btn-xs" data-toggle="modal" data-target="#modal-indique">
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

                        <div class="col-md-4 col-sm-6">
                            <div class="item-bloco">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="preco">
                                            <div class="inner-preco">
                                                <span class="small">R$</span> 820.650
                                            </div>
                                        </div>
                                        <a href="assets/img/exemplos/veiculos/carro2.jpg" class="imagem-anuncio-destaque" style="background-image: url('assets/img/exemplos/veiculos/carro2.jpg');">
                                        </a>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="info-card-destaque">
                                            <h3 class="truncate">
                                                <a href="#">
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
                                                    <a href="#" class="btn btn-xs" data-toggle="modal" data-target="#modal-indique">
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

                        <div class="col-md-4 col-sm-6">
                            <div class="item-bloco">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="preco">
                                            <div class="inner-preco">
                                                <span class="small">R$</span> 620.100
                                            </div>
                                        </div>
                                        <a href="assets/img/exemplos/veiculos/carro3.jpg" class="imagem-anuncio-destaque" style="background-image: url('assets/img/exemplos/veiculos/carro3.jpg');">
                                        </a>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="info-card-destaque">
                                            <h3 class="truncate">
                                                <a href="#">
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
                                                    <a href="#" class="btn btn-xs" data-toggle="modal" data-target="#modal-indique">
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

                        <div class="col-md-4 col-sm-6">
                            <div class="item-bloco">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="preco">
                                            <div class="inner-preco">
                                                <span class="small">R$</span> 1.200
                                            </div>
                                        </div>
                                        <a href="assets/img/exemplos/veiculos/carro4.jpg" class="imagem-anuncio-destaque" style="background-image: url('assets/img/exemplos/veiculos/carro4.jpg');">
                                        </a>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="info-card-destaque">
                                            <h3 class="truncate">
                                                <a href="#">
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
                                                    <a href="#" class="btn btn-xs" data-toggle="modal" data-target="#modal-indique">
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

                        <div class="col-md-4 col-sm-6">
                            <div class="item-bloco" data-effect="mfp-zoom-in">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="preco">
                                            <div class="inner-preco">
                                                <span class="small">R$</span> 320.000
                                            </div>
                                        </div>
                                        <a
                                            class="imagem-anuncio-destaque"
                                            data-iframe="true"
                                            data-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d935.6111039512758!2d-40.29878357076004!3d-20.281863941195898!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xb8181d578622f9%3A0xe26701711552ada4!2sR.+Comiss%C3%A1rio+Ot%C3%A1vio+Queir%C3%B3s%2C+267+-+Jardim+da+Penha%2C+Vit%C3%B3ria+-+ES%2C+29060-270!5e0!3m2!1spt-BR!2sbr!4v1454543113587"
                                            style="background-image: url('assets/img/exemplos/veiculos/carro1.jpg');"
                                        >
                                        </a>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="info-card-destaque">
                                            <h3 class="truncate">
                                                <a href="#">
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
                                                    <a href="#" class="btn btn-xs" data-toggle="modal" data-target="#modal-indique">
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

                        <div class="col-md-4 col-sm-6">
                            <div class="item-bloco">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="preco">
                                            <div class="inner-preco">
                                                <span class="small">R$</span> 820.650
                                            </div>
                                        </div>
                                        <a href="assets/img/exemplos/veiculos/carro2.jpg" class="imagem-anuncio-destaque" style="background-image: url('assets/img/exemplos/veiculos/carro2.jpg');">
                                        </a>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="info-card-destaque">
                                            <h3 class="truncate">
                                                <a href="#">
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
                                                    <a href="#" class="btn btn-xs" data-toggle="modal" data-target="#modal-indique">
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

                        <div class="col-md-4 col-sm-6">
                            <div class="item-bloco">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="preco">
                                            <div class="inner-preco">
                                                <span class="small">R$</span> 620.100
                                            </div>
                                        </div>
                                        <a href="assets/img/exemplos/veiculos/carro3.jpg" class="imagem-anuncio-destaque" style="background-image: url('assets/img/exemplos/veiculos/carro3.jpg');">
                                        </a>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="info-card-destaque">
                                            <h3 class="truncate">
                                                <a href="#">
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
                                                    <a href="#" class="btn btn-xs" data-toggle="modal" data-target="#modal-indique">
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

                        <div class="col-md-4 col-sm-6">
                            <div class="item-bloco">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="preco">
                                            <div class="inner-preco">
                                                <span class="small">R$</span> 1.200
                                            </div>
                                        </div>
                                        <a href="assets/img/exemplos/veiculos/carro4.jpg" class="imagem-anuncio-destaque" style="background-image: url('assets/img/exemplos/veiculos/carro4.jpg');">
                                        </a>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="info-card-destaque">
                                            <h3 class="truncate">
                                                <a href="#">
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
                                                    <a href="#" class="btn btn-xs" data-toggle="modal" data-target="#modal-indique">
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

<?php include('_footer.php'); ?>
<?php include('partials/_modal-indique.php'); ?>