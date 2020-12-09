const Selectors = [
    //Поля модалки добавлени
    'number_invoice',
    'seller',
    'item_name',
    'weight',
    'volume',
    'item_coast',
    'deliver_coast_to_RUSSIA',
    'deliver_coast_to_HOME',
    'status_of_payment',
    'data_shipping_from_CHINA',
    'data_delivery_to_RUSSIA',
    'type_of_shipping',
    'stataus_delivery',
    'name_of_FILE',
    //Поля модалки редактирования
    'number_invoice_EDIT',
    'seller_EDIT',
    'item_name_EDIT',
    'weight_EDIT',
    'volume_EDIT',
    'item_coast_EDIT',
    'deliver_coast_to_RUSSIA_EDIT',
    'deliver_coast_to_HOME_EDIT',
    'status_of_payment_EDIT',
    'data_shipping_from_CHINA_EDIT',
    'data_delivery_to_RUSSIA_EDIT',
    'type_of_shipping_EDIT',
    'stataus_delivery_EDIT',
    'name_of_FILE_EDIT',

    'collection',
    'layout_Swiper',

    ///// Главная страница - кнопки:
    'btn_open_EDIT_INVOICE_name',
    'btn_add_NEW_INVOICE',

    //// Модальное окно добавления новой накладной:
    'modal_add_NEW_INVOICE',

    ///// Страница "Добавления накладной - кнопки:
    'btn_save_NEW_INVOICE',
    'btn_close_NEW_INVOICE',

    ///// Страница "Редактирование накладной" - кнопки:
    'btn_close_EDIT_INVOICE',
    'btn_save_EDIT_INVOICE',
    'btn_remove_EDIT_INVOICE',

    //// Модальное окно редактирования накладной:
    'modal_add_EDIT_INVOICE',

    'btn_add_FILE',
];

// Переменные
const El = {};
const List = [];
const arr_images = [];
let collection_images = [];

//======ФУНКЦИИ КНОПОК==========

// Открытие модального окна добавления накладной
const open_NEW_INVOICE = () => {
    El.modal_add_NEW_INVOICE.classList.add("show");  // добавляем класс "show"
    El.number_invoice.value = ""; // очищаем все поля
    El.seller.value = "";
    El.item_name.value = "";
    El.weight.value = "";
    El.volume.value = "";
    El.item_coast.value = "";
    El.deliver_coast_to_RUSSIA.value = "";
    El.deliver_coast_to_HOME.value = "";
    El.status_of_payment.value = "";
    El.data_shipping_from_CHINA.value = "";
    El.data_delivery_to_RUSSIA.value = "";
    El.type_of_shipping.value = "";
    El.stataus_delivery.value = "";
};
// Закрытие модального окна добавления накладной
const close_NEW_INVOICE = () => {
    El.modal_add_NEW_INVOICE.classList.remove("show");
};
// Открытие открытия модального окна редактирования накладной
const open_EDIT_INVOICE = () => {
    El.modal_add_EDIT_INVOICE.classList.add("show");
};
// Закрытия модального окна редактирования накладной
const close_EDIT_INVOICE = () => {
    El.modal_add_EDIT_INVOICE.classList.remove("show");
};
const save_EDIT_INVOICE = () => {
};


const save_NEW_INVOICE = () => {
    var form_data = new FormData();
    form_data.append('number_invoice', El.number_invoice.value);
    form_data.append('seller', El.seller.value);
    form_data.append('item_name', El.item_name.value);
    form_data.append('weight', El.weight.value);
    form_data.append('volume', El.volume.value);
    form_data.append('item_coast', El.item_coast.value);
    form_data.append('deliver_coast_to_RUSSIA', El.deliver_coast_to_RUSSIA.value);
    form_data.append('deliver_coast_to_HOME', El.deliver_coast_to_HOME.value);
    form_data.append('status_of_payment', El.status_of_payment.value);
    form_data.append('data_shipping_from_CHINA', El.data_shipping_from_CHINA.value);
    form_data.append('data_delivery_to_RUSSIA', El.data_delivery_to_RUSSIA.value);
    form_data.append('type_of_shipping', El.type_of_shipping.value);
    form_data.append('stataus_delivery', El.stataus_delivery.value);

    //Отправляем данные на PHP обработчик
    $.ajax({
        type: "POST",
        url: "/lr-studio/php/download_NEWinvoice.php",
        data: form_data,
        cache: false,
        contentType: false,
        processData: false,
        success: function (data) {// в случае успешного завершения
            close_NEW_INVOICE();
            render(render_images);
            // getLastImage()
            console.log("Завершилось успешно"); // выведем в консоли успех
            console.log("Mysql: добавена запись " + data +  " ID_ROW"); // и что в ответе получили, если там что-то есть - то ЧТО "ECHO"
        },
        error: function (data) { // в случае провала
            console.log("Завершилось с ошибкой"); // сообщение об ошибке
            console.log(data); // и данные по ошибке в том числе
        }
    });
}

