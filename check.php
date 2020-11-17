<?php 
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$message = filter_input(INPUT_POST, 'message');
$city = filter_input(INPUT_POST, 'city');
$age = filter_input(INPUT_POST, 'age');

if (empty($name)) {
    $errorName = '*Необходимо заполнить';
} else if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
    $errorName = "*Используйте только буквы";
}
if (empty($email)) {
    $errorEmail = '*Необходимо заполнить';
} else if (!valid_email($email)) {
    $errorEmail = "*Неправильный email";
}
if (empty($message)) {
    $errorMessage = '*Необходимо заполнить';
}
if (empty($city)) {
    $errorCity = '*Необходимо выбрать';
}
if (empty($age)) {
    $errorAge = '*Необходимо выбрать';
}





function valid_email($str) {
    return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
}

include 'form.php';

?>