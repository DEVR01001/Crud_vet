var swiper = new Swiper(".mySwiper", {
    autoplay: {
        delay: 4000,
        disableOnInteraction: false,
      },
      grabCursor: true,
  
    pagination: {
    el: ".swiper-pagination",
    dynamicBullets: true,
    },
});



var swiper = new Swiper(".mySwiper2", {
  slidesPerView: 2,
  spaceBetween: 100,
  centeredSlides: true,
  grabCursor: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    
  },
});


