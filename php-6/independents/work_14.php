<?php
// Функция для резервного копирования файлов
function backupFiles($sourceDir, $backupDir) {
    $date = date('Y-m-d');
    $backupPath = $backupDir . "/backup_$date"; // Директория для резервной копии
    mkdir($backupPath, 0777, true); // Создаем директорию резервной копии

    foreach (scandir($sourceDir) as $file) {
        if ($file !== '.' && $file !== '..') {
            copy("$sourceDir/$file", "$backupPath/$file"); // Копируем файлы
        }
    }
    echo "Резервное копирование выполнено."; // Успешное сообщение
}
// Резервное копирование файлов из указанной папки
backupFiles("sourcedirectory", "backupdirectory");