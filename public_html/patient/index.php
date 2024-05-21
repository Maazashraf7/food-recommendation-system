<?php
session_start();
if (!isset($_SESSION['email']))
    header("location:../Wht2eat/login.php");

$email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Quires</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="index.css">
</head>

<body class="container">
   
<div>
<?php include "./nav.php"?>
</div> <br><br><br>
     
    <div class=" conatiner mt-8 content-justify-centre">
        <?php include "./form.php" ?>
        
    </div><br><br><br><br><br><br><br><br>
   <?php include '../layout/footer.php' ?>
</body>

</html>