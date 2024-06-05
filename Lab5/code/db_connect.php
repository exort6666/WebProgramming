<?php
require_once 'meta.php';

function db_connect() {
    global $db_host, $db_user, $db_password, $db_name;
    $connection = new mysqli($db_host, $db_user, $db_password, $db_name);
    if ($connection->connect_error) {
        die("Ошибка подключения к базе данных: " . $connection->connect_error);
    }
    return $connection;
}
?>
