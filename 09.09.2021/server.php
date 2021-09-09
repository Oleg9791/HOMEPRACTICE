<?php
//echo $_SERVER['HTTP_USER_AGENT'];

if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
    echo 'Вы используете Internet Explorer.<br />';
}else{
    echo 'Вы не используете Internet Explorer.<br />';

}