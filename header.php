<?php
session_start(); // makes sure that youre logged in on every page
require "assets/includes/functions.inc.php"; // calls for the functions from file
?>
<!doctype html>
<html lang="en" class="h-100">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="Turboot Web" property="og:title" />
  <meta content="Welcome to Turboot, the digital hub crafted by Thijs Herman, a seasoned web developer and PC builder. 
  At Turboot, we offer a comprehensive suite of services tailored to elevate your online presence and gaming experience. 
  From expertly crafted websites to bespoke PC builds, hosting solutions, and media servers, 
  we're your one-stop destination for all things tech. Whether you're seeking top-notch web development, reliable hosting, 
  or immersive gaming environments, Turboot has you covered." property="og:description" />
  <meta content="https://turboot.com" property="og:url" />
  <meta content="https://turboot.com/assets/img/icon.png" property="og:image" />
  <meta content="#3434eb" data-react-helmet="true" name="theme-color" />
  <meta name="description" content="Welcome to Turboot, the digital hub crafted by Thijs Herman, a seasoned web developer and PC builder. 
  At Turboot, we offer a comprehensive suite of services tailored to elevate your online presence and gaming experience. 
  From expertly crafted websites to bespoke PC builds, hosting solutions, and media servers, 
  we're your one-stop destination for all things tech. Whether you're seeking top-notch web development, reliable hosting, 
  or immersive gaming environments, Turboot has you covered.">
  <meta name="author" content="Thijs Herman">
  <title>Turboot</title>
  <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">
  <link rel="stylesheet" type="text/css" href="assets/css/main.css?v=<?php echo time(); ?>">
  <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/main-short.css" rel="stylesheet">
  <script src="assets/js/config.js"></script>
</head>

<body class="d-flex text-center">
  <header class="mb-auto">
    <!-- header div -->
    <div class="headernav" id="myHeadernav">
      <!-- <img src="assets/img/icon.png" alt="Turboot Icon" width="50" height="50" style="float: right;"> -->
      <nav class="navbar navbar-expand-lg navbar-dark body-tertiary nav-masthead justify-content-center float-md-end">
        <div class="nav-toggler-right container-fluid">
          <h3 class="turboot-title navbar-brand float-md-start mb-0 p-1" style="display:inline-block;">Turboot</h3>
          <br>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav">
              <li class="nav-item">
                <a class="nav-link <?php active('/');
                active(''); ?>" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php active('project'); ?>" href="project">Projects</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle <?php active('services'); active('jelly'); ?>" href="services" role="button"
                  data-bs-toggle="dropdown">
                  Services
                </a>
                <ul class="dropdown-turboot dropdown-menu dropdown-menu-dark">
                  <li><a class="dropdown-item" href="https://cloud.turboot.com" target="_blank">Cloud Storage</a></li>
                  <li><a class="dropdown-item" href="jelly">Jelly Films & Series</a></li>
                  <li><a class="dropdown-item" href="https://read.turboot.com" target="_blank">Manga & E-books</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="services">Other...</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle <?php active('servers'); ?>" href="servers" role="button"
                  data-bs-toggle="dropdown">
                  Servers
                </a>
                <ul class="dropdown-turboot dropdown-menu dropdown-menu-dark">
                  <li><a class="dropdown-item" href="cobblemon">MC Cobblemon</a></li>
                  <li><a class="dropdown-item" href="servers">ARK: Survival Ascended</a></li>
                  <li><a class="dropdown-item" href="servers">Palworld</a></li>
                  <li><a class="dropdown-item" href="https://discord.gg/QdWQQpDzTw" target="_blank">Discord</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="servers">Other...</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php active('contact'); ?>" href="contact">Contact</a>
              </li>
              <?php // Changes the way something looks by having logged in
              if (isset($_SESSION["useruid"])) {
                echo "<li class='nav-item'><a class='nav-link ";
                active('profile');
                echo "' href='profile'>Profile</a></li>";
              } else { // if not logged in you get this below
                echo "<li class='nav-item'><a class='nav-link ";
                active('login');
                echo "' href='login'>Login</a></li>";
              }
              ?>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>
    <main>