<?php
require_once '../includes/config.php';

session_start();

// Проверка авторизации
if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: auth.php');
    exit;
}

// Обработка формы
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $date = $_POST['election_date'] ?? '';
    
    if ($date && preg_match('/^\d{4}-\d{2}-\d{2}$/', $date)) {
        saveElectionData(['date' => $date]);
        header('Location: index.php?success=1');
        exit;
    }
}

header('Location: index.php');
exit;