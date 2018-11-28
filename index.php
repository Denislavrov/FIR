<?php
/**
 * Created by PhpStorm.
 * User: Denis
 * Date: 18/11/2018
 * Time: 16:05
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link rel="shortcut icon" href="src/img/favicon.png" type="image/png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
          integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.2/dist/jquery.fancybox.min.css"/>
    <link rel="stylesheet" href="src/css/normilize.css">
    <link rel="stylesheet" href="src/css/index.css">
    <title>Искусственные елки</title>
</head>
<body>
<div class="wrapper">
    <div class="wrapper-box">
        <header class="header">
            <div class="header__opacity">
                <div class="container">
                    <div class="header__top">
                        <a href="index.php" class="header__logo"><i class="fas fa-tree"></i> Искусственные Ёлки</a>
                        <div class="header__call">
                            <a href="tel:+79823029303" class="header__phone"><i class="fas fa-phone-volume"></i>+7(982)-302-93-03</a>
                            <a class="header__callback callBackBtn">Обратный звонок</a>
                        </div>
                    </div>
                    <a  class="header__mobilelink"><i class="fas fa-bars"></i></a>
                    <nav class="menu">
                        <li class="menu-item"><a href="#orderProduct" class="menu-link">Заказать ёлку</a></li>
                        <li class="menu-item"><a href="#ourPluses" class="menu-link">Преимущества</a></li>
                        <li class="menu-item"><a href="#delivery" class="menu-link">Доставка и оплата</a></li>
                        <li class="menu-item"><a href="#contact" class="menu-link">Контакты</a></li>
                    </nav>

                    <div class="header__bottom">
                        <h1 class="header__title">Искусственные Ёлки Челябинск</h1>
                        <div class="header__subtitle">гирлянда в подарок + бесплатная доставка!</div>
                        <div class="menu-item"><a href="#orderProduct" class="header__order ">Заказать Ёлку</a></div>
                    </div>
                </div>
            </div>
        </header>
        <section class="order">
            <div class="container">
                <h2 class="order__title" id="orderProduct">Наши Ёлки</h2>
                <div class="order__items">
                    <article class="order__item" data-item="1">
                        <div class="order__imgblock">
                            <a href="src/img/e1/headImg.jpg" data-fancybox="images1" class="order__img">
                                <img src="src/img/e1/headImg.jpg" alt="1">
                            </a>
                            <div class="order__smallimgs">
                                <a href="src/img/e1/img2.jpg" data-fancybox="images1" class="order__smallimg">
                                    <img src="src/img/e1/img2.jpg" alt="">
                                </a>
                                <a href="src/img/e1/img3.jpg" data-fancybox="images1" class="order__smallimg">
                                    <img src="src/img/e1/img3.jpg" alt="">
                                </a>
                                <a href="src/img/e1/img4.jpg" data-fancybox="images1" class="order__smallimg">
                                    <img src="src/img/e1/img4.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="order__info">
                            <h3 class="order__subtitle">Ель Изумрудная</h3>
                            <div class="order__text">
                                <div class="styled-selected green-selected rounded">
                                    <select name="" id="" class="order__select">
                                        <option value="120" class="order__option" data-orderold="2150₽" data-ordernew="1150₽" selected>120
                                        </option>
                                        <option value="150" class="order__option" data-orderold="2850₽" data-ordernew="1850₽">150
                                        </option>
                                        <option value="180" class="order__option" data-orderold="3600₽" data-ordernew="2600₽">180
                                        </option>
                                        <option value="210" class="order__option" data-orderold="4100₽" data-ordernew="3100₽">210
                                        </option>
                                        <option value="240" class="order__option" data-orderold="5550₽" data-ordernew="4550₽">240
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="order__price active">
                                <span class="order__old">2150₽</span>
                                <span class="order__new">1150₽</span>
                            </div>
                            <a class="order__buy orderBtn">Заказать</a>
                            <div class="order__description">
                                <div class="order__titledescription">Описание:</div>
                                Отличительной особенностью данной елки являются наконечники веток в виде
                                заснеженных трезубцев.
                                <br/> Производство: Россия.
                            </div>
                        </div>
                    </article>

                    <article class="order__item" data-item="2">
                        <div class="order__imgblock">
                            <a href="src/img/e2/headImg.jpg" data-fancybox="images2" class="order__img">
                                <img src="src/img/e2/headImg.jpg" alt="1">
                            </a>
                            <div class="order__smallimgs">
                                <a href="src/img/e2/img2.jpg" data-fancybox="images2" class="order__smallimg">
                                    <img src="src/img/e2/img2.jpg" alt="">
                                </a>
                                <a href="src/img/e2/img3.jpg" data-fancybox="images2" class="order__smallimg">
                                    <img src="src/img/e2/img3.jpg" alt="">
                                </a>
                                <a href="src/img/e2/img4.jpg" data-fancybox="images2" class="order__smallimg">
                                    <img src="src/img/e2/img4.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="order__info">
                            <h3 class="order__subtitle">Ель Белла</h3>
                            <div class="order__text">
                                <div class="styled-selected green-selected rounded">
                                    <select name="" id="" class="order__select">
                                        <option value="60" class="order__option" data-orderold="1750₽" data-ordernew="750₽">60</option>
                                        <option value="90" class="order__option" data-orderold="1850₽" data-ordernew="850₽">90</option>
                                        <option value="120" class="order__option" data-orderold="2450₽" data-ordernew="1450₽">120</option>
                                        <option value="150" class="order__option" data-orderold="2900₽" data-ordernew="1900₽">150</option>
                                        <option value="180" class="order__option" data-orderold="3200₽" data-ordernew="2200₽">180</option>
                                        <option value="210" class="order__option" data-orderold="3700₽" data-ordernew="2700₽">210</option>
                                        <option value="240" class="order__option" data-orderold="4200₽" data-ordernew="3200₽">240</option>
                                    </select>
                                </div>
                            </div>
                            <div class="order__price">
                                <span class="order__old">1750₽</span>
                                <span class="order__new">750₽</span>
                            </div>
                            <a class="order__buy orderBtn">Заказать</a>
                            <div class="order__description">
                                <div class="order__titledescription">Описание:</div>
                                Большое количество иголочек создают невероятно пышный образ этой ели. Выглядит очень
                                пушисто с небольшим количеством снега на веточках.
                                <br/> Производство: Россия.
                            </div>
                        </div>
                    </article>

                    <article class="order__item" data-item="3">
                        <div class="order__imgblock">
                            <a href="src/img/e3/headImg.jpg" data-fancybox="images3" class="order__img">
                                <img src="src/img/e3/headImg.jpg" alt="1">
                            </a>
                            <div class="order__smallimgs">
                                <a href="src/img/e3/img2.jpg" data-fancybox="images3" class="order__smallimg">
                                    <img src="src/img/e3/img2.jpg" alt="">
                                </a>
                                <a href="src/img/e3/img3.jpg" data-fancybox="images3" class="order__smallimg">
                                    <img src="src/img/e3/img3.jpg" alt="">
                                </a>
                                <a href="src/img/e3/img4.jpg" data-fancybox="images3" class="order__smallimg">
                                    <img src="src/img/e3/img4.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="order__info">
                            <h3 class="order__subtitle">Ель Русская</h3>
                            <div class="order__text">
                                <div class="styled-selected green-selected rounded">
                                    <select name="" id="" class="order__select">
                                        <option value="180" class="order__option" data-orderold="7000₽" data-ordernew="6000₽">180</option>
                                        <option value="210" class="order__option" data-orderold="8500₽" data-ordernew="7500₽">210</option>
                                        <option value="240" class="order__option" data-orderold="15000₽" data-ordernew="10000₽">240</option>
                                        <option value="300" class="order__option" data-orderold="22000₽" data-ordernew="17000₽">300</option>
                                    </select>
                                </div>
                            </div>
                            <div class="order__price">
                                <span class="order__old">7000₽</span>
                                <span class="order__new">6000₽</span>
                            </div>
                            <a class="order__buy orderBtn">Заказать</a>
                            <div class="order__description">
                                <div class="order__titledescription">Описание:</div>
                                Искусственная новогодняя елка премиум-класса с очень густой хвоей насыщенного зеленого
                                цвета. Сделана из упругого ПВХ и может выдержать довольно большое количество украшений.
                                <br/> Производство: Россия.
                            </div>
                        </div>
                    </article>

                    <article class="order__item" data-item="4">
                        <div class="order__imgblock">
                            <a href="src/img/e4/headImg.jpg" data-fancybox="images4" class="order__img">
                                <img src="src/img/e4/headImg.jpg" alt="1">
                            </a>
                            <div class="order__smallimgs">
                                <a href="src/img/e4/img2.jpg" data-fancybox="images4" class="order__smallimg">
                                    <img src="src/img/e4/img2.jpg" alt="">
                                </a>
                                <a href="src/img/e4/img3.jpg" data-fancybox="images4" class="order__smallimg">
                                    <img src="src/img/e4/img3.jpg" alt="">
                                </a>
                                <a href="src/img/e4/img4.jpg" data-fancybox="images4" class="order__smallimg">
                                    <img src="src/img/e4/img4.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="order__info">
                            <h3 class="order__subtitle">Лесная ёлочка</h3>
                            <div class="order__text">
                                <div class="styled-selected green-selected rounded">
                                    <select name="" id="" class="order__select">
                                        <option value="120" class="order__option" data-orderold="3300₽" data-ordernew="2300₽">120</option>
                                        <option value="150" class="order__option" data-orderold="3900₽" data-ordernew="2900₽">150</option>
                                        <option value="180" class="order__option" data-orderold="5700₽" data-ordernew="3700₽">180</option>
                                        <option value="210" class="order__option" data-orderold="7400₽" data-ordernew="5400₽">210</option>
                                        <option value="300" class="order__option" data-orderold="16500₽" data-ordernew="13500₽">300</option>
                                    </select>
                                </div>
                            </div>
                            <div class="order__price">
                                <span class="order__old">3300₽</span>
                                <span class="order__new">2300₽</span>
                            </div>
                            <a class="order__buy orderBtn">Заказать</a>
                            <div class="order__description">
                                <div class="order__titledescription">Описание:</div>
                                Очень красивая ель из хвои глубокого темно-зеленого цвета. Шишки и ягодки равномерно
                                распределены по веткам, как будто ее только что забрали из леса.
                                <br/> Производство: Россия.
                            </div>
                        </div>
                    </article>

                    <article class="order__item" data-item="5">
                        <div class="order__imgblock">
                            <a href="src/img/e5/headImg.jpg" data-fancybox="images5" class="order__img">
                                <img src="src/img/e5/headImg.jpg" alt="1">
                            </a>
                            <div class="order__smallimgs">
                                <a href="src/img/e5/img2.jpg" data-fancybox="images5" class="order__smallimg">
                                    <img src="src/img/e5/img2.jpg" alt="">
                                </a>
                                <a href="src/img/e5/img3.jpg" data-fancybox="images5" class="order__smallimg">
                                    <img src="src/img/e5/img3.jpg" alt="">
                                </a>
                                <a href="src/img/e5/img2.jpg" data-fancybox="images5" class="order__smallimg">
                                    <img src="src/img/e5/img2.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="order__info">
                            <h3 class="order__subtitle">Новогодняя сказка</h3>
                            <div class="order__text">
                                <div class="styled-selected green-selected rounded">
                                    <select name="" id="" class="order__select">
                                        <option value="120" class="order__option"data-orderold="2100₽" data-ordernew="1100₽">120</option>
                                        <option value="150" class="order__option"data-orderold="3000₽" data-ordernew="4000₽">150</option>
                                        <option value="180" class="order__option"data-orderold="5500₽" data-ordernew="3500₽">180</option>
                                        <option value="210" class="order__option"data-orderold="7000₽" data-ordernew="5000₽">210</option>
                                        <option value="240" class="order__option"data-orderold="10000₽" data-ordernew="7000₽">240</option>
                                    </select>
                                </div>
                            </div>
                            <div class="order__price">
                                <span class="order__old">2100₽</span>
                                <span class="order__new">1100₽</span>
                            </div>
                            <a class="order__buy orderBtn">Заказать</a>
                            <div class="order__description">
                                <div class="order__titledescription">Описание:</div>
                                Благодаря своей форме и заснеженным веточкам, она смотрится
                                как настоящая лесная елка.<br/> Производство: Россия.
                            </div>
                        </div>
                    </article>

                    <article class="order__item" data-item="6">
                        <div class="order__imgblock">
                            <a href="src/img/e6/headImg.jpg" data-fancybox="images6" class="order__img">
                                <img src="src/img/e6/headImg.jpg" alt="1">
                            </a>
                            <div class="order__smallimgs">
                                <a href="src/img/e6/img2.jpg" data-fancybox="images6" class="order__smallimg">
                                    <img src="src/img/e6/img2.jpg" alt="">
                                </a>
                                <a href="src/img/e6/img3.jpg" data-fancybox="images6" class="order__smallimg">
                                    <img src="src/img/e6/img3.jpg" alt="">
                                </a>
                                <a href="src/img/e6/img4.jpg" data-fancybox="images6" class="order__smallimg">
                                    <img src="src/img/e6/img4.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="order__info">
                            <h3 class="order__subtitle">Таёжная краса</h3>
                            <div class="order__text">
                                <div class="styled-selected green-selected rounded">
                                    <select name="" id="" class="order__select">
                                        <option value="180" class="order__option" data-orderold="12000₽" data-ordernew="10000₽">180</option>
                                        <option value="210" class="order__option" data-orderold="16000₽" data-ordernew="13000₽">210</option>
                                        <option value="240" class="order__option" data-orderold="20000₽" data-ordernew="16000₽">240</option>
                                        <option value="300" class="order__option" data-orderold="37000₽" data-ordernew="32000₽">300</option>
                                    </select>
                                </div>
                            </div>
                            <div class="order__price">
                                <span class="order__old">12000₽</span>
                                <span class="order__new">10000₽</span>
                            </div>
                            <a class="order__buy orderBtn">Заказать</a>
                            <div class="order__description">
                                <div class="order__titledescription">Описание:</div>
                                Дизайнерская ель премиум класса с очень элегантной густой заснеженностью,
                                напоминает настоящую сосну после снегопада.<br/> Производство: Россия.
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="present">
            <div class="container">
                <h2 class="present__title">Три причины заказать именно у нас:</h2>
                <div class="present__items">
                    <div class="present__item">
                        <div class="present__img"><img src="src/img/gir.jpg" alt="1"></div>
                        <div class="present__subtitle">Оригинальная гирлянда в подарок</div>
                    </div>

                    <div class="present__item">
                        <div class="present__img"><img src="src/img/pod.jpg" alt="2"></div>
                        <div class="present__subtitle">Прочная подставка для Вашей ёлки</div>
                    </div>

                    <div class="present__item">
                        <div class="present__img"><img src="src/img/free-deliv.png" alt="3"></div>
                        <div class="present__subtitle">Доставка по Челябинску БЕСПЛАТНО</div>
                    </div>
                </div>
                <div class="present__bottom">
                    <div class="menu-item"><a href="#orderProduct" class="header__order _present">Заказать Ёлку</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="advantages">
            <div class="header__opacity">
                <div class="container">
                    <h2 class="advantages__title" id="ourPluses">Преимущества</h2>
                    <div class="advantages__items">
                        <div class="advantages__item"><i class="fas fa-award"></i><span class="advantages__span">Качественный Гипоаллергенный ПВХ </span>
                        </div>
                        <div class="advantages__item"><i class="fas fa-award"></i><span class="advantages__span">Материал без запаха</span>
                        </div>
                        <div class="advantages__item"><i class="fas fa-award"></i><span class="advantages__span">Легко Собирается</span>
                        </div>
                        <div class="advantages__item"><i class="fas fa-award"></i><span class="advantages__span">Подставка в комплекте</span>
                        </div>
                        <div class="advantages__item"><i class="fas fa-award"></i><span class="advantages__span">НЕ горит</span>
                        </div>
                        <div class="advantages__item"><i class="fas fa-award"></i><span class="advantages__span">НЕ осыпается</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="delivery">
            <div class="container">
                <h2 class="delivery__title" id="delivery">Доставка и оплата</h2>
                <div class="delivery__items">
                    <div class="delivery__item">
                        <div class="delivery__img">
                            <i class="fas fa-truck-moving"></i>
                        </div>
                        <div class="delivery__subtitle">Быстрая и бесплатная доставка по Челябинску</div>
                        <div class="delivery__text">Бесплатная доставка по городу в течение суток! Доставка в
                            область осуществляется за отдельную плату!
                        </div>
                    </div>

                    <div class="delivery__item">
                        <div class="delivery__img">
                            <i class="fas fa-map-marked-alt"></i>
                        </div>
                        <div class="delivery__subtitle">Пункт самовывоза в Челябинске</div>
                        <div class="delivery__text">Вы можете забрать Вашу ёлку по Адресу: г.Челябинск улица Марины Расковой 6</div>
                    </div>

                    <div class="delivery__item">
                        <div class="delivery__img">
                            <i class="fas fa-money-bill-alt"></i>
                        </div>
                        <div class="delivery__subtitle">Оплата любым удобным способом</div>
                        <div class="delivery__text">Вы можете оплатить покупку любым удобным способом:
                            перевод на банковскую карту, наличными курьеру
                        </div>
                    </div>

                    <div class="delivery__item">
                        <div class="delivery__img">
                            <i class="fas fa-tree"></i> + <i class="fas fa-tree"></i>
                        </div>
                        <div class="delivery__subtitle">Купи больше, получи скидку</div>
                        <div class="delivery__text">При покупке 2-ух и более Елок получи скидку 7%</div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <footer class="footer">
        <div class="footer__top">
            <div class="container">
                <div class="footer__items">
                    <div class="footer__item">
                        <div class="footer__subtitle" id="contact">Контакты</div>
                        <ul class="footer__ul">
                            <li class="footer__li"><a href="tel:+79823029303" class="footer__link"><i
                                            class="fas fa-mobile-alt"></i>+7(982)-302-93-03</a></li>
                            <li class="footer__li"><a href="mailto:nikolai_lazarev-@mail.ru" class="footer__link"><i
                                            class="fas fa-envelope-open"></i>kupielochku@mail.ru</a></li>
                        </ul>
                    </div>

                    <div class="footer__item">
                        <div class="footer__subtitle">Самовывоз</div>
                        <ul class="footer__ul">
                            <li class="footer__li"><a class="footer__link"><i class="fas fa-map-marker-alt"></i>
                                    г.Челябинск<br/> Марины Расковой 6</a>
                            </li>

                        </ul>
                    </div>

                    <div class="footer__item">
                        <div class="footer__subtitle">мы всегда на связи</div>
                        <ul class="footer__ul _social">
                            <li class="footer__li"><a href="tg://resolve?domain=sandali74" class="footer__link"><i class="fab fa-telegram-plane"></i></a>
                            </li>
                            <li class="footer__li"><a href="whatsapp://send?phone=+79823029303" class="footer__link"><i class="fab fa-whatsapp"></i></a>
                            </li>
                            <li class="footer__li"><a href="viber://add?number=+79823029303" class="footer__link"><i class="fab fa-viber"></i></a></li>
                        </ul>
                    </div>

                    <div class="footer__item">
                        <ul class="footer__ul">
                            <li class="footer__li menu-item"><a href="#orderProduct" class="footer__link _order">Заказать
                                    Ёлку</a></li>
                            <li class="footer__li"><a class="footer__link _callback callBackBtn">Обратный звонок</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__bottom">
            <span class="footer__copy">© 2014-2018 КупиЕлку.рф  All rights RESERVED.</span>
        </div>
    </footer>
</div>

<div class="callback__windowBG" id="callbackWindow">
    <div class="callback-modal">
        <div class="modal-header">Мы вам обязательно перезвоним!</div>
        <span class="modal-close">&times;</span>

        <div class="modal-content">
            <form class="callback-form">
                <div class="callback-name"><input type="text" class="input-name" id="callBackName" placeholder="Ваше Имя"></div>
                <div class="callback-phone"><input type="text" class="input-phone" id="callBackPhone" PLACEHOLDER="Телефон"></div>
                <div class="callback-button"><input type="button" class="input-button" id="callBackBtn" value="Отправить"></div>
            </form>
        </div>
    </div>
</div>


<div class="order-window" id="orderWindow">
    <div class="order-modal">
        <div class="order-header">Заполните форму!</div>
        <span class="order-close">&times;</span>

        <div class="order-content">
            <form class="order-form">
                <div class="order-name"><input type="text" class="input-name" id="orderName" placeholder="ФИО">
                </div>
                <div class="order-phone"><input type="text" class="input-phone" id="orderPhone" PLACEHOLDER="Телефон">
                </div>
                <div class="order-email"><input type="mail" class="input-email" id="orderMail" PLACEHOLDER="Email">
                </div>
                <div class="order-qty"><input type="hidden" class="input-qty" id="orderQty" PLACEHOLDER="Количество"></div>
                <div class="order-price"><input type="hidden" class="input-price" id="orderItem" PLACEHOLDER="Количество"></div>
                <div class="order-comment"><textarea class="textarea-order" id="orderComment"
                                                     PLACEHOLDER="комментарий к заказу"></textarea></div>
                <div class="order-button"><input type="button" class="input-button" id="orderFormBtn" value="Отправить">
                </div>
            </form>
        </div>
    </div>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.2/dist/jquery.fancybox.min.js"></script>
<script src="src/js/main.js"></script>
</body>
</html>
