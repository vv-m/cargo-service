<?php
$servername = "localhost";
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
$sql = "SELECT * FROM `tab_images` WHERE `row` = '$number_row'";


if (mysqli_query($conn, $sql)) {
    $result = mysqli_query($conn, $sql);
    $data = array();
    while ($row = mysqli_fetch_assoc($result))
    {
        $data[] = $row;
    };
    echo json_encode($data);
}
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

/*echo ('<h1> ВСЕ ОК </h1>')*/
?>




