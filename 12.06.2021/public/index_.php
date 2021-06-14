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
<?php
include "../vendor/autoload.php";
if (isset($_POST['bel'])) {
    $dollar = new Classes\Converter($_POST['bel']);
    print_r($_POST);

}
//echo $dollar->dollar();

?>
<form action="?" method="post">
    <input type="text" name="bel"
        <?php if (isset($_POST['bel'])): ?>
            value="<?= $_POST['bel'] ?>"
        <?php endif; ?>
    >

    <select name="convert">
        <option value="dollar">USD</option>
        <option value="euro">EUR</option>
        <option value="rub">RUB</option>
        <option value="chf">CHF</option>
        <option value="aud">AUD</option>
    </select>
    <input type="text" name="result"

        <?php if (isset($_POST['convert'])): ?>
            value="<?= $dollar->{$_POST['convert']}() ?>"
        <?php endif; ?>
    >
    
    <input type="submit" value="ok">
</form>
</body>
</html>
