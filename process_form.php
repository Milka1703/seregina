<?php
session_start();
include("./connect.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $query = "INSERT INTO requests_products(name, email, phone) VALUE ('$name', '$email', '$phone')";

    if($connect->query($query)  == TRUE){
        echo("Данные успешно отправлены");
    }else{
        echo("Ошибка добавления данных" . $query . "<br>" . $connect->error);
    }
}

$connect->close();
?>