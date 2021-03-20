<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="css/zeroing.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/adaptive.css">
    <title>Document</title>
</head>

<body>
<header>
    <div class="container">
        <a href="#" class="logo"><img src="css/img/logo2.png" alt="Логотип"></a>
        <!-- <div class="hamburger" id="hamburger">
            <span class="line" ></span>
            <span class="line" ></span>
            <span class="line" ></span>
        </div> -->
        <ul class="mnu__top">
            <li><a href="">Главная</a></li>
            <li><a href="">О компании</a></li>
            <li><a href="">Услуги</a></li>
            <li><a href="">Контакты</a></li>
        </ul>
    </div>
</header>
<section id="main"
         style="background-image:url(https://images.unsplash.com/photo-1512621425532-58df884d97f0?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1489&q=80)">
    <div class="container">
        <div class="inner">
            <h1>Услуги такси</h1>
            <div class="description">Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные
                тексты.
                Назад о, пустился рукопись рыбными журчит последний, не океана моей всемогущая точках пунктуация lorem
                там,
                первую меня инициал дал безопасную?<br>Далеко-далеко за словесными горами в стране гласных и согласных
                живут рыбные тексты.
                Назад о, пустился рукопись рыбными журчит последний, не океана моей всемогущая точках пунктуация lorem
                там,
                первую меня инициал дал безопасную?<br>Далеко-далеко за словесными горами в стране гласных и согласных
                живут рыбные тексты.
                Назад о, пустился рукопись рыбными журчит последний, не океана моей всемогущая точках пунктуация lorem
                там,
                первую меня инициал дал безопасную
            </div>
            <a href="" class="btn">Отправить заявку</a>
        </div>
    </div>
</section>
<section id="content">
    <div class="container">
        <div class="inner__content">

            <?php
                    foreach ($variable as $key => $value) {
                        # code...
                    }
            ini_set('display_errors', 'Off');

            if (
                empty($_POST["name"] or $_POST["name"] = "") or empty($_POST["login"] or $_POST["login"] = "")
                or empty($_POST["password"] or $_POST["password"] = "")
            ) {
                echo "<h2 class='reg'>Все поля должны быть заполнены</h2> <br>";
                echo "<a class='reg' href='main.php'>Введите верные данные</a>";
                die();
            }
            $name = $_POST["name"];
            $login = $_POST["login"];
            $password = $_POST["password"];
            // Хэширование пароля перед записью в базу данных с использованием соли
            $password = md5($password . "nbhgujl");
            // Подключение к базе данных
            $mysql = new mysqli("127.0.0.1", "root", "root", "user_bd", 3306);
            // Запрос к базе данных на сохранение введенных имени, логина и пароля в соответствующие поля таблицы базы данных
            $mysql->query("INSERT INTO `usersdata` (`name`, `login`, `password`) VALUES ('$name', '$login', '$password')");
            $mysql->close();
            echo '
                <h2 class="sign__in">Войти</h2>
                <form action="test.php" method="POST">
                    <input tabindex="1" type="text" name="login" placeholder="Login "><br><br>
                    <input tabindex="2" type="password" name="password" placeholder="Password"><br><br>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedDisabled" checked disabled>
                        <label class="form-check-label" for="flexCheckCheckedDisabled">
                            <span class="inner__slider">
                                Я согласен(на) со всеми правилами и условиями
                            </span><br>
                    </div>
                    <button class="form-button" tabindex="3">Sign in</button>
                </form>'

            ?>            </div>
    </div>
</section>
<footer>
    <div class="container">
        <div class="inner__footer">
            <ul>
                <li><a href="#">Пункт меню</a></li>
                <li><a href="#">Пункт меню</a></li>
                <li><a href="#"><img src="css/img/fb.png"></a></li>
                <li><a href="#">Пункт меню</a></li>
                <li><a href="#">Пункт меню</a></li>
                <li><a href="#"><img src="css/img/instagram.png"></a></li>
                <li><a href="#">Пункт меню</a></li>
                <li><a href="#">Пункт меню</a></li>
                <li><a href="#"><img src="css/img/email.png"></a></li>
                <li><a href="#">Пункт меню</a></li>
                <li><a href="#">Пункт меню</a></li>
                <li><a href="#"><img src="css/img/Twitter.png"></a></li>
            </ul>
            <div class="footer__text">
                Онлайн-опрос © 2021 ZaicevOleg Все права защищены
            </div>
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>
<script src="js.js"></script>
</body>

</html>