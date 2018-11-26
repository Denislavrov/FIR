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
                            <a href="http://placehold.it/800x400" data-fancybox="images1" class="order__img">
                                <img src="http://placehold.it/120x150" alt="1">
                            </a>
                            <div class="order__smallimgs">
                                <a href="http://placehold.it/600x500" data-fancybox="images1" class="order__smallimg">
                                    <img src="http://placehold.it/120x150" alt="">
                                </a>
                                <a href="http://placehold.it/300x300" data-fancybox="images1" class="order__smallimg">
                                    <img src="http://placehold.it/120x150" alt="">
                                </a>
                                <a href="http://placehold.it/300x300" data-fancybox="images1" class="order__smallimg">
                                    <img src="http://placehold.it/120x150" alt="">
                                </a>
                            </div>
                        </div>
                        <h3 class="order__subtitle">Ель Изумрудная</h3>
                        <div class="order__text">
                            <div class="styled-selected green-selected rounded">
                                <select name="" id="" class="order__select">
                                    <option value="120" class="order__option" data-orderold="1000" data-ordernew="999" selected>120
                                    </option>
                                    <option value="150" class="order__option" data-orderold="1300" data-ordernew="1100">150
                                    </option>
                                    <option value="180" class="order__option" data-orderold="1500" data-ordernew="1300">180
                                    </option>
                                    <option value="210" class="order__option" data-orderold="1700" data-ordernew="1400">210
                                    </option>
                                    <option value="240" class="order__option" data-orderold="1900" data-ordernew="1500">240
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="order__price active">
                            <span class="order__old">1300₽</span>
                            <span class="order__new">1999₽</span>
                        </div>
                        <a class="order__buy orderBtn">Заказать</a>
                    </article>

                    <article class="order__item"  data-item="2">
                        <div class="order__imgblock">
                            <a href="http://placehold.it/300x300" data-fancybox="images2" class="order__img">
                                <img src="http://placehold.it/120x150" alt="1">
                            </a>
                            <div class="order__smallimgs">
                                <a href="http://placehold.it/300x300" data-fancybox="images2" class="order__smallimg">
                                    <img src="http://placehold.it/120x150" alt="">
                                </a>
                                <a href="http://placehold.it/300x300" data-fancybox="images2" class="order__smallimg">
                                    <img src="http://placehold.it/120x150" alt="">
                                </a>
                                <a href="http://placehold.it/300x300" data-fancybox="images2" class="order__smallimg">
                                    <img src="http://placehold.it/120x150" alt="">
                                </a>
                            </div>
                        </div>
                        <h3 class="order__subtitle">Ель Белла</h3>
                        <div class="order__text">
                            <div class="styled-selected green-selected rounded">
                                <select name="" id="" class="order__select">
                                    <option value="60" class="order__option" data-orderold="1000" data-ordernew="999">60</option>
                                    <option value="90" class="order__option" data-orderold="1200" data-ordernew="1099">90</option>
                                    <option value="120" class="order__option" data-orderold="9090" data-ordernew="1233">120</option>
                                    <option value="150" class="order__option" data-orderold="1000" data-ordernew="999">150</option>
                                    <option value="180" class="order__option" data-orderold="1000" data-ordernew="999">180</option>
                                    <option value="210" class="order__option" data-orderold="1000" data-ordernew="999">210</option>
                                    <option value="240" class="order__option" data-orderold="1000" data-ordernew="999">240</option>
                                </select>
                            </div>
                        </div>
                        <div class="order__price">
                            <span class="order__old">1999 ₽</span>
                            <span class="order__new">1999 ₽</span>
                        </div>

                        <a class="order__buy orderBtn">Заказать</a>
                    </article>

                    <article class="order__item"  data-item="3">
                        <div class="order__imgblock">
                            <a href="http://placehold.it/300x300" data-fancybox="images3" class="order__img">
                                <img src="http://placehold.it/120x150" alt="1">
                            </a>
                            <div class="order__smallimgs">
                                <a href="http://placehold.it/300x300" data-fancybox="images3" class="order__smallimg">
                                    <img src="http://placehold.it/120x150" alt="">
                                </a>
                                <a href="http://placehold.it/300x300" data-fancybox="images3" class="order__smallimg">
                                    <img src="http://placehold.it/120x150" alt="">
                                </a>
                                <a href="http://placehold.it/300x300" data-fancybox="images3" class="order__smallimg">
                                    <img src="http://placehold.it/120x150" alt="">
                                </a>
                            </div>
                        </div>
                        <h3 class="order__subtitle">Ель Русская</h3>
                        <div class="order__text">
                            <div class="styled-selected green-selected rounded">
                                <select name="" id="" class="order__select">
                                    <option value="180" class="order__option" data-orderold="1000" data-ordernew="999">180</option>
                                    <option value="210" class="order__option" data-orderold="1200" data-ordernew="1099">210</option>
                                    <option value="240" class="order__option" data-orderold="9090" data-ordernew="1233">240</option>
                                    <option value="300" class="order__option" data-orderold="1000" data-ordernew="999">300</option>
                                </select>
                            </div>
                        </div>
                        <div class="order__price">
                            <span class="order__old">1999 ₽</span>
                            <span class="order__new">1999 ₽</span>
                        </div>
                        <a class="order__buy orderBtn">Заказать</a>
                    </article>

                    <article class="order__item"  data-item="4">
                        <div class="order__imgblock">
                            <a href="http://placehold.it/300x300" data-fancybox="images4" class="order__img">
                                <img src="http://placehold.it/120x150" alt="1">
                            </a>
                            <div class="order__smallimgs">
                                <a href="http://placehold.it/300x300" data-fancybox="images4" class="order__smallimg">
                                    <img src="http://placehold.it/120x150" alt="">
                                </a>
                                <a href="http://placehold.it/300x300" data-fancybox="images4" class="order__smallimg">
                                    <img src="http://placehold.it/120x150" alt="">
                                </a>
                                <a href="http://placehold.it/300x300" data-fancybox="images4" class="order__smallimg">
                                    <img src="http://placehold.it/120x150" alt="">
                                </a>
                            </div>
                        </div>
                        <h3 class="order__subtitle">Лесная ёлочка</h3>
                        <div class="order__text">
                            <div class="styled-selected green-selected rounded">
                                <select name="" id="" class="order__select">
                                    <option value="120" class="order__option" data-orderold="1000" data-ordernew="999">120</option>
                                    <option value="150" class="order__option" data-orderold="1200" data-ordernew="1099">150</option>
                                    <option value="180" class="order__option" data-orderold="9090" data-ordernew="1233">180</option>
                                    <option value="210" class="order__option" data-orderold="1000" data-ordernew="999">210</option>
                                    <option value="240" class="order__option" data-orderold="1000" data-ordernew="999">240</option>
                                    <option value="300" class="order__option" data-orderold="1000" data-ordernew="999">300</option>
                                </select>
                            </div>
                        </div>
                        <div class="order__price">
                            <span class="order__old">1999 ₽</span>
                            <span class="order__new">1999 ₽</span>
                        </div>
                        <a class="order__buy orderBtn">Заказать</a>
                    </article>

                    <article class="order__item"  data-item="5">
                        <div class="order__imgblock">
                            <a href="http://placehold.it/300x300" data-fancybox="images5" class="order__img">
                                <img src="http://placehold.it/120x150" alt="1">
                            </a>
                            <div class="order__smallimgs">
                                <a href="http://placehold.it/300x300" data-fancybox="images5" class="order__smallimg">
                                    <img src="http://placehold.it/120x150" alt="">
                                </a>
                                <a href="http://placehold.it/300x300" data-fancybox="images5" class="order__smallimg">
                                    <img src="http://placehold.it/120x150" alt="">
                                </a>
                                <a href="http://placehold.it/300x300" data-fancybox="images5" class="order__smallimg">
                                    <img src="http://placehold.it/120x150" alt="">
                                </a>
                            </div>
                        </div>
                        <h3 class="order__subtitle">Новогодняя сказка</h3>
                        <div class="order__text">
                            <div class="styled-selected green-selected rounded">
                                <select name="" id="" class="order__select">
                                    <option value="120" class="order__option"data-orderold="1000" data-ordernew="999">120</option>
                                    <option value="150" class="order__option"data-orderold="1200" data-ordernew="1099">150</option>
                                    <option value="180" class="order__option"data-orderold="9090" data-ordernew="1233">180</option>
                                    <option value="210" class="order__option"data-orderold="1000" data-ordernew="999">210</option>
                                    <option value="240" class="order__option"data-orderold="1000" data-ordernew="999">240</option>
                                </select>
                            </div>
                        </div>
                        <div class="order__price">
                            <span class="order__old">1999 ₽</span>
                            <span class="order__new">1999 ₽</span>
                        </div>
                        <a class="order__buy orderBtn">Заказать</a>
                    </article>

                    <article class="order__item"  data-item="6">
                        <div class="order__imgblock">
                            <a href="http://placehold.it/300x300" data-fancybox="images6" class="order__img">
                                <img src="http://placehold.it/120x150" alt="1">
                            </a>
                            <div class="order__smallimgs">
                                <a href="http://placehold.it/300x300" data-fancybox="images6" class="order__smallimg">
                                    <img src="http://placehold.it/120x150" alt="">
                                </a>
                                <a href="http://placehold.it/300x300" data-fancybox="images6" class="order__smallimg">
                                    <img src="http://placehold.it/120x150" alt="">
                                </a>
                                <a href="http://placehold.it/300x300" data-fancybox="images6" class="order__smallimg">
                                    <img src="http://placehold.it/120x150" alt="">
                                </a>
                            </div>
                        </div>
                        <h3 class="order__subtitle">Таёжная краса</h3>
                        <div class="order__text">
                            <div class="styled-selected green-selected rounded">
                                <select name="" id="" class="order__select">
                                    <option value="" class="order__option" data-orderold="1000" data-ordernew="999">180</option>
                                    <option value="" class="order__option" data-orderold="1200" data-ordernew="1099">210</option>
                                    <option value="" class="order__option" data-orderold="9090" data-ordernew="1233">240</option>
                                    <option value="" class="order__option" data-orderold="1000" data-ordernew="999">300</option>
                                </select>
                            </div>
                        </div>
                        <div class="order__price">
                            <span class="order__old">1999 ₽</span>
                            <span class="order__new">1999 ₽</span>
                        </div>
                        <a class="order__buy orderBtn">Заказать</a>
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
                        <div class="delivery__text">Вы можете забрать Вашу ёлку по Адресу: **********</div>
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
                            <li class="footer__li"><a href="mailto:123@mail.ru" class="footer__link"><i
                                            class="fas fa-envelope-open"></i>1223@mail.ru</a></li>
                        </ul>
                    </div>

                    <div class="footer__item">
                        <div class="footer__subtitle">Самовывоз</div>
                        <ul class="footer__ul">
                            <li class="footer__li"><a class="footer__link"><i class="fas fa-map-marker-alt"></i>Адрес*******</a>
                            </li>

                        </ul>
                    </div>

                    <div class="footer__item">
                        <div class="footer__subtitle">мы всегда на связи</div>
                        <ul class="footer__ul _social">
                            <li class="footer__li"><a href="" class="footer__link"><i class="fab fa-telegram-plane"></i></a>
                            </li>
                            <li class="footer__li"><a href="" class="footer__link"><i class="fab fa-whatsapp"></i></a>
                            </li>
                            <li class="footer__li"><a href="" class="footer__link"><i class="fab fa-viber"></i></a></li>
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
            <span class="footer__copy">© 2014-2018  All rights resevered.</span>
        </div>
    </footer>
