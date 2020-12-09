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




$sql = "INSERT INTO `tab_rows`(`number_invoice`, `seller`, `weight`,`volume`, `item_coast`, `deliver_coast_to_RUSSIA`, `deliver_coast_to_HOME`, `status_of_payment`, `data_shipping_from_CHINA`, `data_delivery_to_RUSSIA`, `type_of_shipping`, `stataus_delivery`) VALUES ('$number_invoice','$seller','$item_name','$weight', '$volume' '$item_coast','$deliver_coast_to_RUSSIA','$deliver_coast_to_HOME','$status_of_payment','$data_shipping_from_CHINA','$data_delivery_to_RUSSIA','$type_of_shipping','$stataus_delivery') "; // Запрос к базе данных на добавление
//$sql = "INSERT INTO `tab_rows` (
//`number_invoice`,
//`seller`,
//`item_name` ,
//`weight`) VALUES (
//'$number_invoice',
//'$seller',
//'$item_name',
//'$weight') "; // Запрос к базе данных на добавление



if (mysqli_query($conn, $sql)) {
   echo mysqli_insert_id($conn);
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
// Закрываем соединение
mysqli_close($conn);
