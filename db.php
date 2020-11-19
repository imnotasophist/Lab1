<?php
$dbhost   = "localhost";
$dbname   = "lab4";
$username = "root";
$password = "";

$db = new PDO("mysql:host=$dbhost; dbname=$dbname", $username, $password);

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