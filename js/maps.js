ymaps.ready(function () {

    var myMap = new ymaps.Map('map', {
        center: [53.885458,27.583296],
        zoom: 16,
        controls: []
    }, {
        searchControlProvider: 'yandex#search'
    }),

    // Создаём макет содержимого.
    MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
        '<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
    ),

    myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
        hintContent: '',
        balloonContent: ''
    }, {
        // Опции.
        // Необходимо указать данный тип макета.
        iconLayout: 'default#image',
        // Своё изображение иконки метки.
        iconImageHref: '/img/map-placemark.png',
        // Размеры метки.
        iconImageSize: [29, 46],
        // Смещение левого верхнего угла иконки относительно
        // её "ножки" (точки привязки).
        iconImageOffset: [-17, -38]
    });
    myMap.behaviors.disable('scrollZoom'); 
    myMap.behaviors.disable('drag');
    myMap.geoObjects
    .add(myPlacemark);

});