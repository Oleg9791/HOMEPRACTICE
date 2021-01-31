    <?php
    $day = [
        "Monday" => "понедельник",
        "Tuesday" => "вторник",
        "Wednesday" => "среда",
        "Thursday" => "четверг",
        "Friday" => "пятница",
        "Saturday" => "суббота",
        "Sunday" => "воскресенье"
    ];
    $data = date("l");
    // echo $data;
    $today = $day[$data];
    echo $today . "<br>";
    echo $today = $day[date("l")];
    ?>
<?php
echo "<br>";
function day()
{


    $days = [
        "Sunday",
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday",
        "Saturday"

    ];
    return $todays = $days[date("w")];
}
echo "Сегодня " . day();
?>