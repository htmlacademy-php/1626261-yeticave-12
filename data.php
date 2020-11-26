<?php
$is_auth = rand(0, 1);

$user_name = "Marco_Dolya";
$staff = ['Доски и лыжи' , 'Крепления' , 'Ботинки' , 'Одежда' , 'Инструменты' , 'Разное'];
$lots = [
           [
            'name' => '2014 Rossignol District Snowboard' ,
            'categories' => $staff[0] ,
            'price' => 10999 ,
            'image' => 'img/lot-1.jpg'
           ],

           [
            'name' => 'DC Ply Mens 2016/2017 Snowboard' ,
            'categories' => $staff[0] ,
            'price' => 159999 ,
            'image' => 'img/lot-2.jpg'
           ],

           [
            'name' => 'Крепления Union Contact Pro 2015 года размер L/XL' ,
            'categories' => $staff[1] ,
            'price' => 8000 ,
            'image' => 'img/lot-3.jpg'
           ],

           [
            'name' => 'Ботинки для сноуборда DC Mutiny Charocal' ,
            'categories' => $staff[2] ,
            'price' => 10999 ,
            'image' => 'img/lot-4.jpg'
           ],

           [
            'name' => 'Куртка для сноуборда DC Mutiny Charocal' ,
            'categories' => $staff[3] ,
            'price' => 7500 ,
            'image' => 'img/lot-5.jpg'
           ],

           [
            'name' => 'Маска Oakley Canopy' ,
            'categories' => $staff[5] ,
            'price' =>  5400 ,
            'image' => 'img/lot-6.jpg'
           ]

];

function formatSum(float $sum): string
{
    $price = ceil($sum);
    $priceFormated = number_format($price, 0, ',', ' '). " ₽";

    return htmlspecialchars($priceFormated);
}

?>