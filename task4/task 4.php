<?php 

function cleanArray($array) {
    $result = []; 
    
    foreach ($array as $item) {
        $lowerKey = mb_strtolower($item, 'UTF-8');

        $firstLetter = mb_substr($item, 0, 1, 'UTF-8');
        $isCapitalized = ($firstLetter === mb_strtoupper($firstLetter, 'UTF-8'));

        if (!isset($result[$lowerKey])) {
            $result[$lowerKey] = $item; }
        else {
            $existingItem = $result[$lowerKey];
            $existingFirstLetter = mb_substr($existingItem, 0, 1, 'UTF-8');
            $existingIsCapitalizied = ($existingFirstLetter === mb_strtoupper($existingFirstLetter, 'UTF-8'));

            if ($isCapitalized && !$existingIsCapitalizied) {
                $result[$lowerKey] = $item; }
        }
    }
    return array_values($result);
}

function generateUniquePairs($arr1, $arr2, $amount) {
    $pairs = [];

    shuffle($arr1);
    shuffle($arr2);

    $limit = min(count($arr1), count($arr2), $amount);

    for ($i = 0; $i < $limit; $i++) {
        $keyItem = $arr1[$i];
        $valueItem = $arr2[$i];

        $pairs[$keyItem] = $valueItem;
    }
    return $pairs;
}

$names = [ "Алексей", "алексей", "Богдан", "богдан", "БОГДАН",
    "Виктор", "виктор", "Григорий", "Дмитрий", "дмитрий",
    "Евгений", "Илья", "илья", "Максим", "максим",
    "Олег", "олег", "Роман", "роман", "Сергей", "сергей",
    "Александр", "александр", "Никита", "Владимир" 
];

$surnames = [
    "иванов", "Иванов", "Петров", "петров", "ПЕТРОВ",
    "Сидоров", "сидоров", "Смирнов", "смирнов", "попов",
    "Попов", "Соколов", "Михайлов", "михайлов", "Новиков",
    "новиков", "Морозов", "Волков", "волков", "Алексеев",
    "Лебедев", "лебедев", "Козлов", "козлов", "Зайцев"
];

$cleanNames = cleanArray($names);
$cleanSurnames = cleanArray($surnames);

$finalPairs = generateUniquePairs($cleanSurnames, $cleanNames, 10);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Генератор пар</title>
</head>
<body>

    <h2>Случайные пары клиентов:</h2>
    
    <ul>
        <?php 
        
        foreach ($finalPairs as $surname => $name) { 
        ?>
            <li><?= $surname ?> <?= $name ?></li>
        <?php } ?>
    </ul>

</body>
</html>

