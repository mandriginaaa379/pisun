//слайдер верхнее меню
new Swiper('.image-slider__header', {
    slidesPerView: 1,
    loop: true,
    touchRatio: 0.5,
    //перетаскивания на ПК
    simulateTouch: false,
    autoplay: {
        //пауза между прокруткой
        delay: 10000,
        //Заканчивать на последнем слайде
        stopOnLastSlide: false,
        //Отключить после ручного переключения
        disableOnInteraction: false
    },
    // скорость перелистывания слайдов
    speed: 800,
    pagination: {
        el: '.swiper-pagination__header',
        clickable: true,
    },
  
});



//Сворачивающееся меню в заголовке
const burger = document.querySelector('.burger');
const burgerMenu = document.querySelector('.menu__list-container');
const links = document.querySelectorAll('.menu__list-link');

burger.addEventListener('click', () => {
    burger.classList.toggle('burger-active');
    burgerMenu.classList.toggle('menu__list-container-active');
    document.querySelector('body').classList.toggle('lock');
    document.querySelector('#header__menu').classList.toggle('menu-active');

})


links.forEach(link=>{
    link.addEventListener('click', (e)=> {
        e.preventDefault();
        burger.classList.remove('burger-active');
        burgerMenu.classList.remove('menu__list-container-active');
        document.querySelector('#header__menu').classList.remove('menu-active');
        document.querySelector('body').classList.remove('lock');
    })
})




// слайдер программы
new Swiper('.image-slider', {
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev'
    },

    //количество слайдов
    slidesPerView: 2.7,
    // слайд по центру 
    //centeredSlides: true,
    // отступы
    spaceBetween: 44,
    //начальный слайд
    initialSlide: 0,
    //бесконечность 
    loop: true,

    freeModeSticky: true,
    // 768: {
    //     slidesPerView: 2,
    //     spaceBetween: 44,
    //     centeredSlides: true,

    // },
    breakpoints: {
        1024:{
            initialSlide: 0,
            slidesPerView: 2.7,
            spaceBetween: 15,
        },
        768:{
            initialSlide: 0,
            slidesPerView: 2.5,
            spaceBetween: 15,
        },
        375:{
            initialSlide: 0,
            slidesPerView: 1.5,
            spaceBetween: 15,
        },
        320:{
            initialSlide: 0,
            slidesPerView: 1.3,
            spaceBetween: 15,
        },
        280:{
            initialSlide: 0,
            slidesPerView: 1,
            spaceBetween: 15,
        },
      
    }
});



// выпадающий блок в блоке с качеством воды
const mod = document.querySelector('.mod-body');
const modBtn = document.querySelector('#mod');
modBtn.addEventListener('click', (e) => {
    e.preventDefault();
    e.target.classList.toggle('mod-link-img-active');
    mod.classList.toggle('mod-body-active');
});

// выпадающий блок в блоке о справках
const ref = document.querySelector('.ref-content');
const refBtn = document.querySelector('#ref');
refBtn.addEventListener('click', (e) => {
    e.preventDefault();
    e.target.classList.toggle('ref-link-img-active');
    ref.classList.toggle('ref-content-active');

});





// const popup = document.querySelector('.popup')
// const btns = document.querySelectorAll('.button-block')

// btns.forEach(btn => {
//     btn.addEventListener('click', (e)=> {
//         e.preventDefault();
//         if(btn.classList.contains('button-block')) {
//             popup.classList.add('active')
//         }
//     })
// })

// const clickBtnsHandler = (selector) => {

// }