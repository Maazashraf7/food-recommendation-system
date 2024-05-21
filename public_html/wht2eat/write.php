<?php
include '../env.php';
//print_r($_POST);
$con = mysqli_connect(SERVER, USERNAME, PASSWORD, DATABASE);
$pname = $_POST['pname'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$healthcondition = $_POST['healthcondition'];
$subcondition = $_POST['subcondition'];
$sql = "INSERT INTO patient(pname,age,gender,healthcondition,subcondition) VALUES('$pname','$age','$gender','$healthcondition','$subcondition')";
if (mysqli_query($con, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);
header("location:wht2eat.php");
// mysqli_query($con, $sql);
