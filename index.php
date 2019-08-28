<?php header('Content-Type: charset=utf-8'); ?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <title>Mu-Milk. Главная страница</title>
    <meta http-equiv="Content-type" content="text/html; charset= utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.maskedinput.js"></script>
    <script type="text/javascript" src="js/up-button.js"></script>

</head>

<body>

    <a href="#" class="scrollup"></a>

    <!-- Top-block -->

    <div class="top-block">

        <header>

            <div class="logo">
                <a href="/"><img src="images/logo.png" width="60%" alt="Mu-Milk"></a>
            </div>

            <nav class="main-menu">
                <ul>
                    <li><a href="#about-milk">О МОЛОКЕ</a></li>
                    <li><a href="#productions">ПРОДУЦКЦИЯ</a></li>
                    <li><a href="#delivery-block">ДОСТАВКА И ОПЛАТА</a></li>
                    <li><a href="#subscription">ПОДПИСКА</a></li>
                    <li><a href="#contacts">КОНТАКТЫ</a></li>
                    <li class="phone">8 (800) 777-14-14</li>
                </ul>
            </nav>

        </header>

        <div class="main-promo">

            <h2>Свежее фермерское молоко <br>
                <span class="green-text">100% натуральный стостав</span>
            </h2>

            <p class="small-text">Оформите подписку и получайте вкусные и полезные <br> завтраки каждый день со скидкой 10%
            </p>

            <button id="choose-production"><a href="#productions">Выбрать продукцию</a></button>

        </div>

    </div>

    <!-- About Milk -->

    <div class="about-milk">
        <a id="about-milk"></a>

        <h2 class="center-text">Почему наши молочные продукты<br>
            <span class="green-text">самые вкусные</span>
        </h2>

        <table class="why-we">
            <tr>

                <td>
                    <p class="title-text"><img src="images/checkbox.png" width="10%" alt="checkbox">Экологически чистый продукт
                    </p>
                    <p class="normal-text">
                        Наша ферма находиться в одном из самых экологически чистых районов Ленинградской области
                    </p>

                    <p class="title-text"><img src="images/checkbox.png" width="10%" alt="checkbox">Сделано с любовью
                    </p>
                    <p class="normal-text">Наши коровы самые счастливые! <br> Относимся к ним с любовью и<br> уважением, что, несомненно,<br> отражается на качестве вкуса</p>
                </td>

                <td>
                    <img src="images/happyCows.png" alt="Счастливые коровы">
                </td>

                <td>
                    <p class="title-text"> <img src="images/checkbox.png" width="10%" alt="checkbox"> Качество производства
                    </p>
                    <p class="normal-text">Проверка качества на каждом<br> этапе создания продукта с<br> помощью микробиологических
                        <br> анализов
                    </p>

                    <p class="title-text"><img src="images/checkbox.png" width="10%" alt="checkbox">Собственное производство
                    </p>
                    <p class="normal-text">Чтобы повысить качество и<br> снизить цену, мы построили<br> собственный завод и<br> лабораторию вблизи фермы</p>
                </td>

            </tr>
        </table>
    </div>

    <!-- Productions -->

    <?php include "includes/productions.php"?>


    <!-- Callback form -->

    <div id="modal">
        <form class="callBack" id="callbackForm"> <!-- method="post" action='includes/send_contacts.php' --> 
            <div class="callBack-left-decoration"></div>
            <div class="callBack-right-decoration"></div>
            <div class="circle"></div>
            <div class="callBack-inner">
                <h3>Давайте знакомиться</h3>
                <input type="text" placeholder="Ваше имя" id='callback-name' name='f[name]'>
                <input type="tel" placeholder="Номер" id='callback-number' name='f[number]'>
                <textarea placeholder="Дополнительная информация" rows="3" id='callback-comment' name='f[comment]'></textarea>
                <input type="submit" value="Отправить" id="close-callback-form">
            </div>
        </form>
    </div>

    <!-- Delivery and payment -->

    <section class="waveDelivery">
        <svg id="waveDelivery" data-name="waveDelivery" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1400 172">
            <path class="cls-1"
                d="M1400,5V177H0V99.37C38.91,60.92,170.35,8.22,532,100,941.22,203.87,1325.47,39.77,1400,5Z"
                transform="translate(0 -5)" /></svg>
    </section>

    <div class="delivery-and-payment" id="delivery-block">
        <h2>Доставка и оплата</h2>
        <p class="delivery-offer"><span class="pink-text">Бесплатная доставка</span> в пределах КАД от 1000 рублей</p>

        <img id="orange-arrow" src="images/orange arrow.png" width="10%" alt="Оранжевая стрелка">

        <table>
            <tr>
                <td>
                    <p class="title-text">ЗАКАЗ</p>
                    <p>В течение 15 минут наш менеджер перезвонит Вам для подтверждения заказа и уточнения деталей доставки
                    </p>
                </td>
                <td>
                    <p class="title-text">ОПЛАТА</p>
                    <p>Выберите любой удобный способ оплаты: безналичный расчет, оплата по карте, оплата наличными курьеру в день доставки
                    </p>
                </td>
                <td>
                    <p class="title-text">ДОСТАВКА</p>
                    <p>Заказывайте больше и не платите за доставку! Подробнее ознакомиться с тарифами по доставке Вы можете с помощью данной <a href="">карты</a></p>
                </td>
            </tr>
        </table>

        <img id="blue-arrow" src="images/blue arrow.png" width="10%" alt="Синяя стрелка">

    </div>

    <!-- Subscription -->

    <section>
        <svg id="waveFooter" data-name="waveFooter" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1400 172">
            <path class="cls-1"
                d="M1400,5V177H0V99.37C38.91,60.92,170.35,8.22,532,100,941.22,203.87,1325.47,39.77,1400,5Z"
                transform="translate(0 -5)" /></svg>
    </section>

    <section class="subscription">
        <a id="subscription"> </a>

        <h2 class="center-text">Свежее молоко на завтрак <span class="green-text">каждый день</span></h2>

        <table>
            <tr>

                <td class="center-text">
                    <img src="images/subscription.png" width=70% alt="Люди выбирают свежее молоко">
                </td>

                <td class="left-text">
                    <div class="line">
                    </div>
                    <p>Оформите подписку на завтраки <span class="pink-text">со скидкой 10% </span>на всю продукцию.</p>
                    <p>Наш курьер каждый день будет доставлять Вам вкусный и свежий завтрак из натуральных молочных продуктов. Нажмите «СДЕЛАТЬ ЗАКАЗ», и наш менеджер свяжется с Вами, для уточнения состава заказа и времени доставки.</p>
                    <button id="btn-prod">Сделать заказ</button>
                </td>

            </tr>
        </table>
    </section>



    <!-- Feedback -->

    <section class="waveDelivery">
        <svg id="waveDelivery" data-name="waveDelivery" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1400 172">
            <path class="cls-1"
                d="M1400,5V177H0V99.37C38.91,60.92,170.35,8.22,532,100,941.22,203.87,1325.47,39.77,1400,5Z"
                transform="translate(0 -5)" /></svg>
    </section>

    <table class="feedback">
        <tr>

            <td class="center-text">
                <img src="images/happyFamily2.png" width=70% alt="Счастливая семья">
            </td>

            <td class="left-text">
                <h2>Отзывы</h2>

                <div class="line">
                </div>

                <p class="bold-text">Отличное качество и вкус!</p>
                <p>Вкусный и полезный завтрак — залог продуктивного<br> дня, поэтому каждое утро мы начинаем с фермерских
                    <br> молочных продуктов. Доброжелательный курьер<br> каждый день без опозданий радует нас свежим
                    <br> творогом и молоком, а дети обожают йогурты и<br> ряженку. Лучшее начало дня!</p>

                <p id="feedback-author">Александр Семенов</p>
                <p id="feedback-profession">лучший папа</p>
            </td>

        </tr>
    </table>

    <section>
        <svg id="waveFooter" data-name="waveFooter" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1400 172">
            <path class="cls-1"
                d="M1400,5V177H0V99.37C38.91,60.92,170.35,8.22,532,100,941.22,203.87,1325.47,39.77,1400,5Z"
                transform="translate(0 -5)" /></svg>
    </section>

    <section class="contacts">
        <a id="contacts"> </a>

        <p class="map">
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Abb53df19be900b540a530281680282bc6121b4b026d7c97fa07a7d8eba226c3b&amp;width=800&amp;height=600&amp;lang=ru_RU&amp;scroll=true">
            </script>
        </p>

        <h2>Контакты</h2>

        <div class="line">
        </div>

        <p class="contact-type">АДРЕС</p>
        <p>Социалистическая улица 2/30 <br> Санкт-Петербург, Россия, 191002
        </p>

        <p class="contact-type">ТЕЛЕФОН</p>
        <p class="pink-text">800-877-14-14 <br> 8 812-877-14-13</p>

        <P class="contact-type">ПОЧТА</P>
        <p class="pink-text">moloko@ferma.ru</p>
    </section>


<div id="my_message"></div>
</body>

<script type="text/javascript" src="js/soft-transition.js"></script>
<script type="text/javascript" src="js/callback-form.js"></script>

</html>