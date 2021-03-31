<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm">

        </div>
        <div class="col-sm">
            <form action="add.php" method="post">
                <b>Из какого вы города?</b><br>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping">CITY</span>
                    <input type="text" name="city" class="form-control" placeholder="CITY" aria-label="Username"
                           aria-describedby="addon-wrapping">
                </div>
                <b>Ваш email:</b><br>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping">@</span>
                    <input type="text" name="email" class="form-control" placeholder="EMAIL" aria-label="Username"
                           aria-describedby="addon-wrapping">
                </div>
                <b>Ваш пол:</b><br>
                <div class="input-group">
                    <span  class="input-group-text" id="addon-wrapping">SEX</span>
                    <select id="sex" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" name="sex">
                        <option hidden=""></option>
                        <option value="Man">Man</option>
                        <option value="Woman">Woman</option>
                    </select>
                </div>
                <b>Ваш возраст:</b><br>
                <div class="input-group">
                    <span class="input-group-text" id="addon-wrapping">AGE</span>
                    <select id="age" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" name="age">
                        <option hidden=""></option>
                    <option value="20-30">20-30</option>
                    <option value="30-40">30-40</option>
                    <option value="40-50">40-50</option>
                    </select>

                </div>
                <br>
                <input type="submit" class="btn btn-warning" value="Добавить">
            </form>

        </div>
        <div class="col-sm">

        </div>
    </div>
</div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>
</body>
</html>