//===========ИНИЦИАЛИЗАЦИЯ КНОПОК ПО СЕЛЕКТТОРАМ=======
Selectors.forEach((elem) => {
    El[elem] = document.querySelector(`.${elem}`);
});

El.btn_add_NEW_INVOICE.onclick = open_NEW_INVOICE; // Конпка "Добавить накладную"
El.btn_save_NEW_INVOICE.onclick = save_NEW_INVOICE; // Конпка "Добавить" в модалке
El.btn_close_NEW_INVOICE.onclick = close_NEW_INVOICE; // Конпка "Крестик" в модалке добавления
El.btn_close_EDIT_INVOICE.onclick = close_EDIT_INVOICE; // Конпка "Крестик" в модалке редактировнаия
El.btn_save_EDIT_INVOICE.onclick = save_EDIT_INVOICE;




//===========Возврат HTML строки с данными=======
const getLayout = (data, index) => {
    return `
            <tr text_row="${data.ID_ROW}">
                <td class="btn_open_EDIT_INVOICE_name" data-label="№ накладной:" scope="row">${data.number_invoice}</td>
                <td class="btn_open_EDIT_INVOICE" data-label="Поставщик:">${data.seller}</td>
                <td class="btn_open_EDIT_INVOICE" data-label="Товар:">${data.item_name}</td>
                <td class="btn_open_EDIT_INVOICE hide" data-label="Вес:" >${data.weight}</td>
                <td class="btn_open_EDIT_INVOICE hide" data-label="Объем:" >${data.volume}</td>
                <td class="btn_open_EDIT_INVOICE hide" data-label="Цена:" >${data.item_coast} $</td>
                <td class="btn_open_EDIT_INVOICE hide" data-label="Доставка по РФ:" >${data.data_shipping_from_CHINA} $</td>
                <td class="btn_open_EDIT_INVOICE hide" data-label="Доставка до склада:" >${data.deliver_coast_to_HOME} $</td>
                <td class="btn_open_EDIT_INVOICE bold hide" data-label="Итого:" >30 800 $</td>
                <td class="btn_open_EDIT_INVOICE green" data-label="Статус оплаты:" ><span class="green">${data.status_of_payment}</span></td>
                <td class="btn_open_EDIT_INVOICE" data-label="Дата отправки:">${data.data_shipping_from_CHINA}</td>
                <td class="btn_open_EDIT_INVOICE hide" data-label="Дней в пути:" >10</td>
                <td class="btn_open_EDIT_INVOICE" data-label="Дата прибытия:">${data.data_delivery_to_RUSSIA} <span class="hide gray">(10 дней)</span></td>
                <td class="btn_open_EDIT_INVOICE hide" data-label="Вид доставки:" ><img src="css/images/air.svg"></td>
                <td class="btn_open_EDIT_INVOICE delivered bold" data-label="Статус доставки:"><span class="green">Доставлен</span></td>
                <td class="open"><span>Открыть<img src="css/images/open.svg"></span></td>
            </tr>
            <tr image_row="${data.ID_ROW}">
                <td colspan="15" class="tableico">
                    <form method="POST" action="/lr-studio/download_image.php" enctype="multipart/form-data">
                        <input class="img_after_this" type="hidden" name="action" value="true">
                        <input row="" name="file" class="input_image" type="file" id="input__file${index}" multiple="multiple" accept=".txt,image/*" style="overflow: hidden; display: none">
                        <label for="input__file${index}" class="add_button_img btn_add_FILE" ></label>
                    </form>
                </td>
            </tr>
            <!-- Swiper -->
                <div class="swiper-container gallery-top gallery-top${index}">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" style="background-image:url(https://cache.desktopnexus.com/thumbseg/1857/1857538-bigthumbnail.jpg)"></div>
                        <div class="swiper-slide" style="background-image:url(https://poster.nicefon.ru/2016_07/24/350x220/122696a0d9e070c7cadbef.jpg)"></div>
                        <div class="swiper-slide" style="background-image:url(https://sibirskytrakt.ru/wp-content/uploads/2017/08/17.jpg)"></div>
                        <div class="swiper-slide" style="background-image:url(https://thejigsawpuzzles.com/img-puzzle-6391678-400/Mountain-lake)"></div>
                        <div class="swiper-slide" style="background-image:url(http://vanguem.ru/wp-content/uploads/2015/05/korgi-na-trave.jpg)"></div>
                        <div class="swiper-slide" style="background-image:url(https://i.pinimg.com/280x280_RS/75/46/f1/7546f1a29086b6dd81a95ad8cc6770fd.jpg)"></div>
                        <div class="swiper-slide" style="background-image:url(https://i.pinimg.com/236x/68/d0/e0/68d0e06eca61224ba0da0185750ce0c0.jpg)"></div>
                        <div class="swiper-slide" style="background-image:url(https://pitomec.guru/wp-content/uploads/2018/06/alyaskinskij-malamut-harakteristika-porody-6.jpg)"></div>
                        <div class="swiper-slide" style="background-image:url(https://img2.goodfon.ru/original/320x240/4/a6/sobaka-pes-drug-poroda.jpg)"></div>
                        <div class="swiper-slide" style="background-image:url(https://www.anypics.ru/mini/201405/76469.jpg)"></div>
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next swiper-button-white"></div>
                    <div class="swiper-button-prev swiper-button-white"></div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
                <div class="swiper-container gallery-thumbs gallery-thumbs${index}">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" style="background-image:url(https://cache.desktopnexus.com/thumbseg/1857/1857538-bigthumbnail.jpg)"></div>
                        <div class="swiper-slide" style="background-image:url(https://poster.nicefon.ru/2016_07/24/350x220/122696a0d9e070c7cadbef.jpg)"></div>
                        <div class="swiper-slide" style="background-image:url(https://sibirskytrakt.ru/wp-content/uploads/2017/08/17.jpg)"></div>
                        <div class="swiper-slide" style="background-image:url(https://thejigsawpuzzles.com/img-puzzle-6391678-400/Mountain-lake)"></div>
                        <div class="swiper-slide" style="background-image:url(http://vanguem.ru/wp-content/uploads/2015/05/korgi-na-trave.jpg)"></div>
                        <div class="swiper-slide" style="background-image:url(https://i.pinimg.com/280x280_RS/75/46/f1/7546f1a29086b6dd81a95ad8cc6770fd.jpg)"></div>
                        <div class="swiper-slide" style="background-image:url(https://i.pinimg.com/236x/68/d0/e0/68d0e06eca61224ba0da0185750ce0c0.jpg)"></div>
                        <div class="swiper-slide" style="background-image:url(https://pitomec.guru/wp-content/uploads/2018/06/alyaskinskij-malamut-harakteristika-porody-6.jpg)"></div>
                        <div class="swiper-slide" style="background-image:url(https://img2.goodfon.ru/original/320x240/4/a6/sobaka-pes-drug-poroda.jpg)"></div>
                        <div class="swiper-slide" style="background-image:url(https://www.anypics.ru/mini/201405/76469.jpg)"></div>
                    </div>
                </div>
                <!-- End of Swiper -->
                `;
}

