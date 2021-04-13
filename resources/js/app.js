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
  slidesPerView: 1,
  spaceBetween: 20,
  loop: true,
  autoplay: {
    delay: 2000,
    disableOnInteraction: false,
  },
  // pagination: {
  //   el: '.s2',
  //   clickable: true,
  // },
  breakpoints: {
    640: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 15,
    },
    1024: {
      slidesPerView: 3,
      spaceBetween: 15,
    }
  },
  // navigation: {
  //   nextEl: '.sn2 ',
  //   prevEl: '.sp2',
  // },
});