<?php
// Основные настройки
define('SITE_TITLE', 'Национальная партия Седоны');
define('SITE_SLOGAN', 'За сильную и независимую Седону');
define('CURRENT_YEAR', date('Y'));

// Контакты
define('PARTY_PHONE', '(602) 555-1234');
define('PARTY_EMAIL', 'info@aznationalparty.org');
define('PARTY_ADDRESS', '1700 W Washington St, Sedona, AZ 85007');


// Настройки выборов (храним в файле)
define('ELECTION_DATA_FILE', __DIR__.'/election_data.json');

// Загружаем данные о выборах
function getElectionData() {
    if (file_exists(ELECTION_DATA_FILE)) {
        return json_decode(file_get_contents(ELECTION_DATA_FILE), true);
    }
    return ['date' => '2024-11-05']; 
}

function saveElectionData($data) {
    file_put_contents(ELECTION_DATA_FILE, json_encode($data));
    return true;
}

function getNextElectionDate() {
    $electionData = getElectionData();
    return new DateTime($electionData['date']);
}

// Простенькая авторизация (в реальном проекте используйте БД)
define('ADMIN_LOGIN', 'admin');
define('ADMIN_PASSWORD_HASH', password_hash('secret123', PASSWORD_DEFAULT));
?>
