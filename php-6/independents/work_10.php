<?php
// Функция для записи данных в CSV-файл
function writeToCSV($filename, $data) {
    $file = fopen($filename, "w"); // Открываем файл для записи
    foreach ($data as $row) {
        fputcsv($file, $row); // Записываем строки
    }
    fclose($file); // Закрываем файл
}

// Пример массива данных
$data = [
    ["Имя", "Возраст"],
    ["Алексей", 30],
    ["Мария", 25]
];

// Записываем данные в CSV-файл
writeToCSV("output.csv", $data);