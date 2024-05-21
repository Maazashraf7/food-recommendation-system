<?php
include '../env.php';
//print_r($_POST);
$con = mysqli_connect(SERVER, USERNAME, PASSWORD, DATABASE);
$name = $_POST['name'];
$date = $_POST['date'];
$time = $_POST['time'];
$notes = $_POST['notes'];
$sql = "INSERT INTO appointment(name,date,time,notes) VALUES('$name', '$date', '$time', '$notes')";
if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
  }


?>