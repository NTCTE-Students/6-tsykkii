<?php
// Функция для чтения CSV-файла
function readCSV($filename) {
    if (file_exists($filename)) {
        if (($handle = fopen($filename, "r")) !== FALSE) {
            echo "<table border='1'>"; // Начало таблицы
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                echo "<tr><td>" . implode("</td><td>", $data) . "</td></tr>"; // Форматируем данные в таблицу
            }
            echo "</table>"; // Конец таблицы
            fclose($handle); // Закрываем файл
        }
    } else {
        echo "Ошибка: Файл не существует."; // Сообщение об ошибке
    }
}

// Читаем CSV-файл
readCSV("data.csv");