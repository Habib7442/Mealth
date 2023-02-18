<?php

/**
* @file
* * This file is used to logout the user by destroying the session and redirecting to login page.
* * @param session_start(); -- Starts the session.<br> @param session_unset(); --  Unset all session variables.<br> @param session_destroy(); -- Destroy the session.<br> @param header("location: login.php"); -- Redirects to login page.<br> @param exit; -- Exits the script.
*/
session_start();

session_unset();
session_destroy();

header("location: login.php");
exit;

?>