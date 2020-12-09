<?php

// 1. Сохраняем в папку и копируем в папку для маленьких изображений
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

$row_images =  $_POST[row];

if( isset( $_POST['my_file_upload'] ) ){
    // ВАЖНО! тут должны быть все проверки безопасности передавемых файлов и вывести ошибки если нужно

    $dir = '../images/row_'.$row_images; // папка для загрузки больших фото
    $dir_min = '../images/min_'.$row_images; // // папка для загрузки маленьких фото

    // cоздадем папки если её нет
    if( ! is_dir( $dir ) ) mkdir( $dir, 0777 );
    if( ! is_dir( $dir_min ) ) mkdir( $dir_min, 0777 );

    $files      = $_FILES; // полученные файлы
    $done_files = array();

    // переместим файлы из временной директории в указанную
    foreach( $files as $file ){
        $file_name = $file['name'];
        $upload_dir = '../images/row_'.$row_images.'/'.$file_name; // папка для больших каринок
        $upload_dir_min = '../images/min_'.$row_images.'/'.$file_name; // папка для маленьких картинок
        $address_img = 'images/row_'.$row_images.'/'.$file_name;
        $address_img_mini = 'images/min_'.$row_images.'/'.$file_name;
        move_uploaded_file( $file['tmp_name'], "$upload_dir"); // загружаем в папку для больших картинок
             // информация о пути добавляем в массив
        if (copy($upload_dir, $upload_dir_min)) { // копируем файл и сжимаем его
            $compressionList = [Imagick::COMPRESSION_JPEG2000];
            $images = new Imagick($upload_dir_min);
            $images->setCompression(100);
            $images->setCompressionQuality(100);
            $images->thumbnailImage(48,0);
            $images->writeImages($upload_dir_min, true);
            $done_files[] = pathinfo( "$upload_dir_min" );
            $sql = "INSERT INTO `tab_images`(`path`,`row`,`path_mini`) VALUES ('$address_img', '$row_images', '$address_img_mini') "; // Запрос к базе данных на добавление
            if (mysqli_query($conn, $sql)) {
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
    }
    mysqli_close($conn);
//    $data = $done_files ? array('files' => $done_files ) : array('error' => 'Ошибка загрузки файлов.');

    echo json_encode($done_files); // выводим информацию о путях картинок для формирования картинок в DOM
}
