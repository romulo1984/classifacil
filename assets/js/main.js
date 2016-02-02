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


$('#slider-destaques-imoveis').slick({
    draggable: false,
    prevArrow: prevArrow,
    nextArrow: nextArrow,
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 5000,
    responsive: [
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: true,
                arrows: false
            }
        },
        {
            breakpoint: 992,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true,
                dots: true,
                arrows: false
            }
        }
    ]
});

$('#slider-destaques-veiculos').slick({
    draggable: false,
    prevArrow: prevArrow,
    nextArrow: nextArrow,
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 5000,
    responsive: [
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: true,
                arrows: false
            }
        },
        {
            breakpoint: 992,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true,
                dots: true,
                arrows: false
            }
        }
    ]
});

$('#slider-destaques-diversos').slick({
    draggable: true,
    prevArrow: prevArrow,
    nextArrow: nextArrow,
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 5000,
    responsive: [
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: true,
                arrows: false
            }
        },
        {
            breakpoint: 992,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true,
                dots: true,
                arrows: false
            }
        }
    ]
});

//$(".imagem-anuncio-destaque").lightGallery({
//    //selector: '.imagem-anuncio-destaque'
//    //thumbnail:true
//});