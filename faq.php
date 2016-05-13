<?php
//Inclui css no head
$css = [];
//Inclui javascript no final da página
$js = [];
//Item do menu ativo
$menu['faq'] =  true;

include('_header.php');
?>

    <div class="container">
        <div class="row padding-2x padding-bottom-3x">
            <div class="col-md-12">

                <?php include('_search_bar.php'); ?>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">

            <!-- Conteúdo do Anúncio -->
            <div class="col-md-8">

                <div class="panel-group" id="painel-faq" role="tablist" aria-multiselectable="true">

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h1 class="text-cinza-escuro">dúvidas frequentes</h1>
                        </div>
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#painel-faq" href="#pergunta-1" aria-expanded="true" aria-controls="pergunta-1">
                                    Como buscar anúncios nos classificados?
                                </a>
                            </h4>
                        </div>
                        <div id="pergunta-1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
                                <p>
                                    Há duas maneiras de realizar uma busca e encontrar o que você procura.
                                    Cada uma delas atende a um perfil de busca, veja qual é o melhor pra você.
                                    Lembre-se de que quanto mais filtros você utilizar, mais refinado será o resultado.
                                </p>
                                <p>
                                    <strong>1. Busca rápida:</strong> É o campo de busca que fica na página home e na página de cada
                                    um dos canais de produtos – Imóveis, Veículos e Diversos. Essa busca permite que
                                    você encontre o produto selecionando um ou mais canais.
                                </p>
                                <p>
                                    <strong>2. Aprimore a sua busca:</strong>  Ao entrar dentro de cada canal de compra – imóveis,
                                    veículos e diversos – você encontrará o campo “Aprimore a sua busca”, que fica do
                                    lado esquerdo da página. Busque pelas características do produto desejado como:
                                    marca, modelo, ano, cidade, entre outras, de forma rápida e intuitiva.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#painel-faq" href="#pergunta-2" aria-expanded="false" aria-controls="pergunta-2">
                                    Como anuncio? Quais são os preços dos anúncios?
                                </a>
                            </h4>
                        </div>
                        <div id="pergunta-2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                                <p>
                                    <i>A resposta ainda será inserida aqui.</i>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#painel-faq" href="#pergunta-3" aria-expanded="false" aria-controls="pergunta-3">
                                    Onde encontro os produtos e preços para Pessoa Jurídica?
                                </a>
                            </h4>
                        </div>
                        <div id="pergunta-3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                <p>
                                    <i>A resposta ainda será inserida aqui.</i>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#painel-faq" href="#pergunta-5" aria-expanded="false" aria-controls="pergunta-5">
                                    Como reativar meu plano?
                                </a>
                            </h4>
                        </div>
                        <div id="pergunta-5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                <p>
                                    <i>A resposta ainda será inserida aqui.</i>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#painel-faq" href="#pergunta-6" aria-expanded="false" aria-controls="pergunta-6">
                                    Como posso contratar mais produtos?
                                </a>
                            </h4>
                        </div>
                        <div id="pergunta-6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                <p>
                                    <i>A resposta ainda será inserida aqui.</i>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#painel-faq" href="#pergunta-7" aria-expanded="false" aria-controls="pergunta-7">
                                    Como incluir o logo da minha loja?
                                </a>
                            </h4>
                        </div>
                        <div id="pergunta-7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                <p>
                                    <i>A resposta ainda será inserida aqui.</i>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#painel-faq" href="#pergunta-8" aria-expanded="false" aria-controls="pergunta-8">
                                    Cadastrei um anuncio, mas ele ainda não apareceu no site. O que pode ser?
                                </a>
                            </h4>
                        </div>
                        <div id="pergunta-8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                <p>
                                    <i>A resposta ainda será inserida aqui.</i>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#painel-faq" href="#pergunta-9" aria-expanded="false" aria-controls="pergunta-9">
                                    Como faço para cancelar meu plano?
                                </a>
                            </h4>
                        </div>
                        <div id="pergunta-9" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                <p>
                                    <i>A resposta ainda será inserida aqui.</i>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#painel-faq" href="#pergunta-10" aria-expanded="false" aria-controls="pergunta-10">
                                    Como incluir fotos no meu anúncio?
                                </a>
                            </h4>
                        </div>
                        <div id="pergunta-10" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                <p>
                                    <i>A resposta ainda será inserida aqui.</i>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#painel-faq" href="#pergunta-11" aria-expanded="false" aria-controls="pergunta-11">
                                    Como eu faço para alterar o meu anúncio?
                                </a>
                            </h4>
                        </div>
                        <div id="pergunta-11" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                <p>
                                    <i>A resposta ainda será inserida aqui.</i>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#painel-faq" href="#pergunta-12" aria-expanded="false" aria-controls="pergunta-12">
                                    Como incluir vídeo no meu anúncio?
                                </a>
                            </h4>
                        </div>
                        <div id="pergunta-12" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                <p>
                                    <i>A resposta ainda será inserida aqui.</i>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#painel-faq" href="#pergunta-13" aria-expanded="false" aria-controls="pergunta-13">
                                    Como acompanhar o retorno do meu anúncio?
                                </a>
                            </h4>
                        </div>
                        <div id="pergunta-13" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                <p>
                                    <i>A resposta ainda será inserida aqui.</i>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#painel-faq" href="#pergunta-14" aria-expanded="false" aria-controls="pergunta-14">
                                    Cadastrei meu anúncio mais de uma vez, por engano. Será gerada uma cobrança em duplicidade? Como faço para excluir o(s) anúncio(s) inserido(s) erroneamente?
                                </a>
                            </h4>
                        </div>
                        <div id="pergunta-14" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                <p>
                                    <i>A resposta ainda será inserida aqui.</i>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#painel-faq" href="#pergunta-15" aria-expanded="false" aria-controls="pergunta-15">
                                    É possível excluir meu anúncio? Como desativar o anúncio?
                                </a>
                            </h4>
                        </div>
                        <div id="pergunta-15" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                <p>
                                    <i>A resposta ainda será inserida aqui.</i>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#painel-faq" href="#pergunta-16" aria-expanded="false" aria-controls="pergunta-16">
                                    Meu anúncio venceu ou está prestes a vencer. Como faço para renová-lo? Poderei optar por outra modalidade?
                                </a>
                            </h4>
                        </div>
                        <div id="pergunta-16" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                <p>
                                    <i>A resposta ainda será inserida aqui.</i>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#painel-faq" href="#pergunta-17" aria-expanded="false" aria-controls="pergunta-17">
                                    Como localizar meu anúncio nos classificados?
                                </a>
                            </h4>
                        </div>
                        <div id="pergunta-17" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                <p>
                                    <i>A resposta ainda será inserida aqui.</i>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#painel-faq" href="#pergunta-18" aria-expanded="false" aria-controls="pergunta-18">
                                    Porque meu anúncio ainda não está no ar? Como saber se o pagamento do meu anúncio foi efetivado?
                                </a>
                            </h4>
                        </div>
                        <div id="pergunta-18" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                <p>
                                    <i>A resposta ainda será inserida aqui.</i>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#painel-faq" href="#pergunta-19" aria-expanded="false" aria-controls="pergunta-19">
                                    Como alterar meu e-mail?
                                </a>
                            </h4>
                        </div>
                        <div id="pergunta-19" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                <p>
                                    <i>A resposta ainda será inserida aqui.</i>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#painel-faq" href="#pergunta-20" aria-expanded="false" aria-controls="pergunta-20">
                                    Esqueci meu e-mail cadastrado. Como posso recuperá-lo?
                                </a>
                            </h4>
                        </div>
                        <div id="pergunta-20" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                <p>
                                    <i>A resposta ainda será inserida aqui.</i>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#painel-faq" href="#pergunta-21" aria-expanded="false" aria-controls="pergunta-21">
                                    Tive problemas com minha senha. O que devo fazer?
                                </a>
                            </h4>
                        </div>
                        <div id="pergunta-21" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                <p>
                                    <i>A resposta ainda será inserida aqui.</i>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#painel-faq" href="#pergunta-22" aria-expanded="false" aria-controls="pergunta-22">
                                    Como atualizar meus dados pessoais?
                                </a>
                            </h4>
                        </div>
                        <div id="pergunta-22" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                <p>
                                    <i>A resposta ainda será inserida aqui.</i>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#painel-faq" href="#pergunta-23" aria-expanded="false" aria-controls="pergunta-23">
                                    Por que não consigo navegar normalmente? (Campos não mostrados ou desconfigurados, informações não registradas, fluxo interrompido).
                                </a>
                            </h4>
                        </div>
                        <div id="pergunta-23" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                <p>
                                    <i>A resposta ainda será inserida aqui.</i>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#painel-faq" href="#pergunta-24" aria-expanded="false" aria-controls="pergunta-24">
                                    O que faço caso identifique alguma suspeita de irregularidade nos classificados ou se receber uma proposta suspeita?
                                </a>
                            </h4>
                        </div>
                        <div id="pergunta-24" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                <p>
                                    <i>A resposta ainda será inserida aqui.</i>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#painel-faq" href="#pergunta-25" aria-expanded="false" aria-controls="pergunta-25">
                                    Como posso contatar um anunciante?
                                </a>
                            </h4>
                        </div>
                        <div id="pergunta-25" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                <p>
                                    <i>A resposta ainda será inserida aqui.</i>
                                </p>
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