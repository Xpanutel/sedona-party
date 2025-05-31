<?php

try {
    require_once 'db_config.php';
    echo "Все гуд — подключение к базе данных установлено!";
} catch (Exception $e) {
    echo "Ошибка подключения: " . $e->getMessage();
}
