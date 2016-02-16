$('.slider-img-grande').slick({
    prevArrow: prevArrow,
    nextArrow: nextArrow,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    fade: true,
    draggable: false,
    adaptiveHeight: false,
    asNavFor: '.slider-img-nav',
    lazyLoad: 'ondemand'
});
$('.slider-img-nav').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    asNavFor: '.slider-img-grande',
    dots: true,
    arrows: false,
    focusOnSelect: true,
    lazyLoad: 'ondemand'
});

$('.slider-img-grande').lightGallery({
    selector: '.item-slider-galeria',
    thumbnail:true
});