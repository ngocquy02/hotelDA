<?php
//Set up the database connection

$mysql_username = "root";
$mysql_password = "";
$mysql_host = "localhost";
$mysql_database = "hotel_2";

try
{
    //connect
    global $db;
    $db = new PDO('mysql:dbname=' . $mysql_database . ';host=' . $mysql_host . ';charset=utf8;', $mysql_username, $mysql_password);
    $db->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES utf8');
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $ex)
{
    die("Unable Connect To DataBase");
}
?>