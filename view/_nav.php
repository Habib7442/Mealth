<?php
/**
 * @file
 * Navigation bar.
 * * This file contains the navigation bar for the website. It is displayed on every page to allow users to easily navigate the website.
 * * The navigation bar consists of the MEALTH logo, a button to toggle the navigation menu for smaller screens, links to the home page,login, sign up and logout pages, and a welcome message for logged in users.
 * * The navigation bar is displayed using Bootstrap's navbar component.
 * * If the user is logged in, the navigation bar displays a "Logout" button and a welcome message with the user's username.
 * * If the user is not logged in, the navigation bar displays a "Login" button.
 */

?>

<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark"">
  <div class=" container-fluid">
  <a class="navbar-brand" href="/authentication">MEALTH</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="/authentication">Home</a>
      </li>
      <?php if (isset($_SESSION['loggedin'])) {
        echo '<li class="nav-item">
          <a class="nav-link" href="/authentication/view/logout.php">Logout</a>
        </li>';
      } else {
        echo '<li class="nav-item">
          <a class="nav-link" href="/authentication/view/login.php">Login</a>
        </li>';
      }

      ?>

      <li class="nav-item">
        <a class="nav-link" href="/authentication/view/signup.php">Sign Up</a>
      </li>
      <?php
      if (isset($_SESSION['loggedin'])) {
        echo '<button class="btn btn-success"><span style="color: orange">WELCOME</span>
        <span style="color: white">' . $_SESSION['username'] . '</span>
      </button>';
      }
      ?>



    </ul>
    <!-- <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div> -->
  </div>
</nav>