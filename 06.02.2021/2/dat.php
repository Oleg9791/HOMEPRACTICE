<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="?" method="post">
    <input type="text" name="dt">
    <input type="submit" value="ok">
    <?php
//    $data = explode(".", $_POST["dt"]);
    //echo $data;
//        print_r($data);
    //  echo   sort($data);
//    foreach ($data as $value) {
//        $buf = $value[0];
//        $value[0] = $value[2];
//        print_r($value[2]) ;
//        $value[2] = $value[1];
//        $value[1] = $buf;
//    }
//    print_r($data);
        $str = "14.07.1981";
        $regexp = "/^(\d{2})\.(\d{2})\.(\d{4})/";
        if (preg_match($regexp, $str)) {
            $q = preg_replace($regexp, "$3.$1.$2",$str);
            echo "новая дата" . $q;
        } else {
            echo "введите верную дату";
        }

    ?>
</form>
</body>
</html>
