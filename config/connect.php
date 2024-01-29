<?php

/*
 * Делаем константы для хранения данных о базе данных
 * HOST - адрес для подключения к БД
 * USER - логин для доступа к БД
 * PASSWORD - пароль для доступа к БД
 * DATABASE - название базы данных, к которой мы подключаемся
 */

define('HOST', 'localhost');
define('USER', 'root');
define('PASSWORD', '');
define('DATABASE', 'banana');


$connect = mysqli_connect(HOST, USER, PASSWORD, DATABASE);


if (!$connect) {
    die('Error connect to database!');
}