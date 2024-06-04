<?php
function redirectToHome()
{
    header('Location: /index.php');
    exit();
}
if (false === isset($_POST['email'], $_POST['category'], $_POST['title'], $_POST['description'])){
    redirectToHome();
}
$container = 'db';
$username = 'root';
$password = 'helloworld';
$database = 'BASE';
$port = 6603;

// Подключение к базе данных
$mysqli = new mysqli($container, $username, $password, $database, $port);

// Получаем данные
$category = $_POST['category'];
$title = $_POST['title'];
$description = $_POST['description'];
$email = $_POST['email'];

// Подготавливаем SQL запрос для добавления данных в таблицу
$stmt = $mysqli->prepare("INSERT INTO BASE.ad (email, title, description, category) VALUES (?, ?, ?, ?)");

// Привязываем параметры запроса к переменным
$stmt->bind_param("ssss",$email, $title, $description, $category);

// Выполняем подготовленный запрос
$stmt->execute();


// Закрытие подключения
$stmt->close();
$mysqli->close();
redirectToHome();
