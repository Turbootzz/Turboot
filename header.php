<?php // makes sure that youre logged in on every page
  session_start();
?>

<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Turboot web development and hosting.">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Turboot</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/cover/">
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css?v=<?php echo time(); ?>"> 
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles -->
    <link href="assets/css/cover.css" rel="stylesheet">
  </head>
  <body class="d-flex h-100 text-center text-white bg-dark">
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto" style="display:inline-block;margin-right:10px;">
    <div >
      <h3 class="float-md-start mb-0" style="display:inline-block;">Turboot</h3>
      <nav class="nav nav-masthead justify-content-center float-md-end">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        <a class="nav-link" href="#">Servers</a>
        <a class="nav-link" href="#">About Me</a>
        <a class="nav-link" href="#">Contact</a>
        <?php // Changes the way something looks by having logged in
          if (isset($_SESSION["useruid"])) {
            echo "<a class='nav-link' data-bs-toggle='dropdown' aria-expanded='false'>Account</a>";
            echo "<ul class='dropdown-menu' aria-labelledby='dropdownMenuButton1'>";
            echo "<li><a class='dropdown-item' href='profile.php'>Profile</a></li>";
            echo "<li><a class='dropdown-item' href='assets/includes/logout.inc.php'>Log out</a></li>";
            echo "</ul>";
          }
          else { // if not logged in you get this below
            echo "<a class='nav-link' href='login.php'>Login</a>";
          }
          ?>
        <!-- <a class="nav-link" href="login.php">Login</a> -->
      </nav>
    </div>
  </header>
  <main class="px-3">