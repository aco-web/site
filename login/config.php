<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'ACO');
define('DB_PASSWORD', 'aco123');
define('DB_NAME', 'aco');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
