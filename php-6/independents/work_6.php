<?php
// Функция для копирования файла
function copyFile($source, $destination) {
    if (file_exists($destination)) {
        echo "Предупреждение: Файл назначения уже существует."; // Проверка на существование нового файла
    } else {
        copy($source, $destination); // Копируем файл
        echo "Файл успешно скопирован."; // Успешное сообщение
    }
}

// Копируем файл
copyFile("work.txt", "copy_example.txt");