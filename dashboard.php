<?php
//Inclui css no head
$css = [];
//Inclui javascript no final da página
$js = [];
//Item do menu ativo
$menu['login'] =  true;

if( (!isset($_COOKIE['logged'])) || ($_COOKIE['logged'] == false)){
    header("Refresh: 0; login.php");
}

include('_header.php');

?>

<div class="container">
    <div class="row padding-2x">
        <div class="col-sm-3 titulo-categoria">
            <h1 class="text-azul">minha conta</h1>
        </div>
        <div class="col-sm-7">

            <ul class="nav nav-tabs pull-right">
                <li class="active">
                    <a data-toggle="tab" href="#tab-anunciar">
                        Anunciar
                    </a>
                </li>
                <li>
                    <a data-toggle="tab" href="#tab-anuncios">
                        Anúncios
                    </a>
                </li>
                <li>
                    <a data-toggle="tab" href="#tab-anuncios-incompletos">
                        Anúncios Incompletos
                    </a>
                </li>
                <li>
                    <a data-toggle="tab" href="#tab-relatorio-anuncios">
                        Relatório de Anúncios
                    </a>
                </li>
                <li>
                    <a data-toggle="tab" href="#tab-meus-dados">
                        Meus Dados
                    </a>
                </li>
            </ul>

        </div>

        <div class="col-md-2">
            <div class="media">
                <div class="media-left media-middle">
                    <h1 style="margin:0;" class="text-muted">
                        <span class="fa fa-shopping-cart"></span>
                    </h1>
                </div>
                <div class="media-body media-middle">
                    <strong>nenhum</strong> anúncio no carrinho
                </div>
            </div>
        </div>

    </div>
</div>


