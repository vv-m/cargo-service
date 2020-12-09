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

$sql = "SELECT * FROM `tab_rows`";


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
