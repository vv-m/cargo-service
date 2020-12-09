<?php
//This function prints a text array as an html list.
//function alist ($array) {
//    $alist = "<ul>";
//    for ($i = 0; $i < sizeof($array); $i++) {
//        $alist .= "<li>$array[$i]";
//    }
//    $alist .= "</ul>";
//    return $alist;
//}
////Try to get ImageMagick "convert" program version number.
//exec("convert -version", $out, $rcode);
////Print the return code: 0 if OK, nonzero if error.
//echo "Version return code is $rcode <br>";
////Print the output of "convert -version"
//echo alist($out);

if($images = new Imagick('IMG_6527.JPG')){
    echo "ok1 \n";
}
if ($images->thumbnailImage(50,0)){
    echo "ok1 \n";
}
if ($images->writeImages('IMG_6527_mini.JPG' , false)){
    echo "ok1 \n";
};

?>