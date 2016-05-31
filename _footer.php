</section><!-- /.carousel -->

<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                <img src="assets/img/logo-classifacil-branco.png" width="120" style="margin-bottom:15px;">
                <p class="text-branco">
                    Nassau Editora, Rádio e Televisão LTDA<br>
                    Rua Joaquim Plácido da Silva, 225 <br>
                    Ilha de Santa Maria - CEP 29051-900 - Vitória-ES
                </p>
            </div>
            <div class="col-sm-4">
                <hr class="visible-xs">
                <img src="assets/img/formas-de-pagamento.png" class="img-responsive" style="margin-top: 15px;">
            </div>
            <div class="col-xs-12 visible-xs">
                <hr>
                <a href="http://www.tribunaonline.com.br" target="_blank">
                    <span class="fa fa-fw fa-angle-right"></span>
                    TRIBUNA ONLINE
                </a>&nbsp;&nbsp;&nbsp;
                <a href="http://atribunaes.com.br" target="_blank">
                    <span class="fa fa-fw fa-angle-right"></span>
                    ASSINE A TRIBUNA
                </a>
                <hr>
            </div>
            <div class="col-sm-3 col-xs-12">
                <div class="pull-right">
                    <a href="#" id="back-to-top" class="text-branco">
                        <span class="fa fa-fw fa-2x fa-angle-up"></span>
                    </a>
                </div>
                <div class="no-margin text-branco">
                    <h5 style="margin-top:15px;">Atendimento</h5>
                    <h3>
                        <span style="font-size: 12px;;">(27)</span> 3323-6333
                    </h3>
                    <a href="contato.php" class="hidden-xs">classifacil@redetribuna.com.br</a>
                    <a href="mailto:classifacil@redetribuna.com.br" class="visible-xs">classifacil@redetribuna.com.br</a>
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="bower_components/jquery/dist/jquery.min.js"><\/script>')</script>
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="bower_components/slick-carousel/slick/slick.min.js"></script>
<script src="bower_components/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="bower_components/bootstrap-select/dist/js/i18n/defaults-pt_BR.min.js"></script>
<script src="bower_components/lightgallery/dist/js/lightgallery-all.min.js"></script>
<script src="assets/js/main.js"></script>
<?php

if(isset($js)){
    foreach($js as $key=>$value){
        if($value != 'HEAD'){
            echo '<script src="';
            echo $value;
            echo '"></script>';
            echo PHP_EOL;
        }
    }
}

?>
</body>
</html>
