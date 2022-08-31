<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$name = $_GET['name'];
$mail = $_GET['mail'];
$age = intval($_GET['age']);

$needle1 = '@';
$needle2 = '.';

if((mb_strlen($name) > 3) && (is_numeric($age)) && (strpos($mail ,$needle1))&& (strpos($mail , $needle2))){
    echo "ACCESS GRANTED";
}else{
    echo "ACCESS DENIED";
};



?>