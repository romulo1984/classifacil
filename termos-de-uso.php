<?php
//Inclui css no head
$css = [];
//Inclui javascript no final da página
$js = [];
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
            <div class="col-md-8">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2 class="text-300">Termos de Uso</h2>
                    </div>
                    <div class="panel-body">
                        <?php include('partials/_termos-de-uso.php'); ?>
                    </div>
                </div>

            </div>

            <!-- Anunciante e Publicidade -->
            <div class="col-md-4">

                <div class="sidebar-affix">

                    <?php include('partials/_menu-acesso-rapido.php'); ?>

                    <div class="sidebar-right-publicidade padding-2x">
                        <img src="http://placehold.it/358x260" class="img-responsive">
                    </div>
                </div>

            </div>

        </div>
    </div>

<?php include('_footer.php'); ?>
<?php include('partials/_modal-indique.php'); ?>
<?php include('partials/_modal-denuncie.php'); ?>