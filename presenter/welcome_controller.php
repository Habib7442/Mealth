<?php

/**
 * @file
 * @brief This file handles the login process for the user.
 * * If the user is not logged in, they are redirected to the login page.
 * * @author  (habib)
 */

session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: login.php");
    exit;
}

?>