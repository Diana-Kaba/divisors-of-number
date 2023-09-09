<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Дільники числа</title>
</head>
<body>
    <h2>3.8 Дільники числа</h2>
    <?php
    $n = rand(10, 100);

    echo "<p>Дільники числа $n:</p>";
    echo "<p>";
    for ($k = 1; $k <= $n; $k++) { 
        if ($n % $k === 0) {
            echo "<strong>$k </strong>";
            continue;
        }
    }
    echo "</p>";
    ?>
</body>
</html>