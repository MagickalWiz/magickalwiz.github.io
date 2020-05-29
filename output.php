<?php
if(isset($_POST['submit'])) {
$name = $_POST['name'];
$photo = $_POST['photo'];
//Read the file which includes the html page in which the data should be filed and should be returned
$file = file_get_contents("input.html");
$file = str_replace('%name%', $file);
$file = str_replace('%photo%', '<img src='.$file.' alt="" />'); //Maybe validate and upload the Photo
file_put_contents('/home/magickalwiz/http/input/'.$name.'.html',$file,FILE_USE_INCLUDE_PATH | FILE_APPEND); //Creates a file named $name.html which will output the finished document
}
header('Location: http://192.168.1.93/input/'.$name.'.html');
?>
