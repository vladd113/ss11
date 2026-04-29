<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Сортировка имен</title>
</head>
<body>
    <h1>Список имен</h1>

    <?php

    $names = [
        "соня", "влад", "Борис", "Саша", "маша",
        "Миша", "богдан", "кирилл", "олег", "Андрей" ];
    sortCyrillicArray($names);

    function sortCyrillicArray(&$array) {
        usort($array, function($a, $b) {
            $wordA = mb_strtolower($a, 'UTF-8');
            $wordB = mb_strtolower($b, 'UTF-8');
            return $wordA <=> $wordB;
        });
    }
    function makeFirstLetterBig($string) {
        $firstLetter = mb_substr($string, 0, 1, 'UTF-8');
        $firstLetterBig = mb_strtoupper($firstLetter, 'UTF-8');
        $restOfWord = mb_substr($string, 1, null, 'UTF-8');
        return $firstLetterBig . $restOfWord;
    }
    ?>

    <ul>
        <?php
        foreach ($names as $name) {
            $beautifulName = makeFirstLetterBig($name);
        ?>
            <li><?= $beautifulName ?></li>
        <?php } ?>
    </ul>
</body>
</html>
        