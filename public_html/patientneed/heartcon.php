<?php
// session_start();
require '../env.php';
$con = mysqli_connect(SERVER, USERNAME, PASSWORD, DATABASE);
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$meal=$_POST['meal'];
$time=$_POST['time'];
$foodstuffs=$_POST['foodstuffs'];
$sql = "INSERT INTO heart(meal,time,foodstuffs) VALUES('$meal','$time','$foodstuffs')";
echo "succeful";
if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
    header("location:hearties.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
  }
  
  
//   header("location:login.php");
  mysqli_query($con, $sql);
?>