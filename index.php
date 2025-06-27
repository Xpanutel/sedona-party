<?php 
// Подключаем общие настройки
require_once 'includes/config.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITE_TITLE; ?> | За сильную Аризону</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <main>
        <section class="hero" id="home">
            <div class="hero-content">
                <h2>Будущее Аризоны начинается сегодня</h2>
                <p>Присоединяйтесь к движению, которое ставит интересы жителей Аризоны на первое место</p>
                <div class="btn-group">
                    <a href="#join" class="btn pulse">Вступить в партию</a>
                    <a href="#initiatives" class="btn btn-outline">Наши инициативы</a>
                </div>
            </div>
        </section>

        <!-- Остальные секции -->
        <?php include 'sections/about.php'; ?>
        <?php include 'sections/initiatives.php'; ?>
        <?php include 'sections/testimonials.php'; ?>
        <?php include 'sections/join.php'; ?>
        <?php include 'sections/contact.php'; ?>
    </main>

    <?php include 'includes/footer.php'; ?>

    <script src="assets/js/main.js"></script>
</body>
</html>