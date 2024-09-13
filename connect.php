<?php 
$servername = "localhost"; //создание переменной
$username = "root";
$password = "";
$dbname = "HomePlants";

$connect = new mysqli($servername, $username, $password, $dbname); //отправка запроса

if($connect->connect_error){ //если подключение вернуло ошибку подключения 
    die("Не удалось подключиться: " . $connect->connect_error); //Вывод сообщения с самой ошибкой
}
?>