<?php
// Проверка загрузки файла
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $file = $_FILES['file'];
    $allowedTypes = ['image/jpeg', 'image/png', 'image/gif']; // Разрешенные типы
    $maxSize = 2 * 1024 * 1024; // Максимальный размер 2 MB

    // Проверяем тип и размер файла
    if (in_array($file['type'], $allowedTypes) && $file['size'] <= $maxSize) {
        move_uploaded_file($file['tmp_name'], "uploads/" . basename($file['name'])); // Перемещаем загруженный файл
        echo "Файл успешно загружен."; // Успешное сообщение
    } else {
        echo "Ошибка: Неверный тип файла или он превышает лимит."; // Сообщение об ошибке
    }
}
?>

<!-- Форма для загрузки файла -->
<form method="POST" enctype="multipart/form-data">
    <input type="file" name="file" required>
    <input type="submit" value="Загрузить">
</form>