<?php

session_start();
session_unset();
session_destroy();

header("location: ../../login.php"); // sends the user back to the home page
exit();