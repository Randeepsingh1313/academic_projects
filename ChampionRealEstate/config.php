<?php 

define('DB_USER', 'root');
define('DB_PASSWORD', 'Basantb@417sql');
define('DB_HOST', 'localhost');
define('DB_NAME', 'realdb');

$con = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die('Could not connect to MySQL: ' . mysqli_connect_error() );

mysqli_set_charset($con, 'utf8');
    
?>