<?php
// Функция для переименования файла
function renameFile($oldName, $newName) {
    if (file_exists($newName)) {
        echo "Ошибка: Файл с новым именем уже существует."; // Проверка на существование нового имени
    } else {
        rename($oldName, $newName); // Переименовываем файл
        echo "Файл успешно переименован."; // Успешное сообщение
    }
}

// Переименовываем файл
renameFile("copy_example.txt", "renamed_example.txt");