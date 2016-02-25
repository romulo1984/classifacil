<?php
//Inclui css no head
$css = [];
//Inclui javascript no final da página
$js = [];
//Item do menu ativo
$menu['login'] =  true;

include('_header.php');
?>

<div class="container">
    <div class="row padding-2x">
        <div class="col-md-4">
            <form action="dashboard.php?logged=true" method="post" class="panel panel-default">
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
            <form action="dashboard.php?logged=true" method="post" class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="text-300">Cadastro</h2>
                    <p>Se você ainda não tem conta, se cadastre no formulário abaixo</p>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="">Tipo de Cadastro</label>
                                <select name="" id="" class="form-control input-lg">
                                    <option value="fisica">Pessoa Física</option>
                                    <option value="fisica">Pessoa Jurídica</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <label for="">CPF</label>
                            <input type="text" class="form-control input-lg">
                        </div>
                        <div class="col-md-12">
                            <hr>
                            <h4 class="text-300">Pessoa Física</h4>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="">Nome</label>
                                <input type="text" class="form-control input-lg">
                            </div>
                        </div>
                        <div class="col-md-4"><div class="form-group">
                                <label for="">RG</label>
                                <input type="text" class="form-control input-lg">
                            </div></div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Sexo</label>
                                <select name="" id="" class="form-control input-lg">
                                    <option value="m">Masculino</option>
                                    <option value="f">Feminino</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Estado Civil</label>
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
                                <label for="">Nascimento</label>
                                <input type="text" class="form-control input-lg">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <hr>
                            <h4 class="text-300">Endereço</h4>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="">Cidade</label>
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
                                <label for="">Estado</label>
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
                                <label for="">Rua</label>
                                <input type="text" class="form-control input-lg">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Número</label>
                                <input type="text" class="form-control input-lg">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Complemento</label>
                                <input type="text" class="form-control input-lg">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="">Bairro</label>
                                <input type="text" class="form-control input-lg">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <hr>
                            <h4 class="text-300">Contato</h4>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Telefone Residencial</label>
                                <input type="text" class="form-control input-lg">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Telefone Celular</label>
                                <input type="text" class="form-control input-lg">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">E-mail</label>
                                <input type="text" class="form-control input-lg">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Confirme o E-mail</label>
                                <input type="text" class="form-control input-lg">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="checkbox checkbox-verde-imoveis">
                                <input id="terms" class="styled" type="checkbox">
                                <label for="terms">Li e concordo com os <a href="#">termos de uso</a>.</label>
                            </div>
                            <hr>
                            <div class="pull-right">
                                <button type="submit" class="btn btn-lg btn-default">Cadastrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include('_footer.php'); ?>