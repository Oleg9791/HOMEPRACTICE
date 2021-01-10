<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    :root {
        --cell-size: 70px;
    }

    .chess td {
        background-color: white;
        border: 1px solid black;
    }

    .chess tr td:hover {
        background-color: rgb(123, 206, 14) !important;
        background-image: url(рр.png);
        background-size: 60px;
        background-position: center;
        background-repeat: no-repeat;

    }

    .chess tr:nth-child(even) td:nth-child(odd),
    .chess tr:nth-child(odd) td:nth-child(even) {
        background-color: black;
        width: var(--cell-size);
        height: var(--cell-size);
    }

    .chess tr:last-child td,
    .chess tr:first-child td {
        height: calc(var(--cell-size) / 3);
        border: 0px;
        text-align: center;
    }

    table {
        border: calc(var(--cell-size) / 6) solid black;
        border-collapse: collapse;
    }
</style>

<body>


    <table class="chess" cellspacing="0">
        <?php
        $a = $_POST["a"];
        $a1 = $_POST["a1"];
        $stroka = $a;
        $stolbec = $a1;
        for ($i = 0; $i < $stroka; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $stolbec; $j++) echo "<td></td>";
            echo "</tr>";
        }

        ?>
    </table>

    <?php
    $a = $_POST["a"];
    $a1 = $_POST["a1"];

    function zerno($a, $a1)
    {

        $n = $a * $a1;
        $z = 0;
        


        for ($i = 0; $i < $n; $i++) {
            $z = $z + (2 ** $i);
        }
        return $z;
    }
    echo zerno($a, $a1,) / 1e6 . "  " . "тонн зерна" . "<br>";

    echo zerno($a, $a1) . " " . "Количество зерен";
    ?>
</body>

</html>