<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>lab5</title>
</head>
<body>
<form action="save.php" method="post">
    <label>
        <br> Enter your email:
        <input type="email" name="email" required>
    </label>
    <label>
        <br> Enter category:
        <select name="category" required>
            <option value="1">Car</option>
            <option value="2">Jeans</option>
            <option value="3">Phone</option>
        </select>
    </label>
    <label>
        <br> Title:
        <input type="text" name="title" required>
    </label>
    <label>
        <br> Description:
        <textarea rows="5" name="description"></textarea>
    </label>
    <label>
        <br> <input type="submit">
    </label>
</form>
<?php
$container = 'db';
$username = 'root';
$password = 'helloworld';
$database = 'BASE';
$port = 6603;

// Подключение к базе данных
$mysqli = new mysqli($container, $username, $password, $database, $port);

// Вывод данных
foreach ($mysqli->query("SELECT * FROM BASE.ad") as $row) {
    $category = $row['category'];
    $title = $row['title'];
    $description = $row['description'];
    $email = $row['email'];
    echo "<p> $email -> $title -> $description -> $category </p>";
}
?>
</body>
</html>
