
<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta name='viewport' content='width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0' />
    <title>Site</title>

    <!--Styles-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/pre.css">
    <link rel="stylesheet" type="text/css" href="css/close.css">
    <link rel="stylesheet" type="text/css" href="css/swiperMySettings.css">

    <!--Bootstrap-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

    <!--JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!--Swiper-->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <!--Favicon-->
    <link rel="Shortcut Icon" href="/lr-studio/favicon.ico">
</head>

<body>

<div class="swiper-container">
    <div class="swiper-wrapper">
        <div class="swiper-slide">Slide 1</div>
        <div class="swiper-slide">Slide 2</div>
        <div class="swiper-slide">Slide 3</div>
        <div class="swiper-slide">Slide 4</div>
        <div class="swiper-slide">Slide 5</div>
        <div class="swiper-slide">Slide 6</div>
        <div class="swiper-slide">Slide 7</div>
        <div class="swiper-slide">Slide 8</div>
        <div class="swiper-slide">Slide 9</div>
        <div class="swiper-slide">Slide 10</div>
    </div>
</div>
<div class="content">



    <div class="galleria_search">
        <div class="galleria">
        </div>
    </div>


    <div class="modalblock add_name open_modal_SELLERS">
        <div class="modal_container">
            <div class="close_modal close_modal_SELLERS"><img src="css/images/close.png"></div>
            <div class="modal_title">
                Поставщики
            </div>
            <div class="nameblock">
                <div class="name">
                    LUBO
                    <img src="css/images/trash.svg">
                </div>
                <div class="name">
                    Crystal
                    <img src="css/images/trash.svg">
                </div>
                <div class="name">
                    Emmy поворотник
                    <img src="css/images/trash.svg">
                </div>
                <div class="name">
                    Новый поставщик
                    <img src="css/images/trash.svg">
                </div>
            </div>
            <div class="add_button">
                Добавить поставщика
                <img src="css/images/add_name.svg">
            </div>
            <div class="buttons_block">
                <div class="row justify-content-center">
                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                        <div class="button_save">
                            Сохранить
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                        <div class="button_delete">
                            Удалить
                        </div>
                    </div>
                </div>
            </div>
        </div>ы
    </div>
    <div class="modalblock add_table modal_add_NEW_INVOICE">
        <div class="modal_container">
            <div class="close_modal btn_close_NEW_INVOICE"><img src="css/images/close.png"></div>
            <div class="modal_title">
                Добавление накладной
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 modalcol">
                    <div class="inputblock">
                        <div class="input_title">Номер накладной *</div>
                        <div class="input">
                            <input class="number_invoice" type="text" placeholder="Номер накладной">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 modalcol">
                    <div class="inputblock">
                        <div class="input_title">Поставщик</div>
                        <div class="input">
                            <select class="seller">
                                <option selected>Выберите поставщика</option>
                                <option>LUBO</option>
                                <option>BDL</option>
                                <option>Пороги</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 modalcol">
                    <div class="inputblock">
                        <div class="input_title">Товар</div>
                        <div class="input">
                            <select class="item_name" >
                                <option selected>Выберите товар</option>
                                <option>Обвесы</option>
                                <option>Фары</option>
                                <option>Поворотники</option>
                                <option>Другое</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 modalcol">
                    <div class="inputblock">
                        <div class="input_title">Вес поставки</div>
                        <div class="input">
                            <input class="weight" type="text" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 modalcol">
                    <div class="inputblock">
                        <div class="input_title">Объем поставки</div>
                        <div class="input">
                            <input class="volume" type="text" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 modalcol">
                    <div class="inputblock">
                        <div class="input_title">Цена товара</div>
                        <div class="input">
                            <span class="dollar">$</span><input class="dollar_input item_coast" type="text"
                                                                placeholder="0">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 modalcol">
                    <div class="inputblock">
                        <div class="input_title">Доставка по РФ</div>
                        <div class="input">
                            <span class="dollar">$</span><input class="dollar_input deliver_coast_to_RUSSIA" type="text"
                                                                placeholder="0">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 modalcol">
                    <div class="inputblock">
                        <div class="input_title">Доставка до склада</div>
                        <div class="input">
                            <span class="dollar">$</span><input class="dollar_input deliver_coast_to_HOME"
                                                                type="text" placeholder="0">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 modalcol">
                    <div class="inputblock">
                        <div class="input_title">Статус оплаты</div>
                        <div class="input">
                            <select class="status_of_payment">
                                <option>Оплачен</option>
                                <option>Не оплачен</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 modalcol">
                    <div class="inputblock">
                        <div class="input_title">Дата отправки</div>
                        <div class="input">
                            <input class="dollar_input data_shipping_from_CHINA" type="text" placeholder="">
                            <span class="date">
                    <img src="css/images/date.svg">
                </span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 modalcol">
                    <div class="inputblock">
                        <div class="input_title">Дата прибытия</div>
                        <div class="input">
                            <input class="dollar_input data_delivery_to_RUSSIA" type="text" placeholder="">
                            <span class="date">
                    <img src="css/images/date.svg">
                </span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 modalcol">
                    <div class="inputblock">
                        <div class="input_title">Вид доставки</div>
                        <div class="input">
                            <select class="type_of_shipping">
                                <option>Самолет</option>
                                <option>Поезд</option>
                                <option>Авто</option>
                                <option>Море</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 modalcol">
                    <div class="inputblock">
                        <div class="input_title">Статус доставки</div>
                        <div class="input">
                            <select class="stataus_delivery">
                                <option>Не отправлен</option>
                                <option>Отправлен</option>
                                <option>Доставлен</option>
                                <option>Прибыл в Москву</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 modalcol">
                    <div class="inputblock add_file">
                        <div class="add_text">
                            Прикрепить файл
                            <img src="css/images/add_file.svg">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 modalcol">
                    <div class="inputblock download_file">
                        <div class="input_title">Загруженные файлы</div>
                        <div class="input">
                            Lubo order 22... .xls <span class="delete_file">
                    <img src="css/images/delete_file.svg">
                </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="buttons_block">
                <div class="row justify-content-center">
                    <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                        <div class="button_save btn_save_NEW_INVOICE">
                            Добавить
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    <div class="modalblock add_table modal_add_EDIT_INVOICE">
        <div class="modal_container">
            <div class="close_modal btn_close_EDIT_INVOICE"><img src="css/images/close.png"></div>
            <div class="modal_title">
                Редактирование накладной
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 modalcol">
                    <div class="inputblock">
                        <div class="input_title">Номер накладной *</div>
                        <div class="input">
                            <input class="number_invoice_EDIT" type="text" placeholder="Введите номер накладной">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 modalcol">
                    <div class="inputblock">
                        <div class="input_title">Поставщик</div>
                        <div class="input">
                            <select class="seller_EDIT">
                                <option selected>Выберите поставщика</option>
                                <option>LUBO</option>
                                <option>BDL</option>
                                <option>Пороги</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 modalcol">
                    <div class="inputblock">
                        <div class="input_title">Товар</div>
                        <div class="input">
                            <select class="item_name_EDIT" >
                                <option selected>Выберите товар</option>
                                <option>Обвесы</option>
                                <option>Фары</option>
                                <option>Поворотники</option>
                                <option>Другое</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 modalcol">
                    <div class="inputblock">
                        <div class="input_title">Вес поставки</div>
                        <div class="input">
                            <input class="weight_EDIT" type="text" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 modalcol">
                    <div class="inputblock">
                        <div class="input_title">Объем поставки</div>
                        <div class="input">
                            <input class="volume_EDIT" type="text" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 modalcol">
                    <div class="inputblock">
                        <div class="input_title">Цена товара</div>
                        <div class="input">
                            <span class="dollar">$</span><input class="dollar_input item_coast_EDIT" type="text" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 modalcol">
                    <div class="inputblock">
                        <div class="input_title">Доставка по РФ</div>
                        <div class="input">
                            <span class="dollar">$</span><input class="dollar_input deliver_coast_to_RUSSIA_EDIT" type="text" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 modalcol">
                    <div class="inputblock">
                        <div class="input_title">Доставка до склада</div>
                        <div class="input">
                            <span class="dollar">$</span><input class="dollar_input deliver_coast_to_HOME_EDIT" type="text" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 modalcol">
                    <div class="inputblock">
                        <div class="input_title">Статус оплаты</div>
                        <div class="input">
                            <select class="status_of_payment_EDIT">
                                <option>Оплачен</option>
                                <option>Не оплачен</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 modalcol">
                    <div class="inputblock">
                        <div class="input_title">Дата отправки</div>
                        <div class="input">
                            <input class="dollar_input data_shipping_from_CHINA_EDIT" type="text" placeholder="">
                            <span class="date">
                    <img src="css/images/date.svg">
                </span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 modalcol">
                    <div class="inputblock">
                        <div class="input_title">Дата прибытия</div>
                        <div class="input">
                            <input class="dollar_input data_delivery_to_RUSSIA_EDIT" type="text" placeholder="">
                            <span class="date">
                    <img src="css/images/date.svg">
                </span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 modalcol">
                    <div class="inputblock">
                        <div class="input_title">Вид доставки</div>
                        <div class="input">
                            <select class="type_of_shipping_EDIT">
                                <option>Самолет</option>
                                <option>Поезд</option>
                                <option>Авто</option>
                                <option>Море</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 modalcol">
                    <div class="inputblock">
                        <div class="input_title">Статус доставки</div>
                        <div class="input">
                            <select class="stataus_delivery_EDIT">
                                <option>Не отправлен</option>
                                <option>Отправлен</option>
                                <option>Доставлен</option>
                                <option>Прибыл в Москву</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 modalcol">
                    <div class="inputblock add_file">
                        <div class="add_text">
                            Прикрепить файл
                            <img src="css/images/add_file.svg">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 modalcol">
                    <div class="inputblock download_file">
                        <div class="input_title">Загруженные файлы</div>
                        <div class="input">
                            Lubo order 22... .xls <span class="delete_file">
                    <img src="css/images/delete_file.svg">
                </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="buttons_block">
                <div class="row justify-content-center">
                    <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                        <div class="button_save btn_save_EDIT_INVOICE">
                            Сохранить
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                        <div class="button_delete btn_remove_EDIT_INVOICE">
                            Удалить
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--Прелоадер-->
    <div class="backdrop">
        <div class="loader">
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
    </div>
    <!---->

    <div class="container_fluid wrapper">
        <div class="header">
            <div class="myrow row align-items-center">
                <div class="col-8 col-sm-6 col-md-6 col-lg-3 col-xl-3 order-1 order-lg-1 logo_fix">
                    <div class="logo">
                        <img src="css/images/logo.svg">
                        <br>
                        <span class="logo_text">Автозапчасти и тюнинг автомобилей Land Rover</span>
                    </div>
                    <!--<div class="logo">
