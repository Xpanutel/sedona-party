<?php
require_once '../includes/config.php';

session_start();

// Проверка авторизации
if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: auth.php');
    exit;
}

// Получаем текущую дату выборов
$electionData = getElectionData();
$currentDate = $electionData['date'];
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Админка - Настройка выборов</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { font-family: Arial, sans-serif; background: #f5f5f5; }
        .admin-container { max-width: 800px; margin: 50px auto; background: white; padding: 30px; border-radius: 5px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        .form-group { margin-bottom: 20px; }
        .form-group label { display: block; margin-bottom: 5px; font-weight: bold; }
        .form-group input { padding: 10px; border: 1px solid #ddd; border-radius: 4px; }
        .btn { background: #002868; color: white; border: none; padding: 10px 15px; border-radius: 4px; cursor: pointer; }
        .logout { margin-top: 30px; }
        .success { color: green; margin-bottom: 15px; }
    </style>
</head>
<body>
    <div class="admin-container">
        <h1><i class="fas fa-cog"></i> Настройки выборов</h1>
        
        <?php if (isset($_GET['success'])): ?>
            <div class="success">Дата выборов успешно обновлена!</div>
        <?php endif; ?>
        
        <form action="set_election.php" method="POST">
            <div class="form-group">
                <label for="election-date">Дата следующих выборов:</label>
                <input type="date" id="election-date" name="election_date" value="<?= htmlspecialchars($currentDate) ?>" required>
            </div>
            <button type="submit" class="btn">Сохранить</button>
        </form>
        
        <div class="logout">
            <a href="auth.php?logout=1"><i class="fas fa-sign-out-alt"></i> Выйти</a>
        </div>
    </div>
</body>
</html>