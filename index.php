<?php
if (isset($_POST['aws'])){
    if(empty($_POST['username'])) {
        $error['empty_username'] = 'Введите ваше имя';
    }
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset='UTF-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="icon" type="image/png" href="favicon.ico">
    
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&family=Montserrat+Alternates&display=swap"
        rel="stylesheet">

    <title>Центр детского
развития на воде
AquaKids</title>

</head>
<body id="body">
    <div class="wrapper">
        <div id="nul__el" class="nul__el">Null el</div>

        <header class="header">
            <div class="burgerwrapper">
                <div class="burger">
                    <span></span>
                </div>
            </div>



            <nav id="" class=" menu__1">
                <div class="menu__1__list-container">
                    <ul class="menu__1__list">
                        <li class="menu__1__list-item">
                            <a href="#about" class="menu__1__list-link">О нашем центре </a>
                        </li>
                        <li class="menu__1__list-item">
                            <a href="#take" class="menu__1__list-link">Что взять с собой</a>
                        </li>
                        <li class="menu__1__list-item_1 ">
                            <img class="logo" src="img/logo_1.svg" alt="">
                        </li>
                        <li class="menu__1__list-item">
                            <a href="#subscriptions" class="menu__1__list-link">Абонементы</a>
                        </li>
                        <li class="menu__1__list-item">
                            <a href="#recording" class="menu__1__list-link">Пробное занятие</a>
                        </li>
                    </ul>
                    <div class="header__massanger-menu__1">
                       
                        <!--*Ссылка на инстаграм-->
                        <a href="https://instagram.com/aquakids72?utm_medium=copy_link" id="ar" class="menu__list-inst"><img src="img/inst.svg" alt=""> </a>
                       
                        <!--*Ссылка на телеграмм-->
                        

                    </div>
                    
                </div>
                <span class="menu_number_desktop">
                    <a class="menu_number_desktop-link" href=”tel:+79292626216”>+7 (929) 262-62-16</a> 
                </span>
            </nav>



            <nav id="header__menu" class="menu">

                <div class="menu__list-container">
                    <ul class="menu__list">
                        <li class="menu__list-item">
                            <a href="#about" class="menu__list-link">О нашем центре </a>
                        </li>
                        <li class="menu__list-item">
                            <a href="#take" class="menu__list-link">Что взять с собой</a>
                        </li>
                        <li class="menu__list-item_1 ">
                            <img class="logo" src="img/logo_1.svg" alt="">
                        </li>
                        <li class="menu__list-item">
                            <a href="#program" class="menu__list-link">Программы</a>
                        </li>
                        <li class="menu__list-item">
                            <a href="#recording" class="menu__list-link">Пробное занятие</a>
                        </li>
                        <li class="menu__list-item">
                            <span class="menu_number">
                                <a class="menu_number" href=”tel:+79292626216”>+7 (929) 262-62-16</a> 
                            </span>
                        </li>
                    </ul>
                    <div class="header__massanger">
                       
                        <!--*Ссылка на инстаграм-->
                        <a href="https://instagram.com/aquakids72?utm_medium=copy_link" id="ar" class="menu__list-inst"><img src="img/inst.svg" alt=""> </a>

                        <!--*Ссылка на телеграмм-->
                       

                    </div>
                </div>
            </nav>


            <div class="image-slider__header swiper-container">
                <div class="image-slider__wrapper__header swiper-wrapper">

                    <div class="image-slider-slide swiper-slide">
                        <div class="header__top image-slider__image__header">
                            <div class="header_top-inner">
                                <h1 class="header__title">
                                    Центр детского <br> развития на воде <span class="colortext"> <br>AquaKids</span>
                                </h1>
                                <p class="header__text">
                                    для детей <span class="colortext slider__colortext"> от 0 до 5 лет</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="image-slider-slide swiper-slide">
                        <div class="header__top-2 image-slider__image__header">
                            <div class="header_top-inner">
                                <h1 class="header__title">
                                    Самая современная и <br>безопасная система <br><span class="colortext"> очистки
                                    </span>воды
                                </h1>
                                <p class="header__text">
                                    Итальянская система <span class="colortext slider__colortext">контроля </span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="image-slider-slide swiper-slide">
                        <div class="header__top-3 image-slider__image__header">
                            <div class="header_top-inner">
                                <h1 class="header__title">
                                    Развивайте своих <br> малышей вместе <br>с <span class="colortext">AquaKids</span>
                                </h1>
                                <p class="header__text">
                                    для детей <span class="colortext slider__colortext"> от 0 до 5 лет</span>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div id="header__pagination" class="swiper-pagination__header"></div>
            <a id="header__button" class="popup__button button-block" href="https://vk.com/away.php?to=https%3A%2F%2Fn542795.yclients.com%2Fcompany%3A513312&cc_key=">Записаться</a>
        </header>

        <section id="about" class="about">
            <div class="container">
                <div class="about__container">
                    <h2 class="about__title">
                        О нашем центре
                    </h2>
                    <div class="about__logo ">
                        <img class="logo" src="img/logo_1.svg" alt="">
                    </div>
                    <p class="about__text">
                        <span class="colortext about__colortext">AquaKids </span>- это центр для плавания детей от 0 до
                        5 лет. Наша
                        миссия -
                        помогать
                        малышам развивать здоровье и
                        характер уже с самого раннего детства.
                    </p>
                </div>
                <div class="about__img ">
                    <img class="image " src="img/2.png" alt="">
                </div>
            </div>
        </section>

        <section id="program" class="program">
            <h2 class="program__title">
                Программы
            </h2>
            <div class="image-slider swiper-container">
                <div class="image-slider__wrapper swiper-wrapper">
                    <div class="image-slider__slide swiper-slide">
                        <div id="imge-slider__image-1" class="imge-slider__image imge-slider__image-1">
                            <h3 class="image-slider__title">01</h3>
                            <p class="image-slider__text"> Аквапатронаж (занятия на дому) для грудничков </p>
                            <a class="popup__button program__button1" href="https://vk.com/away.php?to=https%3A%2F%2Fn542795.yclients.com%2Fcompany%3A513312&cc_key=">Записаться</a>
                        </div>
                    </div>
                    <div class="image-slider__slide swiper-slide">
                        <div id="imge-slider__image-2" class="imge-slider__image imge-slider__image-2">
                            <h3 class="image-slider__title">02</h3>
                            <p class="image-slider__text"> Грудничковое и раннее плавание в бассейне </p>
                            <a class="popup__button  program__button1" href="https://vk.com/away.php?to=https%3A%2F%2Fn542795.yclients.com%2Fcompany%3A513312&cc_key=">Записаться</a>
                        </div>
                    </div>
                    <div class="image-slider__slide swiper-slide">
                        <div id="imge-slider__image-3" class="imge-slider__image imge-slider__image-3">
                            <h3 class="image-slider__title">03</h3>
                            <p class="image-slider__text"> Индивидуальные занятия с инструктором </p>
                            <a class="popup__button  program__button1 " href="https://vk.com/away.php?to=https%3A%2F%2Fn542795.yclients.com%2Fcompany%3A513312&cc_key=">Записаться</a>
                        </div>
                    </div>
                    <div class="image-slider__slide swiper-slide">
                        <div id="imge-slider__image-4" class="imge-slider__image imge-slider__image-4">
                            <h3 class="image-slider__title">04</h3>
                            <p class="image-slider__text"> Занятия - мама/папа и малыш </p>
                            <a class="popup__button  program__button1" href="https://vk.com/away.php?to=https%3A%2F%2Fn542795.yclients.com%2Fcompany%3A513312&cc_key=">Записаться</a>
                        </div>
                    </div>
                    <div class="image-slider__slide swiper-slide">
                        <div id="imge-slider__image-5" class="imge-slider__image imge-slider__image-5">
                            <h3 class="image-slider__title">05</h3>
                            <p class="image-slider__text"> Гидрореабилитация <br> для особенных детей </p>
                            <a class="popup__button  program__button1" href="https://vk.com/away.php?to=https%3A%2F%2Fn542795.yclients.com%2Fcompany%3A513312&cc_key=">Записаться</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-prev"> </div>
                <div class="swiper-button-next"> </div>
                <a class="popup__button program-button" href="https://vk.com/away.php?to=https%3A%2F%2Fn542795.yclients.com%2Fcompany%3A513312&cc_key=">Записаться</a>
            </div>
        </section>

        <section class="benefits">
            <div class="container">
                <h2 class="benefits__title">
                    Преимущества
                </h2>
                <div class="benefits__statistic">
                    <div class="benefits__statistic-item ">
                        <img class="benefits__statistic-images" src="img/4-1.svg" alt="">
                        <p class="benefits__statistic-text">
                            Высококачественная <br> <span class="colortext benefits__colortext">очистка воды</span>
                        </p>
                    </div>
                    <div class="benefits__statistic-item ">
                        <img class="benefits__statistic-images" src="img/4-2.svg" alt="">
                        <p class="benefits__statistic-text">
                            Удобное <br> <span class="colortext benefits__colortext">местоположение</span>
                        </p>
                    </div>
                    <div class="benefits__statistic-item-3 ">
                        <img class="benefits__statistic-images" src="img/4-3.svg" alt="">
                        <p class="benefits__statistic-text">
                            Профессиональные <br> <span class="colortext benefits__colortext">инструкторы</span>
                        </p>
                    </div>
                </div>
                <img class="image " src="img/4.png" alt="">
            </div>
        </section>

        <section class="water">
            <div class="container">
                <div class="container-block">
                    <div class="water__head">
                        <h2 class="water__title">
                            Лучшее качество воды
                        </h2>
                        <div class="water__logo ">
                            <img class="logo" src="img/logo_1.svg" alt="">
                        </div>
                    </div>
                    <div class="water__container">
                        <p class="water__text">
                            В нашем центре вода очищается самым эффективным образом
                        </p>
                        <a href="" id="mod" class="mod__link mod-link"><img class="mod-link-img" src="img/mod__open.svg"
                                alt=""> </a>
                    </div>
                </div>
            </div>
            <div id="mod-body" class="mod-body">
                <div class="mod__body">
                    <div class="mod__content">
                        <a href="" class="mod__close close-mod"></a>
                        <div class="logo__mod">
                            <img class="mod__logo logo" src="img/logo_1.svg" alt="">
                        </div>

                        <div class="mod__text">
                            <p class="mod__text-p"> <span class="colortext mod__colortext"> Итальянская
                                    система</span> контроля
                                качества
                                воды HTH: каждые две
                                минуты берется проба воды из
                                бассейна и определяется ее качество
                            </p>
                            <p class="mod__text-p">
                                Вода <span class="colortext mod__colortext"> круглосуточно дезинфицируется
                                </span>ультрафиолетовой
                                лампой,
                                что позволяет снизить содержание
                                хлора до 0,1. Карцуется лампами, проходит <span class="colortext mod__colortext">
                                    обработку</span>
                                песочным
                                фильтром
                            </p>
                            <p class="mod__text-p">
                                Система автоматически регулирует уровень качества: благодаря совершенной системе
                                фильтрации
                                вода полностью <span class="colortext mod__colortext "> <br> обновляется 1 раз в 30
                                    минут</span>
                            </p>
                            <p class="mod__text-p">
                                Ежедневно <span class="colortext mod__colortext"> сливается 30% воды</span> в
                                бассейне и происходит
                                ручная
                                чистка воды техническим
                                персоналом: добавляются специальные реагенты и доливается вода до нужного уровня
                            </p>
                            <p class="mod__text-p">
                                Ежедневно ведется <span class="colortext mod__colortext"> забор воды </span>на
                                содержание хлора.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="container-block">
                    <div class="water_reg">
                        <h2 class="water_reg-title">
                            Итальянская система <br> <span class="colortext water_reg-colortext">очистки</span> воды
                        </h2>
                        <p class="water_reg-text">
                            <span class="colortext water_colortext">Качество</span> и безопасность
                        </p>
                        <div class="water__button">
                            <a class="popup__button button-block" href="https://vk.com/away.php?to=https%3A%2F%2Fn542795.yclients.com%2Fcompany%3A513312&cc_key=">Записаться</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

   

        <section class="conditions">
            <div class="container">
                <h2 class="condition__title">
                    Наши условия
                </h2>
                <div class="conditions__block">
                    <div class="conditions__block-1 conditions-block">
                        <h3 class="conditions__block-title">01</h3>
                        <p class="conditions__block-text">
                            Удобный<br> <span class="colortext conditions__colortext">бассейн</span>
                        </p>
                    </div>
                    <div class="conditions__block-2 conditions-block">
                        <h3 class="conditions__block-title">02</h3>
                        <p class="conditions__block-text">
                            Теплая <span class="colortext conditions__colortext">вода</span> - <br> 32-34 градусов
                        </p>
                    </div>
                    <div class="conditions__block-3 conditions-block">
                        <h3 class="conditions__block-title">03</h3>
                        <p class="conditions__block-text">
                            Интересные <span class="colortext conditions__colortext">программы</span>
                        </p>
                    </div>
                </div>
                <div class="conditions__popup">
                    <a class="popup__button button-block" href="https://vk.com/away.php?to=https%3A%2F%2Fn542795.yclients.com%2Fcompany%3A513312&cc_key=">Записаться</a>
                </div>
            </div>
        </section>

        <section class="receive">
            <div class="container">
                <h2 class="receive__title">
                    Что получит ваш ребенок?
                </h2>
                <div class="receive__container">
                    <div class="receive__container-block">
                        <h3 class="conditions__block-title"><img class="receive-title" src="img/010.svg" alt=""></h3>
                        <p class="receive__num-text">
                            <span class="colortext receive__colortext">Крепкий</span> <br>здоровый сон
                        </p>
                    </div>
                    <div class="receive__container-block">
                        <h3 class="conditions__block-title"><img class="receive-title" src="img/020.svg" alt=""></h3>
                        <p class="receive__num-text">
                            <span class="colortext receive__colortext"> Мышечный </span> <br>тонус
                        </p>
                    </div>
                    <div class="receive__container-block">
                        <h3 class="conditions__block-title"><img class="receive-title" src="img/030.svg" alt=""></h3>
                        <p class="receive__num-text">
                            <span class="colortext receive__colortext"> Укрепление</span><br> иммунитета
                        </p>
                    </div>

                    <div class="receive__container-block">
                        <h3 class="conditions__block-title"><img class="receive-title" src="img/040.svg" alt=""></h3>
                        <p class="receive__num-text">
                            <span class="colortext receive__colortext">Развитая </span> <br> дыхательная система
                        </p>
                    </div>
                    <div class="receive__container-block">
                        <h3 class="conditions__block-title"><img class="receive-title" src="img/050.svg" alt=""></h3>
                        <p class="receive__num-text">
                            <span class="colortext receive__colortext"> Целеустремленный </span> <br>характер
                        </p>
                    </div>
                    <div class="receive__container-block">
                        <h3 class="conditions__block-title"><img class="receive-title" src="img/060.svg" alt=""></h3>
                        <p class="receive__num-text">
                            <span class="colortext receive__colortext"> Радостные</span><br> эмоции
                        </p>
                    </div>
                </div>
                <div id="receive__logo" class="receive__logo">
                    <img class="logo" src="img/logo_1.svg" alt="">
                </div>

                <div class="receive__text">
                    <p>
                        Мы дарим счастье не только детям, но и их родителям
                    </p>
                </div>
                <a class="popup__button receive__button" href="https://vk.com/away.php?to=https%3A%2F%2Fn542795.yclients.com%2Fcompany%3A513312&cc_key=">Записаться</a>


                <div class="sale">
                    <h2 class="sale__title">
                        Получите <span class="colortext sale__colortext">скидку 20%</span> на абонемент на 4 занятия
                    </h2>
                    <p class="sale__text">
                        <span class="sale__text-none sale__span">3 600 руб </span> <span
                            class="sale__text-now sale__span">2 880 руб </span>
                    </p>
                    <a class="popup__button button-block" href="https://vk.com/away.php?to=https%3A%2F%2Fn542795.yclients.com%2Fcompany%3A513312&cc_key=">Записаться</a>
                </div>
            </div>
        </section>

        <section id="take" class="take">
            <div class="container">
                <h2 class="take__title">
                    Что взять с собой?
                </h2>
                <div id="take__logo" class="take__logo">
                    <img class="logo" src="img/logo_1.svg" alt="">
                </div>
                <div class="baby">
                    <h3 class="title__h3 title__baby">
                        Для грудничков:
                    </h3>
                    <div class="take__baby">
                        <div class="take__baby-item ">
                            <img class="take__baby-images" src="img/9-1.svg" alt="">
                            <p class="take__baby-text">Пелёнку</p>
                        </div>
                        <div class="take__baby-item">
                            <img class="take__baby-images" src="img/9-2.svg" alt="">
                            <p class="take__baby-text">Специальный подгузник для плавания</p>
                        </div>
                        <div class="take__baby-item ">
                            <img class="take__baby-images" src="img/9-3.svg" alt="">
                            <p class="take__baby-text">Полотенце</p>
                        </div>
                    </div>
                    <a id="take__button" class="popup__button button-block" href="https://vk.com/away.php?to=https%3A%2F%2Fn542795.yclients.com%2Fcompany%3A513312&cc_key=">Записаться</a>
                </div>
                <div class="child">
                    <h3 class="title__h3 title__baby">
                        Для детей постарше:
                    </h3>
                    <div class="take__child">
                        <div class="take__child-item ">
                            <img class="take__child-images" src="img/10-1.svg" alt="">
                            <p class="take__baby-text">Сланцы</p>
                        </div>
                        <div class="take__child-item">
                            <img class="take__child-images" src="img/10-2.svg" alt="">
                            <p class="take__baby-text">Шапочку</p>
                        </div>
                        <div class="take__child-item ">
                            <img class="take__child-images" src="img/10-3.svg" alt="">
                            <p class="take__baby-text">Очки</p>
                        </div>

                        <div class="take__child-item ">
                            <img class="take__child-images" src="img/10-4.svg" alt="">
                            <p class="take__baby-text">Купальник <br> или плавки</p>
                        </div>
                        <div class="take__child-item">
                            <img class="take__child-images" src="img/10-5.svg" alt="">
                            <p class="take__baby-text">Полотенце</p>
                        </div>
                        <div class="take__child-item ">
                            <img class="take__child-images" src="img/10-6.svg" alt="">
                            <p class="take__baby-text">Моющее <br> средство</p>
                        </div>
                    </div>
                </div>
                <div class="parents">
                    <h3 class="title__h3 parents__title">
                        Для родителей <br> обязательно сменную обувь
                    </h3>
                    <a id="take__button-cild" class="popup__button button-block" href="https://vk.com/away.php?to=https%3A%2F%2Fn542795.yclients.com%2Fcompany%3A513312&cc_key=">Записаться</a>
                </div>

                <div class="reference">
                    <div class="reference-box">
                        <h3 class="title__h3 reference__title">
                            Какие справки нужны?
                        </h3>
                        <a id="ref" class="ref__button" href=""><img class="ref-link-img" src="img/mod__open.svg" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="ref-content">
                <div class="ref__body">
                    <div class="ref__content">
                        <div class="ref__logo">
                            <img class="logo" id="ref__logo" src="img/logo_1.svg" alt="">
                        </div>

                        <h3 id="title__h3-tef" class="title__h3 ref__title-h3">
                            Какие справки нужны
                        </h3>
                        <h3 class="ref__title">
                            Для детей до 1 года
                        </h3>
                        <p class="ref__text">
                            Справка от педиатра
                        </p>
                        <h3 class="ref__title">
                            От 1 года
                        </h3>
                        <p class="ref__text">
                            Справка от педиатра, соскоб на энтеробиоз и кал на яйца гельминтов
                        </p>
                        <h3 class="ref__title">
                            Взрослым
                        </h3>
                        <p class="ref__text">
                            Справка от терапевта, гинеколога, дерматовенеролога
                        </p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="reference">
                    <div class="reference__bord">
                        <div class="reference__bord-content">
                            <h2 id="reference__bord-title" class="reference__title-bord">
                                Проведите время с пользой для здоровья <br> <span
                                    class="colortext reference__colortext">в
                                    Aquakids</span>
                            </h2>
                            <p class="reference_text">
                                Для детей <span class="colortext reference__span">от 0 до 5 лет</span>
                            </p>
                        </div>
                        <a class="popup__button button-block " href="https://vk.com/away.php?to=https%3A%2F%2Fn542795.yclients.com%2Fcompany%3A513312&cc_key=">Записаться</a>
                    </div>
                </div>

            </div>
        </section>

        <section id="subscriptions" class="subscriptions">
            <div class="container">
                <h2 class="subscriptions__title">Абонементы</h2>
                <div class="subscriptions-1">
                    <h3 class="subscriptions__title-num"><img class="subscriptions__title-num" src="img/01.svg" alt="">
                    </h3>
                    <h3 class="subscriptions__title__h3">Индивидуальные занятия</h3>
                    <div class="subscriptions__text-at">
                        <span class="colortext subscriptions__colortext"> Плавание 30 минут</span><br> с инструктором
                    </div>
                    <div class="subscriptions__price">
                        <div class="subscriptions__price-name">
                            <ul>
                                <li class="subscriptions__price-li">Пробное занятие</li>
                                <li class="subscriptions__price-li">Разовое занятие</li>
                                <li class="subscriptions__price-li">4 занятия</li>
                                <li class="subscriptions__price-li">4 занятия (Вс)</li>
                                <li class="subscriptions__price-li">8 занятий</li>
                                <li class="subscriptions__price-li">12 занятий</li>
                                <li class="subscriptions__price-li">24 занятия</li>
                            </ul>
                        </div>
                        <div class="subscriptions__price-num">
                            <ul>
                                <li class="subscriptions__price-li">400 ₽</li>
                                <li class="subscriptions__price-li">1 000 ₽</li>
                                <li class="subscriptions__price-li">3 600 ₽</li>
                                <li class="subscriptions__price-li">3 200 ₽</li>
                                <li class="subscriptions__price-li">6 800 ₽</li>
                                <li class="subscriptions__price-li">9 900 ₽</li>
                                <li class="subscriptions__price-li">17 400 ₽</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="subscriptions-2">
                    <h3 id="subscriptions__title-num-2" class="subscriptions__title-num"><img
                            class="subscriptions__title-num" src="img/02.svg" alt="">
                    </h3>
                    <h3 class="subscriptions__title__h3">Мама / папа + малыш</h3>
                    <div class="subscriptions__text-at">
                        <span class="colortext subscriptions__colortext"> Плавание 30 минут</span> с мамой или папой<br>
                        под руководством <span class="colortext subscriptions__colortext">инструктора</span>
                    </div>
                    <div class="subscriptions__price">
                        <div class="subscriptions__price-name">
                            <ul>
                                <li class="subscriptions__price-li">Разовое занятие</li>
                                <li class="subscriptions__price-li">8 занятий</li>
                            </ul>
                        </div>
                        <div class="subscriptions__price-num">
                            <ul>
                                <li class="subscriptions__price-li">700 ₽</li>
                                <li class="subscriptions__price-li">4 600 ₽</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="subscriptions-3">
                    <h3 id="subscriptions__title-num-2" class="subscriptions__title-num"><img
                            class="subscriptions__title-num" src="img/03.svg" alt="">
                    </h3>
                    <h3 class="subscriptions__title__h3">Занятия на дому</h3>
                    <div class="subscriptions__text-at">
                        <span class="colortext subscriptions__colortext"> Гимнастика и массаж</span> - 20 минут<br> +
                        <span class="colortext subscriptions__colortext">плавание</span> 15 минут
                    </div>
                    <div class="subscriptions__price">
                        <div class="subscriptions__price-name">
                            <ul>
                                <li class="subscriptions__price-li">Пробное занятие</li>
                                <li class="subscriptions__price-li">Разовое занятие</li>
                                <li class="subscriptions__price-li">8 занятий</li>
                            </ul>
                        </div>
                        <div class="subscriptions__price-num">
                            <ul>
                                <li class="subscriptions__price-li">800 ₽</li>
                                <li class="subscriptions__price-li">1 500 ₽</li>
                                <li class="subscriptions__price-li">8 800 ₽</li>

                            </ul>
                        </div>
                    </div>
                </div>

                <div class="subscriptions__bord">
                    <h2 class="subscriptions__bord-title">
                        Ждём вас в нашем центре развития на воде <span
                            class="colortext subscriptions__title-colortext">Aquakids</span>
                    </h2>
                    <p class="subscriptions__bord-text">
                        Для детей <span class="colortext subscriptions__text-colortext">от 0 до 5 лет</span>
                    </p>
                    <a class="popup__button button-block" href="https://vk.com/away.php?to=https%3A%2F%2Fn542795.yclients.com%2Fcompany%3A513312&cc_key=">Записаться</a>
                </div>
            </div>
        </section>

        <section class="address">
            <div class="container">
                <h2 class="address__title">Адрес</h2>
                <div class="address__map">
                    <img class="address__map-images" src="img/map.svg" alt="">
                    <p class="address__map-text">
                        <span class="colortext address__colortext"> Павла Шарова, 7к2, </span>
                        <br>Тюмень, Восточный округ<br>
                    </p>
                    <span class="address__num">
                        <a class="address__num" href=”tel:+79292626216”>+7 (929) 262-62-16</a>   
                    </span>
                </div>
              
                <img class="map-images" src="img/address.png" alt="">
            </div>
        </section>

        
        <footer class="footer">
            <div class="footer__menu">
                <div class="container-block">
                    <div class="footer__menu-container">
                        <div class="footer__menu-nav">
                            <div class="logo__footer">
                                <img class="logo" src="img/logo_1.svg" alt="">
                            </div>
                            <nav class="nav">
                                <ul class="nav__list">
                                    <li class="nav__list-item">
                                        <a href="#about" class="menu__list-link-f">О нас </a>
                                    </li>
                                    <li class="nav__list-item">
                                        <a href="#recording" class="menu__list-link-f">Пробное занятие</a>
                                    </li>
                                    <li class="nav__list-item ">
                                        <img class="logo" id="footer__logo" src="img/logo_1.svg" alt="">
                                    </li>
                                    <li class="nav__list-item">
                                        <a href="#subscriptions" class="menu__list-link-f">Абонементы</a>
                                    </li>
                                    <li class="nav__list-item">
                                        <a href="#take" class="menu__list-link-f">Что взять с собой</a>
                                    </li>
                                </ul>
                            </nav>




                            <div class="footer__massanger">
                                <ul>
                                    <li class="footer__inst">
                                        <a href="#" class="footer__a"><img src="img/inst.svg" alt=""> </a>
                                    </li>
                                    
                                </ul>
                            </div>
                            <div class="footer-massanger">
                                <ul>
                                <li class="footer__inst">
                                    <!--*Ссылка на инстаграм-->
                                    <a href="https://instagram.com/aquakids72?utm_medium=copy_link"><img class="footer__a" src="img/inst.svg" alt=""> </a>
                                </li>
                                    <!--*Ссылка на телеграмм-->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer__link">

                <!--*Ссылка на Диану-->
                <a href="#" class="menu__link-a"> made by @diana_hende </a>
            </div>

        </footer>


        <!-- * Сообщение об отправленной форме -->
        <div class="popup__send">
            <div class="send__contant">
                <p class="send__text">Ваше сообщение <br> отправлено!</p>
            </div>
        </div>


    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="script.js"></script>

</body>

</html>