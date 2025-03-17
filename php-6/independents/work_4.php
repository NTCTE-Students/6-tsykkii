<?php
// Функция для подсчета строк в файле
function countLinesInFile($filename) {
    if (file_exists($filename)) {
        $lines = count(file($filename)); // Подсчитываем строки
        echo "Количество строк в файле: $lines"; // Выводим результат
    } else {
        echo "Ошибка: Файл не существует."; // Сообщение об ошибке
    }
}

// Подсчитываем строки в файле
countLinesInFile("work.txt");