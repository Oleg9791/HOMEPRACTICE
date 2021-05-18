<?php
spl_autoload_register(function ($class) {
    $pat = str_replace("\\", "/", "App/$class.php");
    if (file_exists($pat)) {
        include $pat;
    }
});