<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Classifácil A Tribuna</title>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="bower_components/slick-carousel/slick/slick.css" rel="stylesheet">
    <link href="bower_components/slick-carousel/slick/slick-theme.css" rel="stylesheet">
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="bower_components/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="bower_components/awesome-bootstrap-checkbox/demo/build.css" rel="stylesheet">
    <link href="bower_components/lightgallery/dist/css/lightgallery.min.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
    <?php

    if(isset($css)){
        foreach($css as $value){
            echo '<link href="';
            echo $value;
            echo '" rel="stylesheet">';
            echo PHP_EOL;
        }
    }

    ?>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<nav class="barra-topo hidden-xs">
    <div class="container">
        <div class="row">
            <div class="col-md-6 hidden-xs hidden-sm">
                <h5>
                    <a href="#" id="addfavoritos" rel="sidebar" title="Adicione aos Favoritos">ADICIONAR O CLASSIFÁCIL AOS FAVORITOS</a>
                </h5>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="pull-right" style="padding-top:3px;">
                    <a href="https://www.facebook.com/jornalatribuna" target="_blank">
                        <span class="fa fa-2x fa-facebook-square"></span>
                    </a>
                    <a href="#" target="_blank">
                        <span class="fa fa-2x fa-twitter-square"></span>
                    </a>
                    <a href="#" target="_blank">
                        <span class="fa fa-2x fa-linkedin-square"></span>
                    </a>
                </div>
                <div class="pull-right" style="padding-top:8px;padding-right:14px;">
                    <a href="http://www.tribunaonline.com.br" target="_blank">
                        <strong>TRIBUNA ONLINE</strong>
                    </a>&nbsp;&nbsp;&nbsp;
                    <a href="http://atribunaes.com.br" target="_blank">
                        <strong>ASSINE A TRIBUNA</strong>
                    </a>
                </div>
            </div>
        </div>
    </div><!-- /.container -->
</nav><!-- /.navbar -->

<section class="container topo-logo">

    <div class="row">
        <div class="col-sm-6">
            <h2>
                <a href="index.php">
                    <img src="assets/img/logo.png" alt="Classifácil" class="img-responsive logo-classifacil">
                </a>
            </h2>
        </div>
        <div class="col-sm-6 hidden-xs">
            <div class="no-margin pull-right text-right text-cinza-escuro">
                <h5 style="margin-top:30px;">Atendimento</h5>
                <h3>
                    <span class="small">(27)</span> 3323-6333
                </h3>
                <p>classifacil@redetribuna.com.br</p>
            </div>
        </div>
    </div>

</section><!--/.container-->

<nav class="navbar menu-principal">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="fa fa-2x fa-angle-down"></span>
            </button>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul>
                <li>
                    <a href="imoveis.php" class="<?php echo ($menu['imoveis']) ? 'ativo' : ''; ?>">
                        <span class="fa fa-fw fa-home"></span><br class="hidden-xs">
                        Imóveis
                    </a>
                </li>
                <li>
                    <a href="veiculos.php" class="<?php echo ($menu['veiculos']) ? 'ativo' : ''; ?>">
                        <span class="fa fa-fw fa-car"></span><br class="hidden-xs">
                        Veículos
                    </a>
                </li>
                <li>
                    <a href="diversos.php" class="<?php echo ($menu['diversos']) ? 'ativo' : ''; ?>">
                        <span class="fa fa-fw fa-asterisk"></span><br class="hidden-xs">
                        Diversos
                    </a>
                </li>
                <li>
                    <a href="anuncie.php" class="<?php echo ($menu['anuncie']) ? 'ativo' : ''; ?>">
                        <span class="fa fa-fw fa-newspaper-o"></span><br class="hidden-xs">
                        Anuncie
                    </a>
                </li>
                <li class="small-li">
                    <a href="login.php" class="<?php echo ($menu['login']) ? 'ativo' : ''; ?>">
                        Minha<br class="hidden-xs"> Conta
                    </a>
                </li>
                <li class="small-li">
                    <a href="faq.php" class="<?php echo ($menu['faq']) ? 'ativo' : ''; ?>">
                        Dúvidas<br class="hidden-xs"> Frequentes
                    </a>
                </li>
                <li class="small-li">
                    <a href="contato.php" class="<?php echo ($menu['contato']) ? 'ativo' : ''; ?>">
                        Fale<br class="hidden-xs"> Conosco
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<section class="conteudo">
