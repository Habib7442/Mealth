<?php

/**
 * @file
 * @brief This file handles the signup process for the user.
 * * It receives the form data from the "signup.php" file and inserts the user details into the database table "users".
 * * It also checks if the username already exists in the table and if the passwords match.
 * * If the request method is POST, it includes the "_dbconnect.php" file.
 * * It then assigns the username, password and confirm password values to the variables $username, $password and $cpassword respectively.
 * * It then checks if the username already exists in the database table "users".
 * * If the username already exists, it displays an error message.
 * * If the username does not exist, it checks if the password and confirm password match.
 * * If the password and confirm password match, it inserts the user details into the database table "users".
 * * If the password and confirm password do not match, it displays an error message.
 */

/**
 * @var boolean $showAlert Flag to indicate if a success alert should be displayed.
 */

/**
 * @var boolean $showError Flag to indicate if an error alert should be displayed.
 */


$showAlert = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include '../model/_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["confirmpassword"];

    // Check whether the username exists
    $existssql = "SELECT * FROM `users` WHERE username = '$username'";
    $result = mysqli_query($conn, $existssql);
    $numExistRows = mysqli_num_rows($result);
    if ($numExistRows > 0) {
        $showError = "Username already exists";
    } else {

        if ($password == $cpassword) {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users` (`username`, `password`, `date`) VALUES ('$username', '$hash', current_timestamp());";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $showAlert = true;
            } else {
                $showError = "Password do not match";
            }
        }
    }
}
?>