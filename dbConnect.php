<?php
$host = 'localhost'; //Название сервера с базой данных
$name = 'root'; // Имя пользователя
$psswd = ''; // Пароль
$link = mysqli_connect($host, $name, $psswd); // Подключение к серверу

mysqli_select_db($link, 'segmentdatabase'); // Выбор базы данных на сервере
mysqli_query($link, "SET NAMES utf8"); // Кодировка общения UTF8
?>
