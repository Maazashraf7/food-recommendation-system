<?php
// session_start();
require '../env.php';
$con = mysqli_connect(SERVER, USERNAME, PASSWORD, DATABASE);
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
$chart_id=$_POST['chart_id'];
$timing=$_POST['timing'];
$food=$_POST['food'];
$amount=$_POST['amount'];
$sql = "INSERT INTO dietchartdetails( chart_id,timing,food,amount) VALUES('$chart_id','$timing','$food','$amount')";
echo "succeful";
if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
    header("location:dashbord.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
  }
  
  
//   header("location:login.php");
  mysqli_query($con, $sql);
?>