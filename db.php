<?php
$dbhost   = "localhost";
$dbname   = "lab4";
$username = "root";
$password = "";

$db = new PDO("mysql:host=$dbhost; dbname=$dbname", $username, $password);

// *books
function getCardsAll() {
    global $db;
    $cards = $db->query("SELECT * FROM cards");
    return $cards;
}
function getCardsAll2() {
    global $db;
    $cards2 = $db->query("SELECT * FROM cards2");
    return $cards2;
}
function getAsideAll() {
    global $db;
    $aside = $db->query("SELECT * FROM aside");
    return $aside;
}
// *stationary
function getCardsAll3() {
    global $db;
    $cards3 = $db->query("SELECT * FROM cards3");
    return $cards3;
}
function getCardsAll4() {
    global $db;
    $cards4 = $db->query("SELECT * FROM cards4");
    return $cards4;
}
function getAsideAll2() {
    global $db;
    $aside2 = $db->query("SELECT * FROM aside2");
    return $aside2;
}
// *souvenir
function getCardsAll5() {
    global $db;
    $cards5 = $db->query("SELECT * FROM cards5");
    return $cards5;
}
function getCardsAll6() {
    global $db;
    $cards6 = $db->query("SELECT * FROM cards6");
    return $cards6;
}
function getAsideAll3() {
    global $db;
    $aside3 = $db->query("SELECT * FROM aside3");
    return $aside3;
}