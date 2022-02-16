<?php

header('Content-Type: text/html; charset=utf-8'); // кодировка UTF-8
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
mb_internal_encoding("UTF-8");

// Корневая директория для TelegramSiteHelper
// Root dir for TelegramSiteHelper
// IN THIS VERSION OF TelegramSiteHelper you can write dirname(_FILE_) here...
$tbRootDir="/var/www/prote/data/www/prote.ua/telegram/telegramSiteHelper";

// Пароль для авторизации менеджера через телеграм бота
// Password for manager auth (in Telegram bot), you must write some non-so-easy
$tbManagerPassword="123456";

// API Token, который вы получили у @BotFather
// API Token, you can get it from user @BotFather (in Telegram App)
$tbAPIToken="5244483800:AAF7i5T9LEWFUjKDTJBosLPg7QIUcKDjpNo";

// Название языкового файла (в папке /localization)
// Name of localization file (you can find it in /localization folder)
$tbLanguageFile="ru.php";

//Для использования Русского языка раскомментируйте следующие строки:
//$tbLanguageFile="ru.php"; 

// Тип базы данных: «sqlite» или «mysql»
// Database type: «sqlite» or «mysql»
$dbUse="mysqli";
 



// Если вы используете MySQL - укажите ниже хост, имя базы, логин и пароль
// If you use MySQL, write here host, dbname, login, password
$mysqlHost="127.0.0.1";
$mysqlDB="telegramchat";
$mysqlLogin="dima";
$mysqlPassword=";flyjcnm";





#######################################################################
// Ниже ничего исправлять не нужно!!!

// Создаем папку для обновлений чатов
if(!is_dir($tbRootDir."/chatUpdates")){
		mkdir($tbRootDir."/chatUpdates");
}



require_once($tbRootDir."/localization/".$tbLanguageFile);









?>