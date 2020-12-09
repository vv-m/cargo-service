<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta name='viewport' content='width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0' />

    <title>Site</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.bundle.js"></script>
</head>

<body>
    <div class="modalblock add_name">
        <div class="modal_container">
            <div class="close_modal"><img src="css/images/close.png"></div>
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
                Добавить поставщика <img src="css/images/add_name.svg">
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
        </div>
    </div>
    <div class="modalblock add_table">
        <div class="modal_container">
            <div class="close_modal"><img src="css/images/close.png"></div>
            <div class="modal_title">
                Добавление накладной
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 modalcol">
                    <div class="inputblock">
                        <div class="input_title">Номер накладной *</div>
                        <div class="input">
                            <input type="text" placeholder="SND230 160 - 12">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 modalcol">
                    <div class="inputblock">
                        <div class="input_title">Поставщик</div>
                        <div class="input">
                            <select>
                                <option>LUBO</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 modalcol">
                    <div class="inputblock">
                        <div class="input_title">Товар</div>
                        <div class="input">
                            <select>
                                <option selected>Выберите товар</option>
                                <option>LUBO</option>
                                <option>Emmy поворотники</option>
                                <option>Еще товар</option>
                                <option>И еще товарчик</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 modalcol">
                    <div class="inputblock">
                        <div class="input_title">Вес поставки</div>
                        <div class="input">
                            <input type="text" placeholder="450 кг">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 modalcol">
                    <div class="inputblock">
                        <div class="input_title">Объем поставки</div>
                        <div class="input">
                            <input type="text" placeholder="3.5 куб">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 modalcol">
                    <div class="inputblock">
                        <div class="input_title">Цена товара</div>
                        <div class="input">
                            <span class="dollar">$</span><input class="dollar_input" type="text" placeholder="45 000">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 modalcol">
                    <div class="inputblock">
                        <div class="input_title">Доставка по РФ</div>
                        <div class="input">
                            <span class="dollar">$</span><input class="dollar_input" type="text" placeholder="45 000">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 modalcol">
                    <div class="inputblock">
                        <div class="input_title">Доставка до склада</div>
                        <div class="input">
                            <span class="dollar">$</span><input class="dollar_input" type="text" placeholder="45 000">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 modalcol">
                    <div class="inputblock">
                        <div class="input_title">Статус оплаты</div>
                        <div class="input">
                            <select>
                                <option>Оплачен</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 modalcol">
                    <div class="inputblock">
                        <div class="input_title">Дата отправки</div>
                        <div class="input">
                            <input class="dollar_input" type="text" placeholder="01.07.2020">
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
                            <input class="dollar_input" type="text" placeholder="01.08.2020">
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
                            <select>
                                <option>Самолет</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 modalcol">
                    <div class="inputblock">
                        <div class="input_title">Статус доставки</div>
                        <div class="input">
                            <select>
                                <option>Отправлен</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 modalcol">
                    <div class="inputblock add_file">
                        <div class="add_text">
                            Прикрепить файл <img src="css/images/add_file.svg">
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
                        <div class="button_save">
                            Сохранить
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                        <div class="button_delete">
                            Удалить
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                        <img class="find" src="css/images/find.svg">
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
                        <li>Дата отправки <img src="css/images/filterin.svg">
                        </li>
                        <li>Дата прибытия <img src="css/images/filterout.svg">
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
                            <th>Дата отправки <img src="css/images/filter.svg">
                            </th>
                            <th>Дней в пути</th>
                            <th>Дата прибытия <img src="css/images/filter.svg">
                            </th>
                            <th>Вид доставки</th>
                            <th>Статус</th>
                            <th class="inherit"></th>
                        </tr>
                    </thead>
                    <tbody class="tbody delivered">
                        <tr>
                            <td data-label="№ накладной:" scope="row">SND-230-120-12</td>
                            <td data-label="Поставщик:">LUBO</td>
                            <td data-label="Товар:">Компрессоры</td>
                            <td data-label="Вес:" class="hide">120 кг</td>
                            <td data-label="Объем:" class="hide">3.5 куб.</td>
                            <td data-label="Цена:" class="hide">5 300 $</td>
                            <td data-label="Доставка по РФ:" class="hide">3 300 $</td>
                            <td data-label="Доставка до склада:" class="hide">4 500 $</td>
                            <td data-label="Итого:" class="bold hide">30 800 $</td>
                            <td data-label="Статус оплаты:" class="bold"><span class="green">Оплачен</span></td>
                            <td data-label="Дата отправки:">12.07.2020</td>
                            <td data-label="Дней в пути:" class="hide">10</td>
                            <td data-label="Дата прибытия:">12.08.2020 <span class="hide gray">(10 дней)</span></td>
                            <td data-label="Вид доставки:" class="hide">
                                <img src="css/images/air.svg">
                            </td>
                            <td data-label="Статус доставки:" class="delivered bold"><span class="green">Доставлен</span></td>
                            <td class="open">
                                <span>Открыть <img src="css/images/open.svg">
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="15" class="tableico">
                                <img src="css/images/ico1.png"><img src="css/images/ico2.png"><img src="css/images/ico2.png"><img src="css/images/add_ico.svg">
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="tbody striped not_delivered">
                        <tr>
                            <td data-label="№ накладной:" scope="row">SND-230-120-12</td>
                            <td data-label="Поставщик:">LUBO</td>
                            <td data-label="Товар:">Компрессоры</td>
                            <td data-label="Вес:" class="hide">120 кг</td>
                            <td data-label="Объем:" class="hide">3.5 куб.</td>
                            <td data-label="Цена:" class="hide">5 300 $</td>
                            <td data-label="Доставка по РФ:" class="hide">3 300 $</td>
                            <td data-label="Доставка до склада:" class="hide">4 500 $</td>
                            <td data-label="Итого:" class="bold hide">30 800 $</td>
                            <td data-label="Статус оплаты:" class="bold"><span class="red">Не оплачен</span></td>
                            <td data-label="Дата отправки:">12.07.2020</td>
                            <td data-label="Дней в пути:" class="hide">10</td>
                            <td data-label="Дата прибытия:">12.08.2020 <span class="hide gray">(10 дней)</span></td>
                            <td data-label="Вид доставки:" class="hide"><img src="css/images/train.svg">
                            </td>
                            <td data-label="Статус доставки:" class="delivered bold"><span class="red">Не доставлен</span></td>
                            <td colspan="4" class="open">
                                <span>Открыть <img src="css/images/open.svg">
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="15" class="tableico"><img src="css/images/ico1.png">
                                <img src="css/images/add_ico.svg">
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="tbody not_delivered">
                        <tr>
                            <td data-label="№ накладной:" scope="row">SND-230-120-12</td>
                            <td data-label="Поставщик:">LUBO</td>
                            <td data-label="Товар:">Компрессоры</td>
                            <td data-label="Вес:" class="hide">120 кг</td>
                            <td data-label="Объем:" class="hide">3.5 куб.</td>
                            <td data-label="Цена:" class="hide">5 300 $</td>
                            <td data-label="Доставка по РФ:" class="hide">3 300 $</td>
                            <td data-label="Доставка до склада:" class="hide">4 500 $</td>
                            <td data-label="Итого:" class="bold hide">30 800 $</td>
                            <td data-label="Статус оплаты:" class="bold"><span class="green">Оплачен</span></td>
                            <td data-label="Дата отправки:">12.07.2020</td>
                            <td data-label="Дней в пути:" class="hide">10</td>
                            <td data-label="Дата прибытия:">12.08.2020 <span class="hide gray">(10 дней)</span></td>
                            <td data-label="Вид доставки:" class="hide"><img src="css/images/truck.svg">
                            </td>
                            <td data-label="Статус доставки:" class="delivered bold"><span class="orange">Не отправлен</span></td>
                            <td colspan="4" class="open"><span>Открыть <img src="css/images/open.svg">
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="15" class="tableico">
                                <img src="css/images/ico1.png"><img src="css/images/ico2.png"><img src="css/images/ico2.png"><img src="css/images/add_ico.svg">
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="tbody striped not_delivered">
                        <tr>
                            <td data-label="№ накладной:" scope="row">SND-230-120-12</td>
                            <td data-label="Поставщик:">LUBO</td>
                            <td data-label="Товар:">Компрессоры</td>
                            <td data-label="Вес:" class="hide">120 кг</td>
                            <td data-label="Объем:" class="hide">3.5 куб.</td>
                            <td data-label="Цена:" class="hide">5 300 $</td>
                            <td data-label="Доставка по РФ:" class="hide">3 300 $</td>
                            <td data-label="Доставка до склада:" class="hide">4 500 $</td>
                            <td data-label="Итого:" class="bold hide">30 800 $</td>
                            <td data-label="Статус оплаты:" class="bold"><span class="red">Не отправлен</span></td>
                            <td data-label="Дата отправки:">12.07.2020</td>
                            <td data-label="Дней в пути:" class="hide">10</td>
                            <td data-label="Дата прибытия:">12.08.2020 <span class="hide gray">(10 дней)</span></td>
                            <td data-label="Вид доставки:" class="hide"><img src="css/images/ship.svg">
                            </td>
                            <td data-label="Статус доставки:" class="delivered bold"><span class="red">Не отправлен</span></td>
                            <td colspan="4" class="open"><span>Открыть <img src="css/images/open.svg">
                                </span></td>
                        </tr>
                        <tr>
                            <td colspan="15" class="tableico"><img src="css/images/add_ico.svg">
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="tbody not_delivered">
                        <tr>
                            <td data-label="№ накладной:" scope="row">SND-230-120-12</td>
                            <td data-label="Поставщик:">LUBO</td>
                            <td data-label="Товар:">Компрессоры</td>
                            <td data-label="Вес:" class="hide">120 кг</td>
                            <td data-label="Объем:" class="hide">3.5 куб.</td>
                            <td data-label="Цена:" class="hide">5 300 $</td>
                            <td data-label="Доставка по РФ:" class="hide">3 300 $</td>
                            <td data-label="Доставка до склада:" class="hide">4 500 $</td>
                            <td data-label="Итого:" class="bold hide">30 800 $</td>
                            <td data-label="Статус оплаты:" class="bold"><span class="red">Не оплачен</span></td>
                            <td data-label="Дата отправки:">12.07.2020</td>
                            <td data-label="Дней в пути:" class="hide">10</td>
                            <td data-label="Дата прибытия:">12.08.2020 <span class="hide gray">(10 дней)</span></td>
                            <td data-label="Вид доставки:" class="hide"><img src="css/images/train.svg">
                            </td>
                            <td data-label="Статус доставки:" class="delivered bold"><span class="red">Не отправлен</span></td>
                            <td colspan="4" class="open"><span>Открыть <img src="css/images/open.svg">
                                </span></td>
                        </tr>
                        <tr>
                            <td colspan="15" class="tableico"><img src="css/images/ico1.png"><img src="css/images/ico2.png"><img src="css/images/ico2.png"><img src="css/images/add_ico.svg">
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="tbody striped delivered">
                        <tr>
                            <td data-label="№ накладной:" scope="row">SND-230-120-12</td>
                            <td data-label="Поставщик:">LUBO</td>
                            <td data-label="Товар:">Компрессоры</td>
                            <td data-label="Вес:" class="hide">120 кг</td>
                            <td data-label="Объем:" class="hide">3.5 куб.</td>
                            <td data-label="Цена:" class="hide">5 300 $</td>
                            <td data-label="Доставка по РФ:" class="hide">3 300 $</td>
                            <td data-label="Доставка до склада:" class="hide">4 500 $</td>
                            <td data-label="Итого:" class="bold hide">30 800 $</td>
                            <td data-label="Статус оплаты:" class="bold"><span class="green">Оплачен</span></td>
                            <td data-label="Дата отправки:">12.07.2020</td>
                            <td data-label="Дней в пути:" class="hide">10</td>
                            <td data-label="Дата прибытия:">12.08.2020 <span class="hide gray">(10 дней)</span></td>
                            <td data-label="Вид доставки:" class="hide"><img src="css/images/truck.svg">
                            </td>
                            <td data-label="Статус доставки:" class="delivered bold"><span class="green">Отправлен</span></td>
                            <td colspan="4" class="open"><span>Открыть <img src="css/images/open.svg">
                                </span></td>
                        </tr>
                        <tr>
                            <td colspan="15" class="tableico"><img src="css/images/ico1.png"><img src="css/images/ico2.png"><img src="css/images/ico2.png"><img src="css/images/add_ico.svg">
                            </td>
                        </tr>
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
                        <div class="upload_button">
                            Добавить накладную
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="copyright">
                © All Right Reserved
            </div>
        </div>
    </div>

    <script type="text/javascript" src="js/script.js"></script>
</body>

</html>