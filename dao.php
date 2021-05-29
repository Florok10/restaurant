<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

$host = 'localhost';
$port = '3306';
$dbname = 'restaurant';
$charset = 'UTF8';
$user = 'phpmyadmin';
$password = 'root';

$dsn= "mysql:host=$host:$port;dbname=$dbname;charset=$charset;";

?>