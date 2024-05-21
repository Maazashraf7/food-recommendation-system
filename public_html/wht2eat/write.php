<?php 

function createPatient($patient)
{
   // include 'env.php';

  //  $pname =  $patient ['pname'];
  //  $age = $patient ['age'];
  //  $gender = $patient ['gender'];
   // $healthcondition =  $patient ['healthcondition'];
   // $subcondition = $patient ['subcondition'];
   
    $servername = "localhost";
     $username = "username";
    $password = "";
      $dbname = "frs";


    $con = mysqli_connect(servername,username,password,dbname);
    $sql = "INSERT INTO patient(pname,age, gender,healthcondition,subcondition) VALUES('$pname','$age','$gender' ,'$healthcondition' ,'$Subcondition')";

    mysqli_query($con, $sql);
 
}
