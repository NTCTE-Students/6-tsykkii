<?php
// Функция для поиска слова в файле
function searchWordInFile($filename, $word) {
    if (file_exists($filename)) {
        $content = file_get_contents($filename); // Читаем содержимое файла
        $count = substr_count($content, $word); // Подсчитываем вхождения слова
        echo "Слово '$word' встречается $count раз."; // Выводим результат
    } else {
        echo "Ошибка: Файл не существует."; // Сообщение об ошибке
    }
}

// Ищем слово в файле
searchWordInFile("work.txt", "Hello");