</div>

<div class="callback__windowBG" id="callbackWindow">
    <div class="callback-modal">
        <div class="modal-header">Мы вам обязательно перезвоним!</div>
        <span class="modal-close">&times;</span>

        <div class="modal-content">
            <form action="#" class="callback-form">
                <div class="callback-name"><input type="text" class="input-name" placeholder="Ваше Имя"></div>
                <div class="callback-phone"><input type="text" class="input-phone" PLACEHOLDER="Телефон"></div>
                <div class="callback-button"><input type="submit" class="input-button" value="Отправить"></div>
            </form>
        </div>
    </div>
</div>


<div class="order-window" id="orderWindow">
    <div class="order-modal">
        <div class="order-header">Заполните форму!</div>
        <span class="order-close">&times;</span>

        <div class="order-content">
            <form action="#" class="order-form">
                <div class="order-name"><input type="text" class="input-name" id="orderName" placeholder="Ваше Имя">
                </div>
                <div class="order-phone"><input type="text" class="input-phone" id="orderPhone" PLACEHOLDER="Телефон">
                </div>
                <div class="order-email"><input type="mail" class="input-email" id="orderMail" PLACEHOLDER="Email">
                </div>
                <div class="order-qty"><input type="hidden" class="input-qty" id="orderQty" PLACEHOLDER="Количество"></div>
                <div class="order-price"><input type="hidden" class="input-price" id="orderPrice" PLACEHOLDER="Количество"></div>
                <div class="order-comment"><textarea class="textarea-order" id="orderComment"
                                                     PLACEHOLDER="комментарий к заказу"></textarea></div>
                <div class="order-button"><input type="submit" class="input-button" id="orderFormBtn" value="Отправить">
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
