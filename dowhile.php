<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Do While</title>
</head>

<body>
    <h1>Do While</h1>
    <?php
    echo "Perulangan 1 sampai 10 <br />";
    $i = 1;
    do {
        echo "Perulangan ke: " . $i . '<br />';
        $i++;
    } while ($i <= 10);
    ?>
</body>

</html>