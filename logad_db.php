<?php
session_start();
include('sever.php');


if (isset($_POST['logad_admin'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);


    $query = "SELECT * FROM `admin` WHERE username = '$username' AND `password` = '$password' ";
    $result = mysqli_query($conn, $query);
    
    if (mysqli_num_rows($result) == 1) {
        $_SESSION['usernameadmin'] = $username;
        header("location: admin.php");
    } else {
        array_push($errors, "Wrong username/password combination");
        $_SESSION['error'] = "Wrong username or password try again";
        header("location: logad.php");
    }
}