function layout_Swiper(index) {
    return `<!-- Swiper -->
                <div class="swiper-container gallery-top gallery-top${index}">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" style="background-image:url(https://cache.desktopnexus.com/thumbseg/1857/1857538-bigthumbnail.jpg)"></div>
                        <div class="swiper-slide" style="background-image:url(https://poster.nicefon.ru/2016_07/24/350x220/122696a0d9e070c7cadbef.jpg)"></div>
                        <div class="swiper-slide" style="background-image:url(https://sibirskytrakt.ru/wp-content/uploads/2017/08/17.jpg)"></div>
                        <div class="swiper-slide" style="background-image:url(https://thejigsawpuzzles.com/img-puzzle-6391678-400/Mountain-lake)"></div>
                        <div class="swiper-slide" style="background-image:url(http://vanguem.ru/wp-content/uploads/2015/05/korgi-na-trave.jpg)"></div>
                        <div class="swiper-slide" style="background-image:url(https://i.pinimg.com/280x280_RS/75/46/f1/7546f1a29086b6dd81a95ad8cc6770fd.jpg)"></div>
                        <div class="swiper-slide" style="background-image:url(https://i.pinimg.com/236x/68/d0/e0/68d0e06eca61224ba0da0185750ce0c0.jpg)"></div>
                        <div class="swiper-slide" style="background-image:url(https://pitomec.guru/wp-content/uploads/2018/06/alyaskinskij-malamut-harakteristika-porody-6.jpg)"></div>
                        <div class="swiper-slide" style="background-image:url(https://img2.goodfon.ru/original/320x240/4/a6/sobaka-pes-drug-poroda.jpg)"></div>
                        <div class="swiper-slide" style="background-image:url(https://www.anypics.ru/mini/201405/76469.jpg)"></div>
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next swiper-button-white"></div>
                    <div class="swiper-button-prev swiper-button-white"></div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
                <div class="swiper-container gallery-thumbs gallery-thumbs${index}">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" style="background-image:url(https://cache.desktopnexus.com/thumbseg/1857/1857538-bigthumbnail.jpg)"></div>
                        <div class="swiper-slide" style="background-image:url(https://poster.nicefon.ru/2016_07/24/350x220/122696a0d9e070c7cadbef.jpg)"></div>
                        <div class="swiper-slide" style="background-image:url(https://sibirskytrakt.ru/wp-content/uploads/2017/08/17.jpg)"></div>
                        <div class="swiper-slide" style="background-image:url(https://thejigsawpuzzles.com/img-puzzle-6391678-400/Mountain-lake)"></div>
                        <div class="swiper-slide" style="background-image:url(http://vanguem.ru/wp-content/uploads/2015/05/korgi-na-trave.jpg)"></div>
                        <div class="swiper-slide" style="background-image:url(https://i.pinimg.com/280x280_RS/75/46/f1/7546f1a29086b6dd81a95ad8cc6770fd.jpg)"></div>
                        <div class="swiper-slide" style="background-image:url(https://i.pinimg.com/236x/68/d0/e0/68d0e06eca61224ba0da0185750ce0c0.jpg)"></div>
                        <div class="swiper-slide" style="background-image:url(https://pitomec.guru/wp-content/uploads/2018/06/alyaskinskij-malamut-harakteristika-porody-6.jpg)"></div>
                        <div class="swiper-slide" style="background-image:url(https://img2.goodfon.ru/original/320x240/4/a6/sobaka-pes-drug-poroda.jpg)"></div>
                        <div class="swiper-slide" style="background-image:url(https://www.anypics.ru/mini/201405/76469.jpg)"></div>
                    </div>
                </div>
                <!-- End of Swiper -->`
}

