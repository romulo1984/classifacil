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


$('.sidebar-filtro').affix({
    offset: {
        top: 425,
        bottom: function () {
            return (this.bottom = $('footer').outerHeight(true));
        }
    }
});

//Largura sutomática do Affix
function widthAffix(){
    var $affixElement = $('.sidebar-filtro');
    $affixElement.width($affixElement.parent().width());
}
widthAffix();
$(window).resize(function(){
    widthAffix();
});