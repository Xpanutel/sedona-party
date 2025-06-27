<?php
// Подключаем конфигурацию
require_once 'includes/config.php';
$electionDate = getNextElectionDate();
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITE_TITLE; ?></title>
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Playfair+Display:wght@700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <?php include 'includes/header.php'; ?>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-content">
            <h2>Будущее Седоны начинается сегодня</h2>
            <p>Присоединяйтесь к движению, которое ставит интересы жителей Седоны на первое место</p>
            <div class="btn-group">
                <a href="#join" class="btn pulse">Вступить в партию</a>
                <a href="#initiatives" class="btn btn-outline">Наши инициативы</a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="section" id="about">
        <div class="section-title">
            <h2>О нашей партии</h2>
            <p>Мы - движение, посвященное процветанию и благополучию штата Седона и его жителей</p>
        </div>

        <div class="election-counter">
            <h3>До следующих выборов осталось:</h3>
            <div class="counter" id="electionCounter">
                <div class="counter-item">
                    <div class="counter-number" id="days">00</div>
                    <div class="counter-label">Дней</div>
                </div>
                <div class="counter-item">
                    <div class="counter-number" id="hours">00</div>
                    <div class="counter-label">Часов</div>
                </div>
                <div class="counter-item">
                    <div class="counter-number" id="minutes">00</div>
                    <div class="counter-label">Минут</div>
                </div>
                <div class="counter-item">
                    <div class="counter-number" id="seconds">00</div>
                    <div class="counter-label">Секунд</div>
                </div>
            </div>
        </div>

        <div id="election-date-data" 
            data-date="<?= $electionDate->format('Y-m-d') ?>"
            style="display:none;">
        </div>

        <div class="about-content">
            <div class="about-text">
                <h3>Наша миссия и ценности</h3>
                <p>Национальная партия Седоны была основана с целью защиты интересов жителей нашего солнечного штата.
                    Мы верим в ценности свободы, ответственности и прогресса, которые делают Седону уникальным местом
                    для жизни и работы.</p>
                <p>Наша цель - создать сильную, экономически устойчивую Седону, где каждый житель имеет возможности для
                    роста и развития. Мы выступаем за разумное управление ресурсами, поддержку местного бизнеса и
                    сохранение уникальной природы нашего штата.</p>
                <p>Наша команда состоит из преданных своему делу профессионалов, которые работают над тем, чтобы сделать
                    Седону лучше для всех ее жителей.</p>
            </div>
            <div class="about-image">
                <img src="https://images.unsplash.com/photo-1445116572660-236099ec97a0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1351&q=80"
                    alt="Пейзаж Аризоны">
            </div>
        </div>

        <div class="stats">
            <div class="stat-item">
                <div class="stat-number" data-count="25">0</div>
                <div class="stat-text">Лет служения Седоне</div>
            </div>
            <div class="stat-item">
                <div class="stat-number" data-count="150">0</div>
                <div class="stat-text">Тысяч членов партии</div>
            </div>
            <div class="stat-item">
                <div class="stat-number" data-count="42">0</div>
                <div class="stat-text">Принятых инициатив</div>
            </div>
            <div class="stat-item">
                <div class="stat-number" data-count="15">0</div>
                <div class="stat-text">Городов по всему штату</div>
            </div>
        </div>
    </section>

    <!-- Initiatives Section -->
    <section class="section initiatives" id="initiatives">
        <div class="section-title">
            <h2>Наши инициативы</h2>
            <p>Мы работаем над ключевыми проектами, которые улучшают жизнь в Седоне</p>
        </div>

        <div class="initiatives-grid">
            <div class="initiative-card">
                <div class="initiative-image">
                    <img src="https://images.unsplash.com/photo-1509316785289-025f5b846b35?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1350&q=80"
                        alt="Экология">
                </div>
                <div class="initiative-content">
                    <h3>Экология и вода</h3>
                    <p>Программа по сохранению водных ресурсов и защите уникальной природы Седоны. Инвестиции в
                        технологии очистки и повторного использования воды.</p>
                </div>
            </div>

            <div class="initiative-card">
                <div class="initiative-image">
                    <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1350&q=80"
                        alt="Образование">
                </div>
                <div class="initiative-content">
                    <h3>Образование будущего</h3>
                    <p>Реформа системы образования с акцентом на STEM-дисциплины и профессиональное обучение. Создание
                        современных образовательных центров по всему штату.</p>
                </div>
            </div>

            <div class="initiative-card">
                <div class="initiative-image">
                    <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1350&q=80"
                        alt="Экономика">
                </div>
                <div class="initiative-content">
                    <h3>Экономический рост</h3>
                    <p>Поддержка малого и среднего бизнеса, привлечение технологических компаний, создание новых рабочих
                        мест в перспективных отраслях экономики.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="section testimonials" id="testimonials">
        <div class="section-title">
            <h2>Отзывы наших сторонников</h2>
            <p>Узнайте, что говорят люди о Национальной партии Седоны</p>
        </div>

        <div class="testimonials-grid">
            <div class="testimonial-card">
                <div class="testimonial-text">
                    Национальная партия Седоны действительно слушает своих избирателей. Их инициативы по защите водных
                    ресурсов изменили жизнь нашего сообщества к лучшему.
                </div>
                <div class="testimonial-author">
                    <div class="author-image">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=688&q=80"
                            alt="Мария Гонсалес">
                    </div>
                    <div class="author-info">
                        <h4>Мария Гонсалес</h4>
                        <p>Феникс, Аризона</p>
                    </div>
                </div>
            </div>

            <div class="testimonial-card">
                <div class="testimonial-text">
                    Как владелец малого бизнеса, я ценю усилия партии по созданию благоприятных экономических условий.
                    Их налоговая реформа помогла мне расширить свое дело.
                </div>
                <div class="testimonial-author">
                    <div class="author-image">
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80"
                            alt="Джеймс Уилсон">
                    </div>
                    <div class="author-info">
                        <h4>Джеймс Уилсон</h4>
                        <p>Тусон, Аризона</p>
                    </div>
                </div>
            </div>

            <div class="testimonial-card">
                <div class="testimonial-text">
                    Я горжусь тем, что являюсь членом этой партии. Они действительно работают для людей, а не для
                    больших корпораций. Их подход к образованию впечатляет.
                </div>
                <div class="testimonial-author">
                    <div class="author-image">
                        <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=688&q=80"
                            alt="Сара Джонсон">
                    </div>
                    <div class="author-info">
                        <h4>Сара Джонсон</h4>
                        <p>Флагстафф, Аризона</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Join Section -->
    <section class="section join" id="join">
        <div class="section-title">
            <h2>Присоединяйтесь к нам</h2>
            <p>Станьте частью движения, которое меняет Седону к лучшему</p>
        </div>

        <div class="join-container">
            <div class="join-form">
                <form id="membershipForm">
                    <div class="form-group">
                        <label for="name">Полное имя</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email адрес</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Телефон</label>
                        <input type="tel" id="phone" name="phone">
                    </div>
                    <div class="form-group">
                        <label for="city">Город проживания</label>
                        <select id="city" name="city" required>
                            <option value="">Выберите город</option>
                            <option value="phoenix">Феникс</option>
                            <option value="tucson">Тусон</option>
                            <option value="mesa">Меса</option>
                            <option value="chandler">Чандлер</option>
                            <option value="glendale">Глендейл</option>
                            <option value="scottsdale">Скоттсдейл</option>
                            <option value="gilbert">Гилберт</option>
                            <option value="tempe">Темпе</option>
                            <option value="peoria">Пеория</option>
                            <option value="surprise">Сюрприз</option>
                            <option value="flagstaff">Флагстафф</option>
                            <option value="other">Другой</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="interest">Область интересов</label>
                        <select id="interest" name="interest">
                            <option value="">Выберите направление</option>
                            <option value="ecology">Экология и окружающая среда</option>
                            <option value="education">Образование</option>
                            <option value="economy">Экономика и бизнес</option>
                            <option value="healthcare">Здравоохранение</option>
                            <option value="infrastructure">Инфраструктура</option>
                            <option value="social">Социальные программы</option>
                            <option value="other">Другое</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message">Почему вы хотите присоединиться к нашей партии?</label>
                        <textarea id="message" name="message"></textarea>
                    </div>
                    <button type="submit" class="btn">Отправить заявку</button>
                </form>
            </div>
            <div class="join-image">
                <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1469&q=80"
                    alt="Люди на митинге">
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="section" id="contact">
        <div class="section-title">
            <h2>Наши контакты</h2>
            <p>Свяжитесь с нами для получения дополнительной информации</p>
        </div>

        <div class="contact-grid">
            <div class="contact-info">
                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="contact-text">
                        <h3>Адрес</h3>
                        <p>1700 W Washington St, Phoenix, AZ 85007</p>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <div class="contact-text">
                        <h3>Телефон</h3>
                        <a href="tel:+16025551234">(602) 555-1234</a>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="contact-text">
                        <h3>Email</h3>
                        <a href="mailto:info@aznationalparty.org">info@aznationalparty.org</a>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="contact-text">
                        <h3>Часы работы</h3>
                        <p>Пн-Пт: 9:00 - 18:00<br>Сб: 10:00 - 15:00<br>Вс: выходной</p>
                    </div>
                </div>
            </div>

            <div class="map-container">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3329.234144106428!2d-112.0970039241718!3d33.4485379733365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x872b1223b5d3e6c5%3A0x8b1c4b1c0e3e5b1a!2sArizona%20State%20Capitol!5e0!3m2!1sen!2sus!4v1689876543210!5m2!1sen!2sus"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

    <!-- Scroll to top button -->
    <div class="scroll-top" id="scrollTop">
        <i class="fas fa-arrow-up"></i>
    </div>

    <?php include 'includes/footer.php'; ?>

    <script src="assets/js/main.js"></script>
</body>

</html>