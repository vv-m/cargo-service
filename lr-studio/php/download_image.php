<?php
header('Content-type: image/jpeg');
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

$name_img = $_FILES['file']['name'];
$row_images =  $_POST[row]; //Создал переменную с индексом картинки
$address_img = 'images/row_'.$row_images.'/'.$name_img; //Создал переменную с адресом ИСХОДНОЙ картинки
$address_img_mini = 'images/min_'.$row_images.'/'.$name_img; //Создал переменную с адресом МИНИАТЮРЫ картинки
//$address_img_mini = 'images/min_'.$row_images.'/'.$name_img; //Создал переменную с адресом картинки

$dir = '../images/row_'.$row_images; // // Если нет папки - создать
if(!is_dir($dir)) {
    mkdir($dir, 0777, true);
}

$dir_min = '../images/min_'.$row_images; // // Если нет папки - создать
if(!is_dir($dir_min)) {
    mkdir($dir_min, 0777, true);
}



// загрузка фото на сервер ВАДНО ГДЕ НАХОДИТСЯ ФАЙЛ PHP - важно для пути указания!!!!


$upload_dir = '../images/row_'.$row_images.'/'.$name_img;
$upload_dir_min = '../images/min_'.$row_images.'/'.$name_img;


if (!empty($_FILES)) {
    move_uploaded_file($_FILES['file']['tmp_name'],$upload_dir);
    echo "$address_img_mini"; // Это использует JS
}

if (copy($upload_dir, $upload_dir_min)) {
    $compressionList = [Imagick::COMPRESSION_JPEG2000];
    $images = new Imagick($upload_dir_min);
    $images->setCompression(100);
    $images->setCompressionQuality(100);
    $images->thumbnailImage(48,0);
    $images->writeImages($upload_dir_min, true);
}

//function img_compress($img, $c){
//
//    $imagickSrc = new Imagick($img);
//    $compressionList = [Imagick::COMPRESSION_JPEG2000];
//
//    $imagickDst = new Imagick();
//    $imagickDst->setCompression(40);
//    $imagickDst->setCompressionQuality(40);
//    $imagickDst->newPseudoImage(
//        $imagickSrc->getImageWidth(),
//        $imagickSrc->getImageHeight(),
//        'canvas:white'
//    );
//    $imagickDst->compositeImage(
//        $imagickSrc,
//        Imagick::COMPOSITE_ATOP,
//        0,
//        0
//    );
//    $imagickDst->setImageFormat("jpg");
//    $imagickDst->writeImage($img,$c);
//}



$sql = "INSERT INTO `tab_images`(`path`,`row`,`path_mini`) VALUES ('$address_img', '$row_images', '$address_img_mini') "; // Запрос к базе данных на добавление

if (mysqli_query($conn, $sql)) {

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$sql2 = "SELECT * FROM `tab_images` where `id` = '$row_images' ";



if (mysqli_query($conn, $sql2)) {
    $result = mysqli_query($conn, $sql2);
    $data = array();
    while ($row = mysqli_fetch_assoc($result))
    {
        $data[] = $row;
    };
    //echo json_encode($data);

}
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>