<!-- Initialize Swiper -->
function initialize_Swiper(index){
    var galleryThumbs = new Swiper('.gallery-thumbs'+ index, {
        spaceBetween: 10,
        slidesPerView: 3,
        loop: true,
        freeMode: true,
        loopedSlides: 9, //looped slides should be the same
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
    });
    var galleryTop = new Swiper('.gallery-top'+ index, {
        pagination: {
            el: '.swiper-pagination',
            type: 'fraction',
        },
        spaceBetween: 10,
        loop: true,
        loopedSlides: 9, //looped slides should be the same
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        thumbs: {
            swiper: galleryThumbs,
        },
    });
}



//Открытие редкатировния по щелчку на строку
const initialisatios_ROW = () => {

    El.btn_open_EDIT_INVOICE = document.querySelectorAll('.btn_open_EDIT_INVOICE_name');
    El.btn_open_EDIT_INVOICE.forEach((el, index) => {
        el.onclick = function () {
            var ID_ROW = el.parentElement.getAttribute('text_row'); //находим id row через атрибут text_row
            console.log(ID_ROW);
            open_EDIT_INVOICE();
            open_EDIT_INVOICE();
            //Заполнить модалку редактирования
            $.ajax({
                type: "POST",
                url: "/lr-studio/php/GET_row.php",
                dataType: 'json', // обязательно указать что ожидаем JSON если на php json_encode
                data: {index: ID_ROW}, //передаем ID_ROW
                success: function(data) { // в дате храниться ответ от сервера
                    El.number_invoice_EDIT.value = data[0].number_invoice;
                    El.seller_EDIT.value = data[0].seller;
                    El.item_name_EDIT.value = data[0].item_name;
                    El.weight_EDIT.value = data[0].weight;
                    El.volume_EDIT.value = data[0].volume;
                    El.item_coast_EDIT.value = data[0].item_coast;
                    El.deliver_coast_to_RUSSIA_EDIT.value = data[0].deliver_coast_to_RUSSIA;
                    El.deliver_coast_to_HOME_EDIT.value = data[0].deliver_coast_to_HOME;
                    El.status_of_payment_EDIT.value = data[0].status_of_payment;
                    El.data_shipping_from_CHINA_EDIT.value = data[0].data_shipping_from_CHINA;
                    El.data_delivery_to_RUSSIA_EDIT.value = data[0].data_delivery_to_RUSSIA;
                    El.type_of_shipping_EDIT.value = data[0].type_of_shipping;
                    El.stataus_delivery_EDIT.value = data[0].stataus_delivery;
                    console.log("Завершилось успешно"); // выведем в консоли успех
                },
                error: function (data) { // в случае провала
                    console.log("Завершилось с ошибкой"); // сообщение об ошибке
                    console.log(data); // и данные по ошибке в том числе
                }
            });
            El.btn_remove_EDIT_INVOICE.onclick = function () {   // Удаление из базы
                //alert('Вы уверены что хотите удалить накладную ?????');
                $.ajax({
                    type: "POST",
                    url: "/lr-studio/php/DELETE_row.php",
                    data: {index: ID_ROW},
                    success: function(data) { // в дате храниться ответ от сервера
                        console.log(data); // выведем в консоли успех

                        render(render_images);
                        close_EDIT_INVOICE();
                    },
                    error: function (data) { // в случае провала
                        console.log("Завершилось с ошибкой"); // сообщение об ошибке
                        console.log(data); // и данные по ошибке в том числе
                    }
                });

            };
            El.btn_save_EDIT_INVOICE.onclick = function () {
                $.ajax({
                    type: "POST",
                    url: "/lr-studio/php/UPDATE_invoice.php",
                    dataType: 'json', // обязательно указать что ожидаем JSON если на php json_encode
                    data: {index: ID_ROW,
                        number_invoice: El.number_invoice_EDIT.value,
                        seller: El.seller_EDIT.value,
                        item_name: El.item_name_EDIT.value,
                        weight: El.weight_EDIT.value,
                        volume: El.volume_EDIT.value,
                        item_coast: El.item_coast_EDIT.value,
                        deliver_coast_to_RUSSIA: El.deliver_coast_to_RUSSIA_EDIT.value,
                        deliver_coast_to_HOME: El.deliver_coast_to_HOME_EDIT.value,
                        status_of_payment: El.status_of_payment_EDIT.value,
                        data_shipping_from_CHINA: El.data_shipping_from_CHINA_EDIT.value,
                        data_delivery_to_RUSSIA: El.data_delivery_to_RUSSIA_EDIT.value,
                        type_of_shipping: El.type_of_shipping_EDIT.value,
                        stataus_delivery: El.stataus_delivery_EDIT.value,
                        stataus_delivery: El.stataus_delivery_EDIT.value,
                    }, //передаем ID_ROW
                    success: function(data) { // в дате храниться ответ от сервера
                        console.log("Завершилось успешно"); // выведем в консоли успех

                        render(render_images);
                        close_EDIT_INVOICE();
                    },
                    error: function (data) { // в случае провала
                        console.log("Завершилось с ошибкой"); // сообщение об ошибке
                        console.log(data); // и данные по ошибке в том числе
                    }
                });
            }
        }
    })
};
var preloader = document.querySelector('.backdrop');

