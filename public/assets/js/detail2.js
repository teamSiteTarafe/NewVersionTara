$('.img2').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.img1'
});
$('.img1').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    asNavFor: '.img2',
    dots: false,
    centerMode: false,
    focusOnSelect: true
});