<div class="container tab-content">

    <!-- Tab Anunciar -->
    <div class="row tab-pane fade in active" id="tab-anunciar">
        <div class="col-md-12">
            <h3 class="text-300">Escolha a mídia que deseja publicar o seu anúncio</h3>
        </div>
        <div class="col-md-12">
            <div class="row padding-2x">
                <div class="col-md-4 text-center">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <a href="#" class="anuncie-impresso center-block"></a>
                        </div>
                        <div class="panel-footer">
                            <h3 class="text-300" style="margin:0;">Impresso</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <a href="#" class="anuncie-impresso-web center-block"></a>
                        </div>
                        <div class="panel-footer">
                            <h3 class="text-300" style="margin:0;">Impresso + Web</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <a href="#" class="anuncie-web center-block"></a>
                        </div>
                        <div class="panel-footer">
                            <h3 class="text-300" style="margin:0;">Web</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tab Anúncios -->
    <div class="row tab-pane fade" id="tab-anuncios">
        <div class="col-md-12">
            <h3 class="text-300">Meus Anúncios</h3>
        </div>
        <div class="col-md-12">
            <div class="padding-3x">
                Em construção
            </div>
        </div>
    </div>

    <!-- Tab Anúncios Incompletos -->
    <div class="row tab-pane fade" id="tab-anuncios-incompletos">
        <div class="col-md-12">
            <h3 class="text-300">Anúncios Incompletos</h3>
        </div>
        <div class="col-md-12">
            <div class="padding-3x">
                Em construção
            </div>
        </div>
    </div>

    <!-- Tab Relatório de Anúncios -->
    <div class="row tab-pane fade" id="tab-relatorio-anuncios">
        <div class="col-md-12">
            <h3 class="text-300">Relatório de Anúncios</h3>
        </div>
        <div class="col-md-12">
            <div class="padding-3x">
                Em construção
            </div>
        </div>
    </div>

    <!-- Tab Meus Dados -->
    <div class="row tab-pane fade" id="tab-meus-dados">
        <div class="col-md-12">
            <h3 class="text-300">Meus Dados</h3>
        </div>
        <div class="col-md-12">
            <div class="panel panel-default padding-3x">
                <div class="panel-body">
                    <div class="row">
                        <!-- Form de Pessoa Física -->
                        <div class="col-md-7 form-cpf">
                            <label for="">CPF<span class="text-vermelho">*</span></label>
                            <input type="text" class="form-control input-lg">
                        </div>
                        <div class="col-md-12 form-cpf">
                            <hr>
                            <h4 class="text-300">Pessoa Física</h4>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Nome<span class="text-vermelho">*</span></label>
                                        <input type="text" class="form-control input-lg">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="">Sobrenome<span class="text-vermelho">*</span></label>
                                        <input type="text" class="form-control input-lg">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">RG<span class="text-vermelho">*</span></label>
                                        <input type="text" class="form-control input-lg">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Sexo<span class="text-vermelho">*</span></label>
                                        <select name="" id="" class="form-control input-lg">
                                            <option value="m">Masculino</option>
                                            <option value="f">Feminino</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Estado Civil<span class="text-vermelho">*</span></label>
                                        <select name="" id="" class="form-control input-lg">
                                            <option value="solteiro">Solteiro</option>
                                            <option value="casado">Casado</option>
                                            <option value="divorciado">Divorciado</option>
                                            <option value="viuvo">Viúvo</option>
                                            <option value="separado">Separado</option>
                                            <option value="outro">Outro</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Data de Nascimento<span class="text-vermelho">*</span></label>
                                        <input type="text" class="form-control input-lg">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Ocupação Profissional</label>
                                        <input type="text" class="form-control input-lg">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <hr>
                                    <h4 class="text-300">Endereço</h4>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">CEP<span class="text-vermelho">*</span></label>
                                        <input type="text" class="form-control input-lg">
                                    </div>
                                    <div class="form-group">
                                        <label for="nao-sei-meu-cep-cpf">
                                            <input id="nao-sei-meu-cep-cpf" type="checkbox"> Não sei meu CEP
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <p class="text-muted" style="padding-top:20px;">
                                        Digite o seu CEP que alguns campos serão preenchidos automaticamente
                                    </p>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="">Cidade<span class="text-vermelho">*</span></label>
                                        <select name="" id="" class="form-control input-lg">
                                            <option value="vitoria">Vitória</option>
                                            <option value="serra">Serra</option>
                                            <option value="cariacica">Cariacica</option>
                                            <option value="...">...</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Estado<span class="text-vermelho">*</span></label>
                                        <select name="" id="" class="form-control input-lg">
                                            <option value="es">Espírito Santo</option>
                                            <option value="mg">Minas Gerais</option>
                                            <option value="sp">São Paulo</option>
                                            <option value="...">...</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <label for="">Rua<span class="text-vermelho">*</span></label>
                                        <input type="text" class="form-control input-lg">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Número<span class="text-vermelho">*</span></label>
                                        <input type="text" class="form-control input-lg">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Complemento<span class="text-vermelho">*</span></label>
                                        <input type="text" class="form-control input-lg">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="">Bairro<span class="text-vermelho">*</span></label>
                                        <input type="text" class="form-control input-lg">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <hr>
                                    <h4 class="text-300">Contato</h4>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Telefone Residencial<span class="text-vermelho">*</span></label>
                                        <input type="text" class="form-control input-lg">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Telefone Celular<span class="text-vermelho">*</span></label>
                                        <input type="text" class="form-control input-lg">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">E-mail<span class="text-vermelho">*</span></label>
                                        <input type="text" class="form-control input-lg">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Confirme o E-mail<span class="text-vermelho">*</span></label>
                                        <input type="text" class="form-control input-lg">
                                    </div>
                                </div>
                                <div class="col-md-12 faixa-enviar-foto">
                                    <div class="media">
                                        <div class="media-left media-middle">
                                            <img src="http://www.gravatar.com/avatar/0?s=70&amp;d=mm&amp;f=y" class="img-circle">
                                        </div>
                                        <div class="media-body media-middle">
                                            <strong>Imagem do anunciante</strong>
                                            <p class="small text-muted">
                                                Envie sua imagem para aparecer nas informações do anunciante na págia do anúncio.
                                            </p>
                                            <input type="file" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="pull-right">
                                        <p>
                                            <span class="text-vermelho">*</span> <span class="text-muted">Campos Obrigatórios</span>
                                        </p>
                                    </div>
                                    <div class="checkbox checkbox-laranja-diversos">
                                        <input id="news-cpf" class="styled" type="checkbox">
                                        <label for="news-cpf">Gostaria de receber informações da Rede Tribuna em seu e-mail?</label>
                                    </div>
                                    <div class="checkbox checkbox-verde-imoveis">
                                        <input type="hidden" name="logged" value="login">
                                        <input id="terms-cpj" class="styled" type="checkbox">
                                        <label for="terms-cpj">Li e concordo com os <a href="#modal-termos-de-uso" data-toggle="modal" style="text-decoration: underline">termos de uso</a><span class="text-vermelho">*</span></label>
                                    </div>
                                    <hr>
                                    <div class="pull-right">
                                        <button type="submit" class="btn btn-lg btn-default">Salvar</button>
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
