<?php
require_once 'functions.php';

$names = [
    "Соня", "Соня",
    "Влад", "влад", "ВЛАД",
    "Борис", "БОРИС",    
    "Богдан", "Богдан" 
];

$strictResult = removeDuplicateNames($names, false);
$ignoreCaseResult = removeDuplicateNames($names, true);

?>

<DOCTYPE html>
<html lang="ru"> 
<head> 
    <meta charset="UTF-8"> 
    <title>Сортировка имен</title> 
</head>
<body> 
    <h1>Списки имен</h1>

    <h3>Оригинальный массив:</h3>
        <ul>
            <?php 
            foreach ($names as $name): ?>
                <li><?= $name ?></li>
            <?php endforeach; ?>
        </ul>
        
    <h3>Строгий режим (учитывает регистр):</h3>
        <ul> 
            <?php 
            foreach ($strictResult as $name): ?>
                <li><?= $name ?></li>
            <?php endforeach; ?>
        </ul>

    <h3>Мягкий режим (игнорирует регистр):</h3>
        <ul> 
            <?php 
            foreach ($ignoreCaseResult as $name): ?>
                <li><?= $name ?></li>
            <?php endforeach; ?>
        </ul>
</body>
</html>