<img src="css/images/logo_fixed.png">
</div>
<div class="logo_text">
Автозапчасти и тюнинг автомобилей Land Rover
</div>-->
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 order-3 order-lg-2">
                    <div class="findblock">
                        <input type="text" placeholder="Поиск накладной">
                        <input class="submit" type="submit">
                        <img src="css/images/find.svg">
                    </div>
                </div>
                <div class="col-4 col-sm-6 col-md-6 col-lg-3 col-xl-3 order-2 order-lg-3">
                    <div class="course">
                        Курс доллара: <span class="bold dollar_count">73.50 ₽</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="mainblock">
            <div class="myrow row justify-content-between titleblock">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6 padding_fix">
                    <div class="title">
                        Грузы в пути
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6 padding_fix">
                    <div class="filterblock">
                        <ul>
                            <li class="selected all_list">Все</li>
                            <li>В архиве</li>
                            <li class="open_table no_delivered">Не доставленные</li>
                            <li class="open_name yes_delivered">Доставленные</li>
                        </ul>
                    </div>
                </div>
                <div class="filterblock2">
                    <ul>
                        <li>Дата отправки
                            <img src="css/images/filterin.svg">
                        </li>
                        <li>Дата прибытия
                            <img src="css/images/filterout.svg">

                        </li>
                    </ul>
                </div>
            </div>
            <div class="tableblock">
                <table class="table">
                    <thead class="thead">
                    <tr>
                        <th scope="row">№ накладной</th>
                        <th>Поставщик</th>
                        <th>Товар</th>
                        <th>Вес</th>
                        <th>Объем</th>
                        <th>Цена</th>
                        <th>Доставка по РФ</th>
                        <th>Доставка до склада</th>
                        <th>Итого</th>
                        <th>Оплачен</th>
                        <th>Дата отправки
                            <img src="css/images/filter.svg">
                        </th>
                        <th>Дней в пути</th>
                        <th>Дата прибытия
                            <img src="css/images/filter.svg">
                        </th>
                        <th>Вид доставки</th>
                        <th>Статус</th>
                        <th class="inherit"></th>
                    </tr>
                    </thead>
                    <tbody class="tbody delivered collection">
                    </tbody>
                </table>
            </div>
            <div class="myrow row totalblock">
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 order-2 order-lg-1">
                    <div class="totalpriceblock">
                        <div class="totaltitle">
                            Итого
                        </div>
                        <div class="count">
                            <table width="100%">
                                <tbody>
                                <tr>
                                    <td>6 грузов</td>
                                    <td><img src="css/images/line.png"></td>
                                    <td>47 000 $</td>
                                </tr>
                                <tr>
                                    <td>Доставка</td>
                                    <td><img src="css/images/line.png"></td>
                                    <td>22 500 $</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="totaltext">
                            Общая сумма:
                        </div>
                        <div class="totalprice">
                            70 308 $
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 order-1 order-lg-2">
                    <div class="navigationblock">
                        <span class="prev"><img src="css/images/prev.png"></span> <span class="currentpage">2</span> / <span class="allpage">12</span> <span class="next"><img src="css/images/next.png"></span>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 order-3 order-lg-3 mycol">
                    <div class="uploadblock">
                        <div class="uploadimg">
                            <img src="css/images/upload.png">
                        </div>
                        <div class="uploadtext">
                            Перетащите сюда файл или нажмите кнопку<br>ниже, чтобы выбрать файл на компьютере
                        </div>
                        <div class="upload_button btn_add_NEW_INVOICE">
                            Добавить накладную
                        </div>
                    </div>
                </div>
            </div>        </div>
        <div class="footer">
            <div class="copyright">
                © All Right Reserved
            </div>
        </div>
    </div>

    <script type="text/javascript" src="js/main_b.js">
    </script>
</div>

<!--Swiper-->
<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
    var swiper = new Swiper('.swiper-container', {
        touchEventsTarget: 'container',
    });
</script>

</body>

</html>