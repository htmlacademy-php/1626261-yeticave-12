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

function restOfTime($timeOff)  {
    $dtNow = strtotime('now');
    $dtEnd = $timeOff;
    $dtDiff = $dtEnd - $dtNow;
    $timeLeft = [floor($dtDiff/3600) , floor(($dtDiff % 3600) / 60)];
    $hours = str_pad($timeLeft[0], 2, "0", STR_PAD_LEFT);
    $minutes = str_pad($timeLeft[1], 2, "0", STR_PAD_LEFT);
    
    return [$hours, $minutes];
}

function formatSum(float $sum): string
{
    $price = ceil($sum);
    $priceFormated = number_format($price, 0, ',', ' '). " ₽";

    return htmlspecialchars($priceFormated);
}
?>