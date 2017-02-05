<?php
$resultUri = '';
if (!empty($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $f = fopen('subscribed.list', 'a+');
    fwrite($f, $_POST['email'] . PHP_EOL);
    fclose($f);
    $resultUri = '?subscribed';
}
header('Location: http://wum.com.ua/' . $resultUri, true, 301);