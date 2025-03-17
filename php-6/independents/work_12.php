<?php
// Функция для записи сообщения в лог-файл
function logMessage($message) {
    $logFile = "log.txt"; // Имя лог-файла
    $date = date('Y-m-d H:i:s'); // Получаем текущее время
    file_put_contents($logFile, "[$date] $message" . PHP_EOL, FILE_APPEND); // Записываем в лог
}

// Записываем сообщение в лог-файл
logMessage("Произвольное сообщение.");