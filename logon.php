<?php
// Подключение к базе данных

// Параметры подключения к базе данных
$servername = "localhost";
$username = "test";
$password = "123QWEasd";
$dbname = "test_temp";
$Temp = $_GET['Temp'];

// Создание подключения
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка соединения
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Запрос данных из таблицы
$sql = "INSERT INTO `Temperature`(Temp) VALUES ($Temp)"; 

 $result = $conn->query($sql); 

?>
