<?php
include_once "header.php";
?>
<br>
<div class="login-whole">
  <div class="login-form square rounded-3 m-4">
    <h2>Login</h2>
    <br>
    <form action="assets/includes/login.inc.php" method="post">

      <!-- Email or Username input -->
      <div class="form-outline mb-4">
        <p>Username or Email</p>
        <input type="text" name="uid" class="form-control" placeholder="Email or Username">
      </div>

      <!-- Password input -->
      <div class="form-outline mb-4">
        <p>Password</p>
        <input type="password" name="pwd" class="form-control" placeholder="Password">
      </div>

      <!-- Submit button -->
      <button type="submit" name="submit" class="btn btn-primary btn-block mb-4">Login</button>

      <?php // All error messages
  if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput") {
      echo "<p class='msg'>Fill in all fields!</p>";
    } else if ($_GET["error"] == "incorrectlogin") {
      echo "<p>Incorrect username or password!</p>";
    }
  }
  ?>
      <br>
      Don't have an account yet?
      <a class="text-black url-normal" style="text-decoration:none;" href="signup">Sign up here</a>
    </form>
  </div>
</div>
<?php
include_once "footer.php";
?>