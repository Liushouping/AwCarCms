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
  spaceBetween: 10,
  loop: true,
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
  pagination: false,
  breakpoints: {
    640: {
      slidesPerView: 2,
      // spaceBetween: 20,
    },
    768: {
      slidesPerView: 2,
      // spaceBetween: 15,
    },
    1024: {
      slidesPerView: 3,
      // spaceBetween: 15,
    }
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});
