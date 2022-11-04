<?php
include_once "header.php";
?>
<h1>Profile</h1>
<ul class="list-group">
  <?php echo "<li class='list-group-item'>Username: " . $_SESSION['useruid'] . "</li>"; ?>
  <?php echo "<li class='list-group-item'>Email: -</li>"; ?>
  <a style="text-decoration: none;" href="assets/includes/logout.inc.php"><button type="button"
      class="list-group-item list-group-item-action">Log Out</button></a>
</ul>
<?php
include_once "footer.php";
?>