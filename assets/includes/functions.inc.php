<?php

function emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) {
    $result; // this means if this is empty OR ( || ) 
    if(empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat)) {
        $result = true;
    }
    else
    {
        $result = false;
    }
    return $result;
}

function invalidUid($username) {
    $result;
    if(!preg_match("/^[a-zA-Z0-9]*$/", $username)) { //search algoritm
        $result = true;
    }
    else
    {
        $result = false;
    }
    return $result;
}

function invalidEmail($email) {
    $result;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) { // ! = makes sure to check if its NOT true
        $result = true;
    }
    else
    {
        $result = false;
    }
    return $result;
}

function pwdMatch($pwd, $pwdRepeat) {
    $result;
    if($pwd !== $pwdRepeat) {
        $result = true;
    }
    else
    {
        $result = false;
    }
    return $result;
}

function uidExists($conn, $username, $email) {
    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn); // this makes it more secure so people dont write code into the input fields.
    if(!mysqli_stmt_prepare($stmt, $sql)) { // stmt stands for statement
        header("location: ../../signup.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $username, $email); // means what am i submitting / s stands for string and we have 2
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);
    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}

function createUser($conn, $name, $email, $username, $pwd) {
    $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) { // checks if it fails
        header("location: ../../signup.php?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedPwd); // incase didnt fail then goes here
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../../signup.php?error=none");
        exit();
}

function weakPassword($pwd) {
    $result;
    // Validate password strength
    $uppercase = preg_match('@[A-Z]@', $pwd);
    $lowercase = preg_match('@[a-z]@', $pwd);
    $number    = preg_match('@[0-9]@', $pwd);
    $specialChars = preg_match('@[^\w]@', $pwd);

    if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($pwd) < 8) {
            $result = true;
        }
        else
        {
            $result = false;
        }
        return $result;
}

function emptyInputLogin($username, $pwd) {
    $result;
    if(empty($username) || empty($pwd)) {
        $result = true;
    }
    else
    {
        $result = false;
    }
    return $result;
}

function loginUser($conn, $username, $pwd) {
    $uidExists = uidExists($conn, $username, $username); // so you can login with username OR email from db

    if ($uidExists === false) { // if both username or email return to false
        header("location: ../../login.php?error=incorrectlogin");
        exit();
    }

    $pwdHashed = $uidExists["usersPwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if ($checkPwd === false) { // incorrect password error
        header("location: ../../login.php?error=incorrectlogin"); // error name
        exit();
    }
    else if ($checkPwd === true) { // if it is correct
        session_start(); // start of a logged in session
        $_SESSION["userId"] = $uidExists["usersId"]; // super global
        $_SESSION["useruid"] = $uidExists["usersUid"];
        header("location: ../../index.php"); // error name
        exit();
    }
}