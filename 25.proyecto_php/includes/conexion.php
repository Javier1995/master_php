<?php
$servername   = 'localhost';
$username = 'root';
$password = '';
$database = 'blog_master';
//Connction to Mysql
$con = mysqli_connect($servername, $username, $password, $database);

$query = 'SET NAMES UTF8';
$resul = mysqli_query($con, $query);


//Iniciar la session

session_start();