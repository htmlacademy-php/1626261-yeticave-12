<?php
function include_template($name, $data) {
    $name = 'templates/' . $name;
    $result = '';

    if (!file_exists($name)) {
        return $result;
    }

    ob_start();
    extract($data);
    require $name;

    $result = ob_get_clean();

    return $result;
}

function restOfTime($timeOff): string
{
    date_default_timezone_set('Europe/Moscow');
    setlocale(LC_ALL, 'ru_RU');
    $dtNow = date_create('now');
    $dtDiff = date_diff($timeOff, $dtNow);
    $timeLeft = date_format($dtDiff, "H:i");
    return $timeLeft;
}
?>