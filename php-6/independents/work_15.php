<?php
$inputFile = 'work.txt'; 
$outputFile = 'log.txt'; 
$search = 'староеСлово'; 
$replace = 'новоеСлово'; 

$content = file_get_contents($inputFile);

if ($content === false) {
    die("Ошибка чтения файла.");
}

$result = str_replace($search, $replace, $content);

if (file_put_contents($outputFile, $result) === false) {
    die("Ошибка записи в файл.");
}

echo "Замена выполнена, результат сохранен в $outputFile.";
?>