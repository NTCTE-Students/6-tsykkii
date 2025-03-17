<?php
// Функция для чтения содержимого файла
function readFileContent($filename) {
    if (file_exists($filename)) {
        $content = file_get_contents($filename); // Читаем содержимое файла
        echo nl2br($content); // Выводим содержимое с переносами строк
    } else {
        echo "Ошибка: Файл не существует."; // Сообщение об ошибке
    }
}

// Используем функцию
readFileContent("work.txt");
?>