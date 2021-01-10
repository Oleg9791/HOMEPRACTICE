<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="tab">
        <?php
        $stroka = $_POST["a"];
        $stolbec = $_POST["a1"];
        $a = $_POST["a"];
        $a1 = $_POST["a1"];
        $table = '<table class="t" border="1">';

        function zerno($a, $a1)
        {

            $n = $a * $a1;
            $z = 0;
            
            
            for ($i = 0; $i < $n; $i++) {
                $z = $z + (2 ** $i);
            }
            return $z;
            
        }
        for ($tr = 1; $tr <= $stroka; $tr++) {
            $table .= '<tr>';
            for ($td = 1; $td <= $stolbec; $td++) {
                $table .= '<td>' . '</td>';
            }
            $table .= '</tr>';
        }
        $table .= '</table>';
        echo $table;
        ?>
    </div>
    <div class="text">
        <img src="kolos.png" alt="картинка">
        <?php
        echo zerno($a, $a1)/1e6  . "  " . "тонн зерна"."<br>"."<br>";
        echo  "количество зерен"."  " . zerno($a, $a1)  ;
        ?>
    </div>

</body>

</html>