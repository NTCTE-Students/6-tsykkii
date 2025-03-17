<?php
// Функция для добавления строки в конец файла
function appendToFile($filename, $data) {
    file_put_contents($filename, $data . PHP_EOL, FILE_APPEND); // Добавляем строку и перенос
}

// Добавляем строку в файл
appendToFile("work.txt", "Новая строка.");