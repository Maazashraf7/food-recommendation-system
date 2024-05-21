<?php
// session_start();
require '../env.php';
$con = mysqli_connect(SERVER, USERNAME, PASSWORD, DATABASE);
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
$id=$_POST['id'];
$meal=$_POST['meal'];
$time=$_POST['time'];
$foodstuffs=$_POST['foodstuffs'];
$sql = "INSERT INTO diabetes(id,meal,time,foodstuffs) VALUES('$id','$meal','$time','$foodstuffs')";
echo "succeful";
if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
    header("location:diabetes.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
  }
  
  
//   header("location:login.php");
  mysqli_query($con, $sql);
?>