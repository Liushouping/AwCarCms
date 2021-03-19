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
