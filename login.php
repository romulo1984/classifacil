<?php
//Inclui css no head
$css = [];
//Inclui javascript no final da página
$js = ['assets/js/login.js'];
//Item do menu ativo
$menu['login'] =  true;

include('_header.php');
?>

<div class="container">
    <div class="row padding-2x">
        <div class="col-md-4">
            <form action="dashboard.php" method="post" class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="text-300">Login</h2>
                    <p>Se você já tem cadastro, faça login pra continuar</p>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label for="">E-mail</label>
                        <input type="email" class="form-control input-lg">
                    </div>
                    <div class="form-group">
                        <label for="">Senha</label>
                        <input type="password" class="form-control input-lg">
                        <input type="hidden" name="logged" value="login">
                    </div>
                    <a href="#">Esqueci minha senha</a>
                    <hr>
                    <div class="pull-right">
                        <button type="submit" class="btn btn-lg btn-default">Entrar</button>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </form>
        </div>
        <div class="col-md-8">
            <form action="dashboard.php" method="post" class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="text-300">Cadastro</h2>
                    <p>Se você ainda não tem conta, se cadastre no formulário abaixo</p>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="">Tipo de Cadastro</label>
                                <select name="" id="switch-cpf-cnpj" class="form-control input-lg">
                                    <option value="cpf">Pessoa Física</option>
                                    <option value="cnpj">Pessoa Jurídica</option>
                                </select>
                            </div>
                        </div>

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
                                        <button type="submit" class="btn btn-lg btn-default">Cadastrar</button>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- Form de Pessoa Jurídica -->
                        <div class="col-md-7 form-cnpj" style="display: none;">
                            <label for="">CNPJ<span class="text-vermelho">*</span></label>
                            <input type="text" class="form-control input-lg">
                        </div>
                        <div class="col-md-12 form-cnpj" style="display: none;">
                            <hr>
                            <h4 class="text-300">Pessoa Jurídica</h4>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Razão Social<span class="text-vermelho">*</span></label>
                                        <input type="text" class="form-control input-lg">
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label for="">Nome Fantasia</label>
                                        <input type="text" class="form-control input-lg">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="">Site</label>
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
                                        <label for="">Telefone<span class="text-vermelho">*</span></label>
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
                                <div class="col-md-12">
                                    <div class="pull-right">
                                        <p>
                                            <span class="text-vermelho">*</span> <span class="text-muted">Campos Obrigatórios</span>
                                        </p>
                                    </div>
                                    <div class="checkbox checkbox-laranja-diversos">
                                        <input id="news-cnpj" class="styled" type="checkbox">
                                        <label for="news-cnpj">Gostaria de receber informações da Rede Tribuna em seu e-mail?</label>
                                    </div>
                                    <div class="checkbox checkbox-verde-imoveis">
                                        <input type="hidden" name="logged" value="login">
                                        <input id="terms-cnpj" class="styled" type="checkbox">
                                        <label for="terms-cnpj">Li e concordo com os <a href="#modal-termos-de-uso" data-toggle="modal" style="text-decoration: underline">termos de uso</a><span class="text-vermelho">*</span></label>
                                    </div>
                                    <hr>
                                    <div class="pull-right">
                                        <button type="submit" class="btn btn-lg btn-default">Cadastrar</button>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include('_footer.php'); ?>
<?php include('partials/_modal-termos-de-uso.php'); ?>