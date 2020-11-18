<?php
include_once('functions.php');
include_once('data.php');

$page_content = include_template('main.php', [
    'lots' => $lots,
    'staff' => $staff
]);
$layout_content = include_template('layout.php', [
    'mainContent' => $page_content,
    'staff' => $staff,
    'title' => 'Yeti Cave - главная страница',
    'is_auth' => $is_auth,
    'user_name' => $user_name
]);

print($layout_content);

?>