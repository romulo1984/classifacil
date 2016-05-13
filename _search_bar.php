<form action="busca.php">

    <div class="input-group search-bar">

        <input type="text" name="search-terms" class="form-control input-lg" value="<?php echo (isset($_GET['search-terms'])) ? $_GET['search-terms'] : '' ?>" placeholder="O que você está procurando...">

        <span class="input-group-addon">

            <div class="checkbox no-margin label label-select bg-verde-imoveis">
                <input id="search-imoveis" class="styled" type="checkbox" checked>
                <label for="search-imoveis">IMÓVEIS</label>
            </div>

            <div class="checkbox no-margin label label-select bg-roxo-veiculos">
                <input id="search-veiculos" class="styled" type="checkbox" checked>
                <label for="search-veiculos">VEÍCULOS</label>
            </div>

            <div class="checkbox no-margin label label-select bg-laranja-diversos">
                <input id="search-diversos" class="styled" type="checkbox" checked>
                <label for="search-diversos">DIVERSOS</label>
            </div>

        </span>

        <span class="input-group-btn">
            <button class="btn btn-primary btn-lg" type="submit">
                buscar <span class="fa fa-fw fa-search"></span>
            </button>
        </span>

    </div>

</form>