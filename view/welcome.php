<?php 
/**
 * @file
 * Home Page
 * * The welcome page is displayed after the user successfully signs up or logs in. 
 * * It displays a welcome message.
 * * The page includes the navigation bar by requiring the "_nav.php" file, which contains the HTML for which are set in the "welcome_controller.php" file and functionality to the form and alert messages.
 * * With the user's username and a brief description of the services provided by the application.
 * * The username is retrieved from the session variable 'username'.
 * * The page uses Bootstrap's alert component to display the message.
 * * PHP version 7.4.21.
 */

require '../presenter/welcome_controller.php' ?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Welcome</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
  </head>

<body>
  <?php require './_nav.php' ?>
  <div class="container-fluid welcome">
    <div class="alert alert-success" role="alert">
      <h4 class="alert-heading">Welcome To MEALTH <?php echo $_SESSION['username'] ?></h4>
      <p>Thank you for signing up with us. We are glad to have you here. You can now start using our services.</p>
      <hr>
      <p class="mb-0">You can now access your account.</p>
    </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
</body>

</html>