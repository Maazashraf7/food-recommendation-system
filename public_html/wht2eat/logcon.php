<?php
session_start();
require '../env.php';
$con = mysqli_connect(SERVER, USERNAME, PASSWORD, DATABASE);
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
$email=$_POST['email'];
$password=$_POST['password'];
$sql = "SELECT password FROM users WHERE email = '$email'";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $storedPassword = $row['password'];

     echo $storedPassword . "<br>";
     echo $password . "<br>";

    // Use password_verify to check if the entered password matches the stored hash
    if( password_verify($password , $storedPassword)) {
        // Passwords match, user is authenticated
        $_SESSION['email'] = $email;
        header("location:../patient/index.php");
    } else {
        // Passwords do not match
        header("location:login.php?error=2");
    }
} else {
    // User not found
    header("location:login.php?error=1");
}
?>