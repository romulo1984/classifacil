<div class="panel panel-default share-icons">
    <div class="panel-body">
        <div class="pull-right">
            <div class="btn-group"
                 tabindex="0"
                 role="button"
                 data-toggle="popover"
                 data-trigger="hover"
                 data-placement="top"
                 data-content="Compartilhe este anúncio">
                <a class="btn btn-primary" href="#"><span class="fa fa-fw fa-lg fa-facebook"></span></a>
                <a class="btn btn-info" href="#"><span class="fa fa-fw fa-lg fa-twitter"></span></a>
                <a class="btn btn-danger" href="#"><span class="fa fa-fw fa-lg fa-google-plus"></span></a>
                <a class="btn btn-verde-imoveis visible-xs" href="whatsapp://send?text=<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>"><span class="fa fa-fw fa-lg fa-whatsapp"></span></a>
            </div>
        </div>
        <div class="btn-group">
            <a class="btn btn-default" href="javascript:window.print()"><span class="fa fa-fw fa-print"></span> imprimir</a>
            <a class="btn btn-default" href="#" data-toggle="modal" data-target="#modal-indique"><span class="fa fa-fw fa-user"></span> indique</a>
            <a class="btn btn-default" href="#" data-toggle="modal" data-target="#modal-denuncie"><span class="fa fa-fw fa-ban"></span> denuncie</a>
        </div>
    </div>
</div>