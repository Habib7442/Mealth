<?php
/**
 * @file 
 * The login page.
 * * The login page displays a login form where users can enter their username and password to log in.
 * * The form has two input fields for the username and password.
 * * The form has a submit button.
 * * The form submits to "login.php" in the "view" folder, which calls the "login_controller.php" file in the "controller" folder to validate the user's credentials.
 * * The form is submitted to the same page using the POST method.
 * * The form data is then processed by the "login_controller.php" file.
 * * If the user enters valid credentials, they are redirected to the "home" page, and a success message is displayed using Bootstrap's alert component. 
 * * If the user enters invalid credentials an error message is displayed using the same component.
 * * The messages are shown based on the values of the variables @param $login <br> @param $showError <br>
 * * The page includes the navigation bar by requiring the "_nav.php" file, which contains the HTML for which are set in the "login_controller.php" file and functionality to the form and alert messages.
 */

require '../controller/login_controller.php' ?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
  </head>

<body>
  <?php require './_nav.php' ?>
  <?php
  if ($login) {

    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You are logged in successfully.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
  }
  if ($showError) {

    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error ' . $showError . '.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
  }

  ?>

  <div class="container-fluid login">
    <form action="/authentication/view/login.php" method="post">
      <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" id="exampleInputPassword1">
      </div>


      <button type="submit" class="btn btn-primary">Login</button>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
</body>

</html>