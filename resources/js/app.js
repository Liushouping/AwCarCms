require('./bootstrap');

 // import Swiper bundle with all modules installed
 import Swiper from 'swiper/bundle';
 import 'swiper/swiper-bundle.css';
 const swiper1 = new Swiper('#swiper1', {
    spaceBetween: 30,
    effect: 'fade',
    loop: true,
    autoplay: {
      delay: 10000,
      disableOnInteraction: false,
    },
    pagination: {
      el: '.s1',
      clickable: true,
    },
    navigation: {
      nextEl: '.sn1 ',
      prevEl: '.sp1',
    },
});

const swiper2 = new Swiper('#swiper2', {
    slidesPerView: 2,
    spaceBetween: 30,
    slidesPerGroup: 3,
    loop: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    loopFillGroupWithBlank: true,
    breakpoints: {
      // when window width is >= 320px
      // when window width is >= 640px
      960: {
        slidesPerView: 3,
        spaceBetween: 40
      }
    },
    navigation: {
      nextEl: '.sn2',
      prevEl: '.sp2',
    },
  });