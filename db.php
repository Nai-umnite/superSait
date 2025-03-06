<?php
$servername = "localhost";
$username = "root"; // Промени, ако имаш различен потребител
$password = ""; // Ако имаш парола за MySQL, въведи я тук
$database = "flower_shop"; // Промени с името на твоята база

// Връзка с MySQL
$conn = mysqli_connect($servername, $username, $password, $database);

// Проверка за грешка
if (!$conn) {
    die("Грешка при свързване: " . mysqli_connect_error());
}
?>
