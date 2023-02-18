<?php

/**
 * @file
 * * @brief This file is used to connect to the database.
 * * This function establishes a connection to the MySQL server using the provided.
 * * @param $servername -- The servername of the database.
 * * @param $username -- The username of the database.
 * * @param $password -- The password of the database.
 * * @param $database -- The name of the database.
 * * @param $conn -- The connection variable.
 * * @param die("Error : " .mysqli_connect_error()); -- Displays the error message if the connection is not successful.
 * * @return object|false Returns a MySQL connection object on success, or false on failure.
 */
$servername = "localhost";
$username = "root";
$password = "";
$database = "users";


$conn = mysqli_connect($servername, $username, $password, $database);

if($conn){
    echo "Connection Successful";
}else{
    die("Error : " .mysqli_connect_error());
}
?>