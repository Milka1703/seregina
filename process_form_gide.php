<?php
session_start();
include('./connect.php');

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['name'];
    $phone = $_POST['phone'];

    $query = "INSERT INTO form_gide(name, phone) VALUES ('$name', '$phone')";

    if($connect->query($query) == TRUE){
        echo("Данные успешно отправлены");
    } else{
        echo("Ошибка добавления данных: " . $query . "<br>" . $connect->error);
    }
}

$connect->close();
?>