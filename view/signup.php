<?php

/**
 * @file
 * The signup page.
 * Include the controller file for processing the form submission
 * The file starts with PHP tags that include the "signup_controller.php file for processing the form submission. After that, it starts the HTML document and includes the required meta tags, the title of the page, and the links to the Bootstrap stylesheet and the custom CSS file (style.css)" 
 * 
 * @section Form
 * * After that, the code checks if the form submission was successful or if there was an error.<br>
 * * If the form submission was successful, it displays a success message using Bootstrap's alert component.<br> 
 * * If there was an error,it displays an error message using the same component.<br> 
 * * The messages are shown based on the values of the variables @param $showAlert <br> and <br> @param $showError <br>
 * * which are set in the "signup_controller.php" file. 
 */


require '../presenter/signup_controller.php'

    /**
     * @page signup Signup
     * The sign up page.
     */

    ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Include the navigation bar -->
    <?php require './_nav.php' ?>
    <?php
    if ($showAlert) {

        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your account is created successfully.
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

    <div class="container-fluid signup">
       
        <form action="/authentication/view/signup.php" method="post">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="confirmpassword" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" name="confirmpassword" id="confirmpassword">
            </div>

            <button type="submit" class="btn btn-primary">Signup</button>
        </form>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>