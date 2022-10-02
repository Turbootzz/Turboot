<?php
  include_once "header.php";
?>
<div class="login-form square rounded p-4 m-4 rounded">
<h2>Login</h2>
<br>
<form action="assets/includes/login.inc.php" method="post">

  <!-- Email or Username input -->
  <div class="form-outline mb-4">
     <p>Username</p>
    <input type="text" name="name" class="form-control" placeholder="Email or Username" />
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <p>Password</p>
    <input type="password" name="pwd" class="form-control" placeholder="Password" />
  </div>

  <!-- 2 column grid layout for inline styling -->
  <div class="row mb-4">
    <div class="col d-flex justify-content-center">
      <!-- Checkbox -->
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
        <label class="form-check-label" for="form2Example31"> Remember me </label>
      </div>
    </div>

    <div class="col">
      <!-- Simple link -->
      <a href="#!">Forgot password?</a>
    </div>
  </div>

  <!-- Submit button -->
  <button type="submit" name="submit" class="btn btn-primary btn-block mb-4">Login</button>

  <!-- Register buttons -->
  <div class="text-center">
    <p>Not a member? <a href="#!">Register</a></p>
  </div>
</form>
  </div>
<?php
  include_once "footer.php";
?>