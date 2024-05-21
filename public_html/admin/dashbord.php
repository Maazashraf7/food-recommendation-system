<?php
session_start();
if (!isset($_SESSION['gmail']))
    header("location:logn.php");

$gmail = $_SESSION['gmail'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin DashbordS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>

<body class="container">
    <header>
       <?php require 'nav.php'?>
               
    </header>
    <div class=" mt-5">
        <h1>Patient Category </h1>
    </div>