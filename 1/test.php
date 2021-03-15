<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="css/zeroing.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/adaptive.css">
    <title>Document</title>
</head>

<body>
    <header>
        <div class="container">
            <a href="#" class="logo"><img src="css/img/logo2.png" alt="Логотип"></a>
            <ul class="mnu__top">
                <li><a href="">Главная</a></li>
                <li><a href="">О компании</a></li>
                <li><a href="">Услуги</a></li>
                <li><a href="">Контакты</a></li>
            </ul>
        </div>
    </header>
    <section id="main" style="background-image:url(https://images.unsplash.com/photo-1512621425532-58df884d97f0?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1489&q=80)">
        <div class="container">
            <div class="inner">
                <h1>Услуги такси</h1>
                <div class="description">Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты.
                    Назад о, пустился рукопись рыбными журчит последний, не океана моей всемогущая точках пунктуация lorem там,
                    первую меня инициал дал безопасную?<br>Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты.
                    Назад о, пустился рукопись рыбными журчит последний, не океана моей всемогущая точках пунктуация lorem там,
                    первую меня инициал дал безопасную?<br>Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты.
                    Назад о, пустился рукопись рыбными журчит последний, не океана моей всемогущая точках пунктуация lorem там,
                    первую меня инициал дал безопасную</div>
                <a href="№" class="btn">Отправить заявку</a>
            </div>
        </div>
    </section>
    <section id="content">
        <div class="container">
            <div class="inner__content">
                <h2 class="sign__in">Пройти опрос</h2>

                <?php

if (empty($_POST["login"] or $_POST["login"] = "")
    and empty($_POST["password"] or $_POST["password"] = "")) {
    echo "Все поля должны быть заполнены <br>";
    echo "<a href='sign_in.php'>Введите верные данные</a>";
    die();
}


$login = $_POST["login"];
$password = $_POST["password"];


$password = md5($password . "nbhgujl");
$mysql = new mysqli("127.0.0.1", "root", "root", "user_bd", 3306);
$query = $mysql->query("SELECT * FROM `usersdata` WHERE `password` = '$password' AND `login` = '$login'");
$result = $query->fetch_assoc();
if (empty($result)) {

    echo "Такой пользователь не существует <br><a href='sign_in.php'>Введите верные данные</a>";
    exit();
}

$mysql->close();
echo '
<form action="checkopros.php" method="post">
    <div><span>1. Как часто Вы пользуетесь услугами такси?</span><br>
        <input type="radio" name="q1" value="Несколько раз в месяц"><span>Несколько раз в месяц</span><br>
        <input type="radio" name="q1" value="Один раз в месяц"><span>Один раз в месяц</span><br>
        <input type="radio" name="q1" value="Несколько раз в год"><span>Несколько раз в год</span><br>
        <input type="radio" name="q1" value="Никогда"><span>Никогда</span></div>
    <br>
    <div><span>2. По какой причине Вы чаще всего пользуетесь услугами такси?</span><br>
        <input type="radio" name="q2"
               value="Поездка в аэропорт/ из аэропорта"><span>Поездка в аэропорт/ из аэропорта</span><br>
        <input type="radio" name="q2"
               value="Поездка за развлечением / домой"><span>Поездка за развлечением / домой</span><br>
        <input type="radio" name="q2" value="Поездка на работу/ с работы"><span>Поездка на работу/ с работы</span><br>
        <input type="radio" name="q2" value="В случае спешки"><span>В случае спешки</span><br></div>
    <br>
    <div><span>3. В какое время дня Вы больше всего пользуетесь услугами такси?</span><br>
        <input type="radio" name="q3" value="Утром, в первой половине дня"><span>Утром, в первой половине дня</span><br>
        <input type="radio" name="q3" value="После обеда"><span>После обеда</span><br>
        <input type="radio" name="q3" value="Вечером"><span>Вечером</span><br>
        <input type="radio" name="q3" value="Ночью"><span>Ночью</span></div>
    <br>
    <div><span>4. По каким причинам Вы больше не пользуетесь услугами такси?</span><br>
        <input type="radio" name="q4" value="Цена"><span>Цена</span><br>
        <input type="radio" name="q4" value="Неприятные чувства"><span>Неприятные чувства</span><br>
        <input type="radio" name="q4" value="Плохой опыт с таксистами"><span>Плохой опыт с таксистами</span></div>
    <br>
    <span>5. Каким способом Вы чаще всего заказываете такси?</span><br>
    <div><input type="radio" name="q5" value="По телефону"><span>По телефону</span><br>
        <input type="radio" name="q5" value="По Интернету"><span>По Интернету</span><br>
        <input type="radio" name="q5" value="Лично, помахав рукой"><span>Лично, помахав рукой</span><br>
        <input type="radio" name="q5" value="Я ищу стоянку такси"><span>Я ищу стоянку такси</span></div>
    <br>

    <input type="submit" value="Отправить">
</form>

'
?>
            </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="js.js"></script>
</body>

</html>