//Рендер ВСЕХ картинок
function render_images() {
    //Обращаемся к MySQL за картинками и получаем JSON
    $.ajax({
        type: "POST",
        url: "/lr-studio/php/GET_image_sql.php",
        dataType: 'json',
        cache: false,
        contentType: false,
        processData: false,
        success: function (data) {// в случае успешного завершения
            console.log("Возвращаю JSON базы 'tab_images"); // выведем в консоли успех
            console.log(data); //
            var img_after_this = document.querySelectorAll('.img_after_this'); // находим все селекторы после, которых буддем выставлять картинки
            var rowElement = document.querySelectorAll('tr'); // находим все строки
            data.forEach((el,i) =>{ //перебираем массив с картинками вернувшийся из базы
                var address_img = '<img style="height: 48px; background-size: cover;" class="image" ' +
                    'src="https://vv-m.ru/lr-studio/' + el.path_mini + '>';//создаем  адрес с миниатюрой картинки
                rowElement.forEach((elRow, rowIndex) => {
                    if (elRow.getAttribute('image_row')){
                        if (elRow.getAttribute('image_row') == el.row){
                            elRow.children[0].children[0].children[0].insertAdjacentHTML('afterEnd', '<img style="height: 48px; background-size: cover;" class="image"' +
                                'src="https://vv-m.ru/lr-studio/' + el.path_mini + '">');
                            // console.log(elRow.children[0].children[0].children[0]);
                            // console.log(elRow.getAttribute('image_row') + ' = ' + el.row);
                        }
                    }
                    else console.log('нет атрибута');
                }) ;



            })
            init_image_click();
        },
        error: function (data) { // в случае провала
            console.log("Завершилось с ошибкой"); // сообщение об ошибке
            console.log(data); // и данные по ошибке в том числе
        }
    });
};

