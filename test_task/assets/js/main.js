const swiper = new Swiper('.swiper', {
    slidesPerView: 3.5,
    freeMode: true,
    setWrapperSize: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});


var w = $(window).width();

if (w <= 680) {
    const swiper = new Swiper('.swiper', {
    });
}