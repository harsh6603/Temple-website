var swiper = new Swiper(".mySwiper", {
    slidesPerView: 2,
    spaceBetween: 15,
    slidesPerGroup: 2,
    autoplay:{
        delay:2500,
        disableOnInteraction:false
    },
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
});