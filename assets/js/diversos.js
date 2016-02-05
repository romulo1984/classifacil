/**
 * Created by romulo on 03/02/2016.
 */
$('#slider-destaques-diversos').slick({
    draggable: false,
    prevArrow: prevArrow,
    nextArrow: nextArrow,
    arrows: false,
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 5000
});


//Lightbox das imagens dos anúncios
$(".item-destaque").lightGallery({
    selector: '.imagem-anuncio-destaque',
    iframeMaxWidth: '80%',
    download: false
});
$(".item-bloco").lightGallery({
    selector: '.imagem-anuncio-destaque',
    iframeMaxWidth: '80%',
    download: false
});