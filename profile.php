<?php
include_once "header.php";
?>
<h1>Profile</h1>
<br>
<ul class="list-group">
  <?php echo "<li class='list-group-item'>Username: " . $_SESSION['useruid'] . "</li>"; ?>
  <?php echo "<li class='list-group-item'>Email: -</li>"; ?>
  <li class='list-group-item'><a style="text-decoration: none;" href="assets/includes/logout.inc.php"><button type="button"
      class="list-group-item list-group-item-action">Log Out</button></a></li>
</ul>
<?php
include_once "footer.php";
?>