<?php
$servername = "localhost";//Логины и пароли к базе данных
$database = "vlad372d_cargo";
$username = "vlad372d_cargo";
$password = "l&MW%l6s";
// Устанавливаем соединение
$conn = mysqli_connect($servername, $username, $password, $database);
// Проверяем соединение
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$number_row = $_POST['index'];
$number_invoice =    $_POST['number_invoice'];
$seller =    $_POST['seller'];
$item_name =    $_POST['item_name'];
$weight =    $_POST['weight'];
$volume =    $_POST['volume'];
$item_coast =    $_POST['item_coast'];
$deliver_coast_to_RUSSIA =    $_POST['deliver_coast_to_RUSSIA'];
$deliver_coast_to_HOME =    $_POST['deliver_coast_to_HOME'];
$status_of_payment =    $_POST['status_of_payment'];
$data_shipping_from_CHINA =    $_POST['data_shipping_from_CHINA'];
$data_delivery_to_RUSSIA =    $_POST['data_delivery_to_RUSSIA'];
$type_of_shipping =    $_POST['type_of_shipping'];
$stataus_delivery =    $_POST['stataus_delivery'];

echo $number_row;


$sql = "UPDATE `tab_rows`
 SET `number_invoice` = '$number_invoice',
 `seller` = '$seller',
 `item_name` = '$item_name',
 `weight` = '$weight',
 `volume` = '$volume',
 `item_coast` = '$item_coast',
 `deliver_coast_to_RUSSIA` = '$deliver_coast_to_RUSSIA',
 `deliver_coast_to_HOME` = '$deliver_coast_to_HOME',
 `status_of_payment` = '$status_of_payment',
 `data_shipping_from_CHINA` = '$data_shipping_from_CHINA',
 `data_delivery_to_RUSSIA` = '$data_delivery_to_RUSSIA',
 `type_of_shipping` = '$type_of_shipping',
 `stataus_delivery` = '$stataus_delivery'
 
 WHERE ID_ROW = '$number_row'"; // Запрос к базе данных на добавление




if (mysqli_query($conn, $sql)) {
    echo mysqli_insert_id($conn);
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
// Закрываем соединение
mysqli_close($conn);
