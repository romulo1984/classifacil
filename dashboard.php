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
    <div class="row">
        <div class="col-md-12">
            <h2>Dashboard</h2>
        </div>
    </div>
</div>

<?php include('_footer.php'); ?>
