 
<?php
include '../env.php';
//print_r($_POST);
$con = mysqli_connect(SERVER, USERNAME, PASSWORD, DATABASE);
$name = $_POST['name'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);

$sql = "INSERT INTO users(name,email,password) VALUES('$name','$email','$password')";

if (mysqli_query($con, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($con);
}


header("location:login.php");
mysqli_query($con, $sql);
?> 