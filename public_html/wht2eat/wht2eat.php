<?php
if (isset($_POST['submit'])) {
    include  'form.php';
    createPatient($_POST);
    
}
print_r($_POST)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hearty meals</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class= "Container-fluid" >

   <h1> <b>HEARTY MEALS</b></h1>
    
    <header>
      <?php include 'nav.php'?> 
    </header>
      
    <?php include 'form.php'?>
</body>
</html>