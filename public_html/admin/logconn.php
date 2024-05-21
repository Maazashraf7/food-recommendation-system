<?php
session_start();
require '../env.php';
$con = mysqli_connect(SERVER, USERNAME, PASSWORD, DATABASE);
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
$gmail=$_POST['gmail'];
$password=$_POST['password'];


$sql = "SELECT password FROM admin WHERE gmail = '$gmail'";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $storedPassword = $row['password'];

     echo $storedPassword . "<br>";
     echo $password . "<br>";

    // Use password_verify to check if the entered password matches the stored hash
    if(($password==$storedPassword)) {
        //  Passwords match, user is authenticated
         $_SESSION['gmail'] = $gmail;
        header("location:dashbord.php");
        echo "successfull";
    } else {
        // Passwords do not match
        echo "Invalid password";
    }
} else {
    // User not found
    echo "Invalid username";
}