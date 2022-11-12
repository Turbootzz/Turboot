<?php
include_once "header.php";
?>
<div class="login-whole">
  <div class="login-form square rounded m-4 rounded">
    <h2>Sign Up</h2>
    <br>
    <form action="assets/includes/signup.inc.php" method="post">

      <!-- Full Name input -->
      <div class="form-outline mb-4">
        <p>Full Name</p>
        <input type="text" name="name" class="form-control" placeholder="Full Name">
      </div>

      <!-- Email input -->
      <div class="form-outline mb-4">
        <p>Email</p>
        <input type="email" name="email" class="form-control" placeholder="Email">
      </div>

      <!-- Username input -->
      <div class="form-outline mb-4">
        <p>Username</p>
        <input type="text" name="uid" class="form-control" placeholder="Username">
      </div>

      <!-- Password input -->
      <div class="form-outline mb-4">
        <p>Password</p>
        <input type="password" name="pwd" class="form-control" placeholder="Password">
      </div>

      <!-- Password Repeat input -->
      <div class="form-outline mb-4">
        <p>Repeat Password</p>
        <input type="password" name="pwdrepeat" class="form-control" placeholder="Repeat Password">
      </div>

      <!-- 2 column grid layout for inline styling -->
      <!-- <div class="row mb-4">
    <div class="col d-flex justify-content-center"> -->
      <!-- Checkbox //-->
      <!-- <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
        <label class="form-check-label" for="form2Example31"> Remember me </label>
      </div>
    </div>

    <div class="col"> -->
      <!-- Simple link //-->
      <!-- <a href="#!">Forgot password?</a>
    </div>
  </div> -->

      <!-- Submit button //-->
      <button type="submit" name="submit" class="btn btn-primary btn-block mb-4">Sign Up</button>

      <!-- Register buttons //-->
      <!-- <div class="text-center">
    <p>Not a member? <a href="#!">Register</a></p>
  </div> -->
      <?php // All error messages
  if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput") {
      echo "<p class='msg'>Fill in all fields!</p>";
    } else if ($_GET["error"] == "invaliduid") {
      echo "<p>Choose a proper username!</p>";
    } else if ($_GET["error"] == "invalidemail") {
      echo "<p>Choose proper email!</p>";
    } else if ($_GET["error"] == "passwordsdontmatch") {
      echo "<p>Fill in all fields!</p>";
    } else if ($_GET["error"] == "stmtfailed") {
      echo "<p>Something went wrong, please try again</p>";
    } else if ($_GET["error"] == "weakpassword") {
      echo "<p>Password too weak!</p>";
    } else if ($_GET["error"] == "useralreadyexists") {
      echo "<p>User already exists</p>";
    } else if ($_GET["error"] == "none") {
      echo "<p>You hase successfully signed up!</p>";
      echo "<p>Log in  <a class='text-white' href='login.php'><u>here</u></a></p>";
    }
  }
  ?>
    </form>
  </div>
</div>
<?php
include_once "footer.php";
?>