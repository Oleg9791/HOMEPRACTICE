<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .r {
            color: red;
        }

        .g {
            color: green;
        }

        .y {
            color: greenyellow;
        }
        .t {
            color: fuchsia;
        }
    </style>
</head>

<body>


    <?php
    $factorial = $_POST["a"];

    $fl = 1;
    for ($i = 1; $i < $factorial; $i++) {
        $fl = $fl * ($i + 1);
    }
    echo "Будет равен  " . $fl . "<br>";
    echo "<br\n>";

    $i = 1;
    $fl = 1;
    while ($i < $factorial) {
        $fl = $fl * ($i + 1);
        $i++;
    }
    echo "<b class=t>Будет равен<b>  " . $fl . "<br>";
    echo "<br\n>";

    $fl = 1;
    $i = 1;
    do {
        $fl = $fl * ($i + 1);
        $i++;
    } while ($i < $factorial);
    echo "<b><i class=y>Будет равен<i><b>  " . $fl . "<br>";
    echo "<br\n>";

    $fl = 1;
    $i = 1;
    for ($i = 1; $i < $factorial; $i++) :
        $fl = $fl * ($i + 1);

    endfor;
    echo "<h5 class=g>Будет равен<h5>  " . $fl . "<br>";
    echo "<br\n>";
    $fl = 1;
    $i = 1;
    while ($i < $factorial) :
        $fl = $fl * ($i + 1);
        $i++;
    endwhile;
    echo "<h4 class=r>Будет равен<h4>  " . $fl . "<br>";
    echo "<br\n>";

    ?>
</body>

</html>