//=======================РЕНДЕР======================

//получение данных из базы
async function render(callback) {
    El.collection.innerHTML = '';
    var response_INVOICE = await fetch(`/lr-studio/php/GET_invoice.php`);
    var data = [];
    data = await response_INVOICE.json();
    await data.forEach((el, index) => {
        console.log(el);
        El.collection.innerHTML += getLayout(el, index);
    })

    initialisatios_ROW();
    init_add_images();

    if(callback){
        callback();
    }

};

//функция заполненния полей




//=======================СТАРТОВАЯ ФУНКЦИЯ==========
(function () {
// Достаем все из Local Storage
    const data = JSON.parse(localStorage.getItem('invoice')) || [];
    const data_images = JSON.parse(localStorage.getItem('images')) || [];

    arr_images.push(...data_images);
    List.push(...data);

    render(render_images);
})();




//==========ЗАКРЫТЬ МОДАЛКУ КЛАВИШЕЙ 'ESC'==========
document.addEventListener('keydown', function (e) {
    if (e.keyCode == '27') {
        close_EDIT_INVOICE();
        close_NEW_INVOICE();
        close_gallery();
    }
});


let row_images = [];

var files; // переменная. будет содержать данные файлов

// заполняем переменную данными, при изменении значения поля file

// ==========Добавление картинок (мультизагрузка)==========
function init_add_images() {
    // инициализация всех кнопока "Добавить картинку"
    let btn_images = document.querySelectorAll('.input_image');
    // клик(onchange) по кнопке "Добавить картинку"
    btn_images.forEach((el, index) => {
        // console.log(el.parentElement.parentElement.parentElement.getAttribute('image_row'))
        el.onchange = function(event){
            files = this.files;
            console.log(files);
            event.stopPropagation(); // остановка всех текущих JS событий
            event.preventDefault();  // остановка дефолтного события для текущего элемента - клик для <a> тега

            // ничего не делаем если files пустой
            if( typeof files == 'undefined' ) return;

            // создадим объект данных формы
            var data = new FormData();

            // заполняем объект данных файлами в подходящем для отправки формате
            $.each( files, function( key, value ){
                data.append( key, value );
            });

            // добавим переменную для идентификации запроса
            data.append( 'my_file_upload', 1 );
            data.append('row', el.parentElement.parentElement.parentElement.getAttribute('image_row'));
            console.log(el.parentElement.parentElement.parentElement.getAttribute('image_row'))
            // AJAX запрос
            $.ajax({
                url         : '/lr-studio/php/download_image_multi.php',
                type        : 'POST', // важно!
                data        : data,
                cache       : false,
                dataType    : 'json',
                // отключаем обработку передаваемых данных, пусть передаются как есть
                processData : false,
                // отключаем установку заголовка типа запроса. Так jQuery скажет серверу что это строковой запрос
                contentType : false,
                // функция успешного ответа сервера
                success     : function( data ){
                    console.log('it`s good job');
                    console.log(data);
                    var img_after_this = document.querySelectorAll('.img_after_this');
                    data.forEach((dataEl, datain) => {
                        img_after_this[index].insertAdjacentHTML('afterEnd', '<img style="height: 48px; background-size: cover;" class="image"' +
                            'src="https://vv-m.ru/lr-studio/images/min_' + el.parentElement.parentElement.parentElement.getAttribute('image_row') + '/'+
                            dataEl.basename + '">');
                    })
                    init_image_click();
                },
                // функция ошибки ответа сервера
                error: function( jqXHR, status, errorThrown ){
                    console.log( 'ОШИБКА AJAX запроса: ' + status, jqXHR );
                },
                 beforeSend: function() {
                    preloader.classList.add('show_preloader');
                 },
                 complete: function() {
                     preloader.classList.remove('show_preloader');
                 }
            });

        };
    });
}

