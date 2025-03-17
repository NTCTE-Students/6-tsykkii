<?php
// Функция для записи строки в файл
function writeToFile($filename, $data) {
    file_put_contents($filename, $data); // Перезаписываем файл
}

// Записываем строку в файл
writeToFile("work.txt", "Hello, World!");