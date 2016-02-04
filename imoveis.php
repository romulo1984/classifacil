<?php
//Inclui css no head
$css = ['assets/css/pagination.css'];
//Inclui javascript no final da página
$js = ['assets/js/imoveis.js'];
//Item do menu ativo
$menu['imoveis'] =  true;

include('_header.php');
?>

<div class="container">
    <div class="row padding-2x">
        <div class="col-sm-3 titulo-categoria">
            <h1 class="text-verde-imoveis">imóveis</h1>
        </div>
        <div class="col-sm-9">

            <?php include('_search_bar.php'); ?>

        </div>
    </div>
</div>

<div class="container">

    <div class="row">
        <div class="col-md-3">
            <div class="sidebar-filtro context-imoveis">

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
                                <a href="#" class="list-group-item">Terrenos <strong>(522)</strong></a>
                                <a href="#" class="list-group-item">Casas <strong>(895)</strong></a>
                                <a href="#" class="list-group-item">Apartamentos <strong>(1254)</strong></a>
                                <a href="#" class="list-group-item">Lojas <strong>(245)</strong></a>
                                <a href="#" class="list-group-item">Imóveis na planta <strong>(365)</strong></a>
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
                                <a class="accordion-toggle" data-toggle="collapse" href="#seguranca">
                                    Segurança
                                    <i class="indicator fa fa-fw fa-plus pull-right"></i>
                                </a>
                            </h4>
                        </div>
                        <div id="seguranca" class="panel-collapse collapse">
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
                                <a class="accordion-toggle" data-toggle="collapse" href="#valor">
                                    Valor
                                    <i class="indicator fa fa-fw fa-plus pull-right"></i>
                                </a>
                            </h4>
                        </div>
                        <div id="valor" class="panel-collapse collapse">
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
                </div>

            </div>
        </div>

        <div class="col-md-9">
            <div class="conteudo-categoria">

                <!-- Slider Destaque -->
                <div class="row" id="slider-destaques-imoveis">
                    <div class="col-md-12">
                        <div class="item-destaque destaque-horizontal" data-effect="mfp-zoom-in">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="preco">
                                        <div class="inner-preco bg-verde-imoveis">
                                            <span class="small">R$</span> 320.000
                                        </div>
                                    </div>
                                    <a
                                        class="imagem-anuncio-destaque"
                                        data-iframe="true"
                                        data-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d935.6111039512758!2d-40.29878357076004!3d-20.281863941195898!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xb8181d578622f9%3A0xe26701711552ada4!2sR.+Comiss%C3%A1rio+Ot%C3%A1vio+Queir%C3%B3s%2C+267+-+Jardim+da+Penha%2C+Vit%C3%B3ria+-+ES%2C+29060-270!5e0!3m2!1spt-BR!2sbr!4v1454543113587"
                                        style="background-image: url('assets/img/exemplos/imoveis/imovel1.jpg');"
                                    >
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
                                        <div class="info-bloco">
                                            <div class="info-bloco-part">
                                                Quartos<br>
                                                <strong>3</strong>
                                            </div>
                                            <div class="info-bloco-part">
                                                Suítes<br>
                                                <strong>1</strong>
                                            </div>
                                            <div class="info-bloco-part">
                                                Vagas Garagem<br>
                                                <strong>1</strong>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="divisor"></div>
                                        <div class="indique-compare-box">
                                            <div class="pull-left">
                                                <a href="#" class="btn btn-xs btn-verde-imoveis" data-toggle="modal" data-target="#modal-indique">
                                                    <span class="fa fa-fw fa-user"></span>
                                                    indique
                                                </a>
                                            </div>
                                            <div class="pull-right">
                                                <div class="checkbox checkbox-verde-imoveis no-margin">
                                                    <input id="imoveis1" class="styled" type="checkbox">
                                                    <label for="imoveis1">comparar</label>
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
                                        <div class="inner-preco bg-verde-imoveis">
                                            <span class="small">R$</span> 620.100
                                        </div>
                                    </div>
                                    <a href="assets/img/exemplos/imoveis/imovel3.jpg" class="imagem-anuncio-destaque" style="background-image: url('assets/img/exemplos/imoveis/imovel3.jpg');">
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
                                        <div class="info-bloco">
                                            <div class="info-bloco-part">
                                                Quartos<br>
                                                <strong>1</strong>
                                            </div>
                                            <div class="info-bloco-part">
                                                Suítes<br>
                                                <strong>1</strong>
                                            </div>
                                            <div class="info-bloco-part">
                                                Vagas Garagem<br>
                                                <strong>0</strong>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="divisor"></div>
                                        <div class="indique-compare-box">
                                            <div class="pull-left">
                                                <a href="#" class="btn btn-xs btn-verde-imoveis" data-toggle="modal" data-target="#modal-indique">
                                                    <span class="fa fa-fw fa-user"></span>
                                                    indique
                                                </a>
                                            </div>
                                            <div class="pull-right">
                                                <div class="checkbox checkbox-verde-imoveis no-margin">
                                                    <input id="imoveis3" class="styled" type="checkbox">
                                                    <label for="imoveis3">comparar</label>
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
                    <div class="row context-imoveis">
                        <div class="col-md-8 col-sm-6 col-xs-4">
                            <nav role="navigation" class="pull-left">
                                <ul class="cd-pagination no-space custom-buttons">
                                    <li class="button">
                                        <a href="#0">Prev</a>
                                    </li>
                                    <li>
                                        <a href="#0">1</a>
                                    </li>
                                    <li>
                                        <a href="#0">2</a>
                                    </li>
                                    <li>
                                        <a class="current" href="#0">3</a>
                                    </li>
                                    <li>
                                        <a href="#0">4</a>
                                    </li>
                                    <li>
                                        <span>...</span>
                                    </li>
                                    <li>
                                        <a href="#0">20</a>
                                    </li>
                                    <li class="button">
                                        <a href="#0">Next</a>
                                    </li>
                                </ul>
                            </nav> <!-- cd-pagination-wrapper -->
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-8">
                            <div class="pull-right">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        Exibir:
                                    </div>
                                    <select class="form-control input-lg">
                                        <option>6</option>
                                        <option selected>12</option>
                                        <option>24</option>
                                        <option>48</option>
                                        <option>60</option>
                                    </select>
                                    <a href="#" class="desativado input-group-addon">
                                        <span class="fa fa-fw fa-bars"></span>
                                    </a>
                                    <a href="#" class="input-group-addon">
                                        <span class="fa fa-fw fa-th-large"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="divisor-1x"></div>

                <!-- Anúncios -->
                <div class="row">
                    <div class="col-md-12">
                        <h4>aqui vem os anúncios</h4>
                    </div>
                </div>

            </div>
        </div>

    </div>


</div>

<?php include('_footer.php'); ?>
<?php include('partials/_modal-indique.php'); ?>