let krest = '    <div class="cl-btn-2">\n' +
    '        <div class="close_gallery">\n' +
    '            <div class="leftright"></div>\n' +
    '            <div class="rightleft"></div>\n' +
    '            <span class="close-btn">закрыть</span>\n' +
    '        </div>\n' +
    '    </div>'

var distance = ''

//Нажатие по картинке
function init_image_click(){
    let image_click = document.querySelectorAll('.image');
    image_click.forEach((el,index) => {
        el.onclick = function (){
            distance = window.scrollY;
            console.log(distance);
            document.querySelector('body').classList.add('stop_scroll');
            document.querySelector('body').style.top = distance * -1 + 'px';
            console.log(window.scrollY);
            document.querySelector('.galleria_search').innerHTML ='<div class="galleria">\n' +
                '</div>';
            console.log(el.parentElement.parentElement.parentElement.getAttribute('image_row'))
            var collection_gallery = '';
            document.querySelector('.galleria').innerHTML ='';
            $.ajax({
                type: "POST",
                url: "/lr-studio/php/GET_img_for_galleri.php",
                data: {index: el.parentElement.parentElement.parentElement.getAttribute('image_row')},
                dataType: 'json',
                success: function (data) {// в случае успешного завершения
                    console.log(data)
                    data.forEach((el_data,i_data) => {
                        collection_gallery += create_gallery(el_data.path,el_data.path,el_data.path);
                    })
                    document.querySelector('.galleria').innerHTML = collection_gallery;
                    document.querySelector('.galleria').classList.add('add_gallery')
                    Galleria.run('.galleria');
                    document.querySelector('.galleria-container').insertAdjacentHTML('afterend', krest);
                    document.querySelector('.close_gallery').onclick = close_gallery;

                },
                error: function (data) { // в случае провала
                    console.log("Завершилось с ошибкой"); // сообщение об ошибке
                    console.log(data); // и данные по ошибке в том числе
                },
            });
        }

    })

}


// Форматирование HTML коллекуции галлереи
function create_gallery(min_path, medium_path, big_path){
    return '<a href="' + min_path  + '">\n' +
        '<img src="' + medium_path  + '"\n' +
        'data-big="' + big_path  + '"\n' +
        '</a>'
};

// Закрытие окна галлереи
function close_gallery(){
    document.querySelector('.galleria').innerHTML ='';
    document.querySelector('.galleria').classList.remove('add_gallery');
    window.onscroll = function(){
        return true;
    };
    document.querySelector('body').classList.remove('stop_scroll');
    window.scrollTo(0, distance);
}

// Отключаем скролл при открытой модалки
// window.addEventListener('touchmove', (el) => {
//     if (document.querySelector('.galleria').classList.contains('add_gallery')){
//         //window.scrollTo(0,0);
//         document.querySelector('body').classList.add('stop_scroll');
//     }
// });








