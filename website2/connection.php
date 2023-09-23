<?php

/* 
Ways to connect to a MySQL Database
1. MySQLi extension
2. PDO
*/
// Connecting to the Database
$server = 'localhost';
$username = "root";
$password = ""; 
$db='manish_kumar';

// Create a connection
$con = mysqli_connect($server, $username, $password,$db);

// Die if connection was not successful
if (!$con){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
// else{
//     echo "Connection was successful";
// }

?>
