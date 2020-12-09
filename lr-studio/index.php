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


<!--Bootstrap-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

<!--JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!--Swiper-->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/swiperMySettings.css">

<!--Favicon-->
    <link rel="Shortcut Icon" href="/lr-studio/favicon.ico">
</head>

<body>

<div class="content">
    <?php
    include "galleria.php";
    include "modal_sellers_ADD.php";
    include "modal_invoice_ADD.php";
    include "modal_invoice_EDIT.php";
    ?>
<!--Прелоадер-->
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
                <?php
                include "footer.php"
                ?>
        </div>
        <div class="footer">
            <div class="copyright">
                © All Right Reserved
            </div>
        </div>
    </div>

    <script type="text/javascript" src="js/main_b.js">
    </script>

</div>
</body>

</html>