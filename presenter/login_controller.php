<?php 

/**
 * @file
 * @brief This file handles the login process for the user.
 * * It receives the form data from the "login.php" file and checks if the user details exist in the database table "users".
 * * It also checks if the username and password match.
 * * If the request method is POST, it includes the "_dbconnect.php" file.
 * * It then assigns the username and password values to the variables $username and $password respectively.
 * * It then checks if the username exists in the database table "users".
 * * If the username exists, it checks if the password matches the password in the database.
 * * If the password matches, it starts a session and redirects the user to the "welcome.php" file.
 * * If the password does not match, it displays an error message.
 * * If the username does not exist, it displays an error message.
 */

 /**
  * * Boolean variable to check if the user is successfully logged in or not.
  * @var boolean $login
  */
 /**
  * * Boolean variable to check if there is an error in login credentials or not.
  * @var boolean $showError
  */

$login = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  include '../model/_dbconnect.php';
  $username = $_POST["username"];
  $password = $_POST["password"];

  $sql = "SELECT * FROM `users` WHERE username = '$username'";
  $result = mysqli_query($conn, $sql);
  $num = mysqli_num_rows($result);
  if ($num == 1) {
    while ($row = mysqli_fetch_assoc($result)) {
      if (password_verify($password, $row['password'])) {
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("location: /authentication/view/welcome.php");
      }
    }
  } else {
    $showError = "Invalid Credentials";
  }
}


?>