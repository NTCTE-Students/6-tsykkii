<?php
// Функция для удаления файла
function deleteFile($filename) {
    if (file_exists($filename)) {
        unlink($filename); // Удаляем файл
        echo "Файл успешно удалён."; // Успешное сообщение
    } else {
        echo "Ошибка: Файл не существует."; // Сообщение об ошибке
    }
}

// Удаляем файл
deleteFile("work.txt");