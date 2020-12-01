<?php
$is_auth = rand(0, 1);

$user_name = "Marco_Dolya";
$staff = ['Доски и лыжи' , 'Крепления' , 'Ботинки' , 'Одежда' , 'Инструменты' , 'Разное'];
$lots = [
           [
            'name' => '2014 Rossignol District Snowboard' ,
            'categories' => $staff[0] ,
            'price' => 10999 ,
            'image' => 'img/lot-1.jpg',
            'timeOff' => '2020-12-01'
           ],

           [
            'name' => 'DC Ply Mens 2016/2017 Snowboard' ,
            'categories' => $staff[0] ,
            'price' => 159999 ,
            'image' => 'img/lot-2.jpg',
            'timeOff' => '2020-12-14'
           ],

           [
            'name' => 'Крепления Union Contact Pro 2015 года размер L/XL' ,
            'categories' => $staff[1] ,
            'price' => 8000 ,
            'image' => 'img/lot-3.jpg',
            'timeOff' => '2020-12-11'
           ],

           [
            'name' => 'Ботинки для сноуборда DC Mutiny Charocal' ,
            'categories' => $staff[2] ,
            'price' => 10999 ,
            'image' => 'img/lot-4.jpg',
            'timeOff' => '2020-12-09'
           ],

           [
            'name' => 'Куртка для сноуборда DC Mutiny Charocal' ,
            'categories' => $staff[3] ,
            'price' => 7500 ,
            'image' => 'img/lot-5.jpg',
            'timeOff' => '2020-12-03'
           ],

           [
            'name' => 'Маска Oakley Canopy' ,
            'categories' => $staff[5] ,
            'price' =>  5400 ,
            'image' => 'img/lot-6.jpg',
            'timeOff' => '2020-12-05'
           ]

];

function formatSum(float $sum): string
{
    $price = ceil($sum);
    $priceFormated = number_format($price, 0, ',', ' '). " ₽";

    return htmlspecialchars($priceFormated);
}

?>