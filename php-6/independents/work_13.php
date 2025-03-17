<?php
// Функция для обновления JSON-файла
function updateJsonFile($filename, $newElement) {
    if (file_exists($filename)) {
        $data = json_decode(file_get_contents($filename), true); // Читаем JSON
        $data[] = $newElement; // Добавляем новый элемент
        file_put_contents($filename, json_encode($data)); // Сохраняем обратно
    } else {
        echo "Ошибка: Файл не существует."; // Сообщение об ошибке
    }
}

// Добавляем новый элемент в JSON
updateJsonFile("data.json", "Новый элемент");