<?php
session_start(); // makes sure that youre logged in on every page
require "assets/includes/functions.inc.php"; // calls for the functions from file
?>
<!doctype html>
<html lang="en" class="h-100">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Turboot web development and hosting.">
  <meta name="author" content="Thijs Herman">
  <title>Turboot</title>
  <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">
  <link rel="stylesheet" type="text/css" href="assets/css/main.css?v=<?php echo time(); ?>">
  <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/main-short.css" rel="stylesheet">
</head>
<!-- text-white bg-dark -->

<body class="d-flex text-center">
  <!-- <div class="bg-img" style="background-image: url(assets/img/bg.png)" alt="bg"> -->
  <header class="mb-auto">
    <!-- header div -->
    <div class="headernav" id="myHeadernav">
      <!-- <img src="assets/img/icon.png" alt="Turboot Icon" width="50" height="50" style="float: right;"> -->
      <h3 class="turboot-title float-md-start mb-0 p-1" style="display:inline-block;">Turboot</h3>
      <nav class="nav nav-masthead justify-content-center float-md-end">
        <a class="nav-link <?php active('index.php');
        active(''); ?>" aria-current="page" href="index.php">Home</a>
        <a class="nav-link <?php active('services.php'); ?>" href="services.php">Services</a>
        <a class="nav-link <?php active('projects.php'); ?>" href="projects.php">Projects</a>
        <a class="nav-link <?php active('servers.php'); ?>" href="servers.php">Servers</a>
        <a class="nav-link <?php active('contact.php'); ?>" href="contact.php">Contact</a>
        <?php // Changes the way something looks by having logged in
        if (isset($_SESSION["useruid"])) {
          echo "<a class='nav-link ";
          active('profile.php');
          echo "' href='profile.php'>Profile</a></li>";
        } else { // if not logged in you get this below
          echo "<a class='nav-link ";
          active('login.php');
          echo "' href='login.php'>Login</a>";
        }
        ?>
      </nav>
    </div>
  </header>
  <div class="cover-container d-flex w-100 h-100 mx-auto flex-column">
    <!-- used to have px-3 -->
    <main>