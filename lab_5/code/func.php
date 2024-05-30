<?php
function extracted()
{
    $hostname = 'db'; // Название контейнера
    $username = 'root'; // default
    $password = 'hello'; // docker-compose.yml: 27
    $database = 'web'; // docker-compose.yml: 26
    $port = 3306; // docker-compose.yml: 24

    $test = new mysqli($hostname, $username, $password, $database, $port);

    if (mysqli_connect_errno()) {
        echo "<p>" . "Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error() . "</p>";
    }
    return $test;
}