<?php
    error_reporting(0);
    session_start();
    $host = 'localhost';
    $root = 'root';
    $pass = '';
    $dbname = 'wellpharma';
    $conn = mysqli_connect($host,$root,$pass,$dbname) or die('Connection Failed');
?>