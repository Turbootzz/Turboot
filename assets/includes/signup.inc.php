<?php


// pulls the information from the form at signup.php
if(isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];

    require_once "dbh.inc.php";
    require_once "functions.inc.php";
    // if the input field is anything besides false then it gives an error
    if (emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) !== false) {
        header("location: ../../signup.php?error=emptyinput");
        exit(); // stops the script from running
    }
    if (invalidUid($username) !== false) {
        header("location: ../../signup.php?error=invaliduid");
        exit();
    }
    if (invalidEmail($email) !== false) {
        header("location: ../../signup.php?error=invalidemail");
        exit();
    }
    if (pwdMatch($pwd, $pwdRepeat) !== false) {
        header("location: ../../signup.php?error=passwordsdontmatch");
        exit();
    }
    if (uidExists($conn, $username, $email) !== false) {
        header("location: ../../signup.php?error=useralreadyexists");
        exit();
    }
    if (weakPassword($pwd) !== false) {
        header("location: ../../signup.php?error=weakpassword");
        exit();
    }

    createUser($conn, $name, $email, $username, $pwd);

}
else { // Makes sure that you got to this page the proper way
    header("location: ../../signup.php");
    exit();
}