$(document).ready(function () {


    const servicesSlider = new Swiper(".services__slider_wrapper", {
        slidesPerView: 4,
        spaceBetween: 30,
        navigation: {
            nextEl: '.services__slider_left',
            prevEl: '.services__slider_right',
        },
        breakpoints: {
            1280: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            768: {
                slidesPerView: 1,
                spaceBetween: 10
            }
        }
    });

    $('.faq__form_input input')
        .on("focusin", function () {
            $(this).parent().addClass("faq__form_input__focused");
        })
        .on("focusout", function () {
            let context = $(this).val();
            if (context.length < 1) {
                $(this).parent().removeClass("faq__form_input__focused");
            }
        });

    $('.faq__form_message input')
        .on("focusin", function () {
            $(this).parent().addClass("faq__form_input__focused");
        })
        .on("focusout", function () {
            let context = $(this).val();
            if (context.length < 1) {
                $(this).parent().removeClass("faq__form_input__focused");
            }
        });

    var service__images = $('.service__images'),
        service__content_wrapper = $('.service__content_wrapper');

    $('.service__content_title')
        .on("click", function (e) {
            e.preventDefault();

            let index = $(this).attr('index');

            service__images.find('.service__img_active').removeClass('service__img_active');
            service__content_wrapper.find('.active').removeClass('active');

            let img_list = service__images.find('.service__img'),
                content_list = service__content_wrapper.find('a');

            img_list.each(function () {
                if ($(this).attr('index') == index) {
                    $(this).addClass('service__img_active');
                }
            });

            $(this).parent().addClass('active');
        });
    $(".menu ul li a").hover(
        function () {
            $(this).parent(":not(:first-child)").addClass("active");
        },
        function () {
            $(this).parent(":not(:first-child)").removeClass("active");
        }
    );

    // mobile menu open system
    $('.menu__mobile_link')
        .on("click", function (e) {
            e.preventDefault();
            $('.menu__mobile').toggleClass('active');
        });

    $('.menu__mobile_close')
        .on("click", function (e) {
            e.preventDefault();
            $('.menu__mobile').toggleClass('active');
        });

    $(document).ready(function(){
        $("#menu").on("click","a", function (event) {
            //отменяем стандартную обработку нажатия по ссылке
            event.preventDefault();
            //забираем идентификатор бока с атрибута href
            var id  = $(this).attr('href'),
                //узнаем высоту от начала страницы до блока на который ссылается якорь
                top = $(id).offset().top;
            //анимируем переход на расстояние - top за 1500 мс
            $('body,html').animate({scrollTop: top}, 1500);
        });
    });

});