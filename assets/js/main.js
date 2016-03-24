$(document).ready(function() {
    $("#addfavoritos").click(function(e) {
        e.preventDefault();
        alert("Aperte Control + D para adicionar aos Favoritos");
    });
});

if ($('#back-to-top').length) {
    var scrollTrigger = 100, // px
        backToTop = function () {
            var scrollTop = $(window).scrollTop();
            if (scrollTop > scrollTrigger) {
                $('#back-to-top').addClass('show');
            } else {
                $('#back-to-top').removeClass('show');
            }
        };
    backToTop();
    $(window).on('scroll', function () {
        backToTop();
    });
    $('#back-to-top').on('click', function (e) {
        e.preventDefault();
        $('html,body').animate({
            scrollTop: 0
        }, 700);
    });
}

var nextArrow = '<button type="button" class="slick-prev">Previous</button>';
var prevArrow = '<button type="button" class="slick-next">Previous</button>';

function toggleChevron(e) {
    $(e.target)
        .prev('.panel-heading')
        .find("i.indicator")
        .toggleClass(' fa-fw fa-plus fa-fw fa-minus');
}
$('.accordion').on('hidden.bs.collapse', toggleChevron);
$('.accordion').on('shown.bs.collapse', toggleChevron);


$('.sidebar-affix').affix({
    offset: {
        top: 425,
        bottom: function () {
            return (this.bottom = $('footer').outerHeight(true));
        }
    }
});

//Largura sutomática do Affix
function widthAffix(){
    var $affixElement = $('.sidebar-affix');
    $affixElement.width($affixElement.parent().width());
}
widthAffix();
$(window).resize(function(){
    widthAffix();
});


$(function () {
    $('[data-toggle="popover"]').popover();
    $('[data-target="#modal-indique"]').popover({
        content: "Indique este anúncio para um amigo",
        placement: "top",
        trigger: "hover",
        container: "body"
    });
});

//Modo de Listagem dos Anúncios. Pode ser em Bloco ou Lista
if(localStorage.getItem('modoListagem') === null){
    localStorage.setItem('modoListagem', 'bloco');
}

modoListagemAtivo();

var modoListagem = localStorage.getItem('modoListagem');
if(modoListagem == 'lista') {
    changeExibitionCards('lista');
}
if(modoListagem == 'bloco') {
    changeExibitionCards('bloco');
}

function changeExibitionCards(tipo){
    var modoListagem = localStorage.getItem('modoListagem');
    var $parent = $('.item-change-block-list');
    var $image = $('.col-imagem');
    var $info = $('.col-info');

    if(tipo == 'lista'){
        localStorage.setItem('modoListagem', 'lista');
        $parent
            .addClass('col-xs-12')
            .removeClass('col-md-4 col-sm-6')
            .children()
                .addClass('item-lista')
                .removeClass('item-bloco');
        $image
            .addClass('col-sm-5')
            .removeClass('col-sm-12');
        $info
            .addClass('col-sm-7')
            .removeClass('col-sm-12');
    }
    if(tipo == 'bloco'){
        localStorage.setItem('modoListagem', 'bloco');
        $parent
            .addClass('col-md-4 col-sm-6')
            .removeClass('col-xs-12')
            .children()
                .addClass('item-bloco')
                .removeClass('item-lista');
        $image
            .addClass('col-sm-12')
            .removeClass('col-sm-5');
        $info
            .addClass('col-sm-12')
            .removeClass('col-sm-7');
    }

    modoListagemAtivo();
}

function modoListagemAtivo() {
    var modoListagem = localStorage.getItem('modoListagem');
    if(modoListagem == 'bloco'){
        $('.btn-modo-bloco')
            .addClass('ativado')
            .removeClass('desativado');
        $('.btn-modo-lista')
            .addClass('desativado')
            .removeClass('ativado');
    } else {
        $('.btn-modo-lista')
            .addClass('ativado')
            .removeClass('desativado');
        $('.btn-modo-bloco')
            .addClass('desativado')
            .removeClass('ativado');
    }
}


//Simula itens sendo adicionados a comparação de produtos
var countChecked = function() {
    var n = $('input[type=checkbox][id^=imoveis]:checked').length;
    if(n > 0) {
        $('.compare-nav').addClass('compare-nav-active');
        if(n == 1){
            $('.item-selected:nth-child(1)').addClass('no-selected');
            $('.item-selected:nth-child(2)').addClass('no-selected');
            $('.item-selected:nth-child(3)').removeClass('no-selected');
        } else if(n == 2){
            $('.item-selected:nth-child(1)').addClass('no-selected');
            $('.item-selected:nth-child(2)').removeClass('no-selected');
            $('.item-selected:nth-child(3)').removeClass('no-selected');
        } else if(n == 3){
            $('.item-selected:nth-child(1)').removeClass('no-selected');
            $('.item-selected:nth-child(2)').removeClass('no-selected');
            $('.item-selected:nth-child(3)').removeClass('no-selected');
            $('#modal-compare').modal('show');
        } else if (n >= 4){
            alert("A Comparação só pode ser feita com no máximo 3 produtos de cada Categoria");
        }
    } else {
        $('.compare-nav').removeClass('compare-nav-active');
    }
    return n;
};

countChecked()

$('input[type=checkbox][id^=imoveis]').click(function(){
    countChecked()
});

$('input[type=checkbox][id^=veiculo]').click(function(){
    countChecked()
});