<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Список имен</title>
</head>
<body>
    <h1>Список клиентов</h1>

    <ul>
        <?php
        $names = [
   "Соня", "Влад", "Борис", "Саша", "Маша",
            "Миша", "Богдан", "Кирилл", "Олег", "Андрей" ];

        foreach ($names as $name) {
        ?>
        <li>
                <?php echo $name; ?>
        </li>

    <?php
    }
    ?>

    </ul>    
</body>
</html>        