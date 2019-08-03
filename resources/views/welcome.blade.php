<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Metal</title>
        <link rel="stylesheet" href="/css/icons.css">
        <link rel="stylesheet" href="/css/swiper.min.css">
        <link rel="stylesheet" href="/css/style.css?v=1.1">
    </head>
    <body>
    <!-- header -->
    <header class="mainpage">
        <div class="wrapper">

            <a href="/" class="logo">
                <img src="/img/logo.png" alt="logo.png">
            </a>

            <nav class="menu">
                <ul>
                    <li class="active"><a href="#main">Главная</a></li>
                    <li><a href="#about">О нас</a></li>
                    <li><a href="#services">Услуги</a></li>
                    <li><a href="#service">Сервис</a></li>
                    <li><a href="#products">Продукция</a></li>
                    <li><a href="#contacts">Контакты</a></li>
                </ul>
            </nav>

            <a href="#" class="menu__mobile_link">
                <i class="icon-menu"></i>
            </a>

        </div>
    </header>

    <!-- mobile menu -->
    <ul class="menu__mobile" id="menu">
        <a href="#" class="menu__mobile_close"><i class="icon-cancel"></i></a>
        <li class="active"><a href="#main">Главная</a></li>
        <li><a href="#about">О нас</a></li>
        <li><a href="#services">Услуги</a></li>
        <li><a href="#service">Сервис</a></li>
        <li><a href="#products">Продукция</a></li>
        <li><a href="#contacts">Контакты</a></li>
    </ul>

    <!-- content -->
    <main class="mainpage">

        <div class="mainpage__top" id="main">
            <div class="mainpage__top_content">
                <p>Профессиональный монтаж и изготовление металлоконструкций</p>
                <a href="#contacts" class="white">Заказать расчет</a>
            </div>
            <div class="mainpage__top_scroll">
                <span class="mainpage__top_element"></span>
            </div>
        </div>

        <div class="mainpage__about" id="about">
            <div class="wrapper">
                <div class="about__text">
                    <p class="about__text_title">О нашей компании</p>
                    <p class="about__text_desc">Главным направлением деятельности предприятия является осуществление токарных и фрезерных работ как на ручных станках,так и на станках с ЧПУ, лазерная резка,зубофрезерные работы,шлифовка плоская и круглая, эрозионная обработка,термообработка и различные гальванические покрытия. Разработка и изготовление деталей приборов и оборудования как Вашим чертежам и эскизам, так и по образцу </p>
                </div>
                <ul class="about__list">
                    <li class="about__item">
                        <div class="about__item_img">
                            <img class="img__lazy" data-src="/img/advantages-1.png" alt="advantages-1.svg">
                        </div>
                        <p class="about__item_title">Качественное оборудование</p>
                        <p class="about__item_desc">Мы имеем высокоточное и автоматизированное станочное оборудование. </p>
                    </li>
                    <li class="about__item">
                        <div class="about__item_img">
                            <img class="img__lazy" data-src="/img/advantages-2.png" alt="advantages-2.svg">
                        </div>
                        <p class="about__item_title">Адекватная стоимость</p>
                        <p class="about__item_desc">Наша компания предоставляет сравнительно низкие рыночные цены на продукцию. </p>
                    </li>
                    <li class="about__item">
                        <div class="about__item_img">
                            <img class="img__lazy" data-src="/img/advantages-3.png" alt="advantages-3.svg" style="padding-right: 10px;">
                        </div>
                        <p class="about__item_title">Реальные сроки</p>
                        <p class="about__item_desc">Мы гарантируем своевременное и качественное выполнение работ.</p>
                    </li>
                </ul>
            </div>
        </div>

        <div class="mainpage__services" id="services">
            <div class="wrapper wrapper__p40 ">
                <p class="services__title">Наши услуги</p>
                <div class="services__slider">
                    <div class="services__slider_wrapper">
                        <div class="swiper-wrapper">
                            <div class="services__slide swiper-slide">
                                <div class="services__slide_wrapper">
                                    <div class="services__slide_img">
                                        <img class="img__lazy" data-src="/img/services-1.png" alt="services-1.png">
                                    </div>
                                    <p class="services__slide_title">Токарная обработка <br> на станках с ЧПУ</p>
                                    <a href="#contacts" class="white">ЗАКАЗАТЬ</a>
                                </div>
                            </div>
                            <div class="services__slide swiper-slide">
                                <div class="services__slide_wrapper">
                                    <div class="services__slide_img">
                                        <img class="img__lazy" data-src="/img/services-2.png" alt="services-2.png">
                                    </div>
                                    <p class="services__slide_title">Фрезерная обработка на станках с ЧПУ</p>
                                    <a href="#contacts" class="white">ЗАКАЗАТЬ</a>
                                </div>
                            </div>
                            <div class="services__slide swiper-slide">
                                <div class="services__slide_wrapper">
                                    <div class="services__slide_img">
                                        <img class="img__lazy" data-src="/img/services-3.png" alt="services-3.png">
                                    </div>
                                    <p class="services__slide_title">Лазерная резка металла</p>
                                    <br>
                                    <a href="#contacts" class="white">ЗАКАЗАТЬ</a>
                                </div>
                            </div>
                            <div class="services__slide swiper-slide">
                                <div class="services__slide_wrapper">
                                    <div class="services__slide_img">
                                        <img class="img__lazy" data-src="/img/services-4.png" alt="services-4.png">
                                    </div>
                                    <p class="services__slide_title">Эрозионная обработка</p>
                                    <br>
                                    <a href="#contacts" class="white">ЗАКАЗАТЬ</a>
                                </div>
                            </div>
                            <div class="services__slide swiper-slide">
                                <div class="services__slide_wrapper">
                                    <div class="services__slide_img">
                                        <img class="img__lazy" data-src="/img/services-6.jpg" alt="services-6.png">
                                    </div>
                                    <p class="services__slide_title">Штамповка, окраска, сварка деталей</p>
                                    <a href="#contacts" class="white">ЗАКАЗАТЬ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="services__slider_left"><i class="icon-left-open-big"></i></div>
                    <div class="services__slider_right"><i class="icon-right-open-big"></i></div>
                </div>

            </div>
        </div>

        <div class="mainpage__service" id="service">
            <div class="wrapper">
                <p class="service__title">Наш сервис</p>
                <div class="service__wrapper">
                    <div class="service__images">
                        <div class="service__img service__img_active" index="0"><img src="/img/services-bg.png" alt="services-bg.jpg"></div>
                        <div class="service__img" index="1"><img src="/img/service-2.jpg" alt="service-2.jpg"></div>
                        <div class="service__img" index="2"><img src="/img/service-3.jpg" alt="service-3.jpg"></div>
                        <div class="service__img" index="3"><img src="/img/service-4.jpg" alt="service-4.jpg"></div>
                        <div class="service__img" index="4"><img src="/img/service-5.jpg" alt="service-5.jpg"></div>
                    </div>
                    <div class="service__content">
                        <ul class="service__content_wrapper">
                            <li class="service__content_item active">
                                <a href="#" class="service__content_title" index="0">Лазерная резка металла</a>
                                <p class="service__content_desc">Резка металла с помощью интенсивного лазерного луча по металлу. Создает детали любой формы и высокой точности без деформации материала, с гладкими кромками,
                                    не требующими дополнительной обработки</p>
                            </li>
                            <li class="service__content_item">
                                <a href="#" class="service__content_title" index="1">Штамповка, гибка, сварка деталей</a>
                                <p class="service__content_desc">Координатно-пробивной пресс позволяет получать из листа металла практически любые детали. Раскрой листа при помощи координатной пробивки металла применяется для производства корпусных деталей, листовых деталей механизмов, крепежных пластин, кронштейнов.</p>
                            </li>
                            <li class="service__content_item">
                                <a href="#" class="service__content_title" index="2">Токарная обработка деталей</a>
                                <p class="service__content_desc">Токарная обработка — это механическая обработка для придания необходимых размеров и формы резанием наружных и внутренних поверхностей вращения, в том числе цилиндрических и конических на токарных станках.</p>
                            </li>
                            <li class="service__content_item">
                                <a href="#" class="service__content_title" index="3">Фрезерная обработка деталей</a>
                                <p class="service__content_desc">Принцип работы фрезы заключается в совершении вращательных движений, двигаясь в направлении подачи станка, она срезает слой металла, который подлежит удалению. На станке можно вытачивать канавки, делать обработку различных плоскостей, растачивать отверстия в деталях из цветных металлов, чугуна, стали.</p>
                            </li>
                            <li class="service__content_item">
                                <a href="#" class="service__content_title" index="4">Эрозионная обработка</a>
                                <p class="service__content_desc">Электроэрозионная обработка – способ изменения формы, размеров, свойств поверхности, который заключается в воздействии электрического разряда на заготовку при использовании электрода. Применяется для изменения размеров металлических изделий - для получения отверстий различной формы, фасонных полостей, профильных канавок
                                    и пазов в деталях из твердых сплавов, для упрочнения инструмента, резки и др.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="mainpage__products" id="products">
            <div class="wrapper">
                <p class="products__title">Продукция</p>

                <div class="products__wrapper">

                    <ul class="products__list">
                        <li class="products__item">Фланцы</li>
                        <li class="products__item">Рукоятки</li>
                        <li class="products__item">Корпуса объективов</li>
                        <li class="products__item">Отражатели</li>
                        <li class="products__item">Корпусные  изделия</li>
                        <li class="products__item">Корпус модуля центровки</li>
                        <li class="products__item">Переходники</li>
                        <li class="products__item">Крышки</li>
                        <li class="products__item">Кронштейны</li>
                        <li class="products__item">Корпуса</li>
                        <li class="products__item">Корпус модуля</li>
                        <li class="products__item">Клеммы</li>
                        <li class="products__item">Держатели системы для переливания (капельницы) </li>
                        <li class="products__item">Кронштейны  крепления прибора ночного видения </li>
                    </ul>

                    <div class="products__images">
                        <img class="img__lazy" data-src="/img/products-1.png" alt="products-1.png">
                        <img class="img__lazy" data-src="/img/products-2.png" alt="products-2.png">
                        <img class="img__lazy" data-src="/img/products-3.png" alt="products-3.png">
                        <img class="img__lazy" data-src="/img/products-4.png" alt="products-4.png">
                        <img class="img__lazy" data-src="/img/products-5.png" alt="products-5.png">
                    </div>

                </div>

                <a href="#contacts" class="white">ЗАКАЗАТЬ</a>

            </div>
        </div>

        <div class="mainpage__faq" id="contacts">
            <div class="wrapper__w100">
                <div class="wrapper">
                    <p class="faq__title">Остались вопросы?</p>
                    <p class="faq__title_sub">Закажите звонок нашего консультанта!</p>
                    @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                        @elseif (Session::has('error'))
                        <div class="alert alert-error">
                            {{ Session::get('error') }}
                        </div>
                    @endif
                    <form action="{{ url('/contact') }}" id="send-message" class="faq__form" method="POST" autocomplete="off" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <label for="name" class="faq__form_input">
                            <input type="text" name="name" id="name">
                            <span>Ваше имя</span>
                        </label>
                        <label for="email" class="faq__form_input">
                            <input type="email" name="email" id="email">
                            <span>Ваш E-mail</span>
                        </label>
                        <label for="phone" class="faq__form_input">
                            <input type="text" name="phone" id="phone">
                            <span>Ваш телефон</span>
                        </label>
                        <label for="body" class="faq__form_message">
                            <input type="text" name="body" id="body">
                            <span>Ваше Сообщение</span>
                        </label>
                        <label for="document" class="faq__form_message image">
                            <input type="file" class="custom-file-input" name="document" id="document">
                        </label>
                        <button type="submit" class="white">Заказать консультацию</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="mainpage__map">
            <div class="wrapper">
                <div class="map__wrapper" id="map"></div>
            </div>
        </div>

    </main>
    <!-- footer -->
    <footer>

        <div class="wrapper__w100">
            <div class="wrapper">
                <div class="footer__wrapper">
                    <a href="/" class="logo">
                        <img src="/img/logo.png" alt="logo.png">
                    </a>
                    <div class="footer__social">
                        <ul class="footer__social_list">
                            <li class="footer__social_item"><a href="#"><i class="icon-facebook"></i></a></li>
                            <li class="footer__social_item"><a href="#"><i class="icon-google"></i></a></li>
                            <li class="footer__social_item"><a href="#"><i class="icon-youtube"></i></a></li>
                            <li class="footer__social_item"><a href="#"><i class="icon-linkedin"></i></a></li>
                        </ul>
                        <p class="footer__title">© 2019. Все права защищены</p>
                    </div>
                    <div class="footer__contacts">
                        <a href="tel:+375296605552" class="footer__phone">+375 (29) 660-55-52</a>
                        <a href="#" class="footer__address">Партизанский проспект<br> 2/4, ком. 21, г. Минск</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="/js/lazy.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="/js/swiper.min.js"></script>
    <script src="/js/script.js"></script>
    <script await src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
    <script defer src="/js/maps.js"></script>
    </body>
</html>
