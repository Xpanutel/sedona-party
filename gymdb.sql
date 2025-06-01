-- Таблица пользователей системы 
create table users (
    id int auto_increment primary key,
    name varchar(150) not null,
    email varchar(100) not null,
    password varchar(100) not null,
    role varchar(50) not null
);
-- Таблица абонементов
create table memberships (
    id int auto_increment primary key,
    name varchar(150) not null,
    duration varchar(150) not null,
    price int not null
);
-- Таблица клиентов
create table clients (
    id int auto_increment primary key,
    user_id int not null,
    membership_id int not null,
    start_date datetime not null,
    end_date datetime not null,
    foreign key (user_id) references users (id),
    foreign key (membership_id) references memberships (id),
);
-- Таблица посещений
create table visits (
    id int auto_increment primary key,
    client_id int not null,
    visit_date datetime not null,
    foreign key (client_id) references clients (id)
)
-- Таблица продаж
create table sales (
    id int auto_increment primary key,
    membership_id int not null,
    sale_date datetime not null,
    amount int not null,
    foreign key (membership_id) references memberships (id),
);