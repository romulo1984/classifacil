<?php
//Inclui css no head
$css = [];
//Inclui javascript no final da página
$js = [];
//Item do menu ativo
$menu['contato'] =  true;

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
                        <h1 class="text-cinza-escuro">fale conosco</h1>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nome<span class="text-vermelho">*</span></label>
                                    <input type="text" class="input-lg form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">E-mail<span class="text-vermelho">*</span></label>
                                    <input type="text" class="input-lg form-control">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <label for="">Telefone</label>
                                    <input type="text" class="input-lg form-control">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="">Assunto</label>
                                    <select class="input-lg form-control">
                                        <option value="">Escolha uma opção</option>
                                        <option value="1">Reclamação</option>
                                        <option value="2">Sugestão</option>
                                        <option value="3">Outros</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="">Mensagem<span class="text-vermelho">*</span></label>
                                <textarea rows="6" class="form-control input-lg"></textarea>
                            </div>
                            <div class="col-md-12">
                                <hr>
                                <div class="pull-right">
                                    <a href="#" class="btn btn-lg btn-default">Enviar</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
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