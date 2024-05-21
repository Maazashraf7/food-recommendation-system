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
  <title>Hearty meals</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <link rel="stylesheet" href="index.css">
  <style>
    .navbar {
      box-shadow: 0 3px 5px rgba(0, 0, 0, 0.1);
    }

    .logo {
      display: flex;
      align-items: center;
    }

    .logo img {
      margin-right: 10px;
      border-radius: 50%;
    }

    .navbar-brand {
      font-size: 1.8rem;
      font-weight: bold;
      color: #fff;
      text-shadow: 2px 2px 3px rgba(0, 0, 0, 0.5);
    }

    .navbar-nav .nav-link {
      color: white;
      font-weight: bold;
      transition: color 0.2s ease;
    }

    /* .navbar-nav .nav-link:hover {
    color: #ffc107;
  } */

    .navbar-text .btn {
      margin-top: 3px;
      font-weight: bold;
    }

    /* Custom styles for the background and spacing */
    .navbar {
      background-color: darkgreen;
      padding: 15px 0;
    }

    .nav-item {
      margin-right: 15px;
      /* Adjust the spacing between items */
    }

    /* Optional: Add some space around the logo */
    .logo {
      margin-right: 20px;
    }
  </style>

</head>

<body class="Container">


  <header class="container ">
    <nav class="navbar  border-body fixed-top">
      <div class="container-fluid">
        <div class="logo">
          <img src="../meals/logo2.png" alt="Hearty Foods Logo" width="50" height="50">
          <span class="navbar-brand">HEARTY FOODS</span>
        </div>
        <ul class="nav justify-content-center">
          <li class="nav-item">
            <a class="nav-link" href="../index.php">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../wht2eat/login.php">WHAT TO EAT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../appointment/index.php">APPOINTMENT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../contactUs/index.php">Contact Us</a>
          </li>
        </ul>
        <li class="nav justify-content-end">
                <span class="navbar-text">
                    <?= $email ?></h3>
                    <a class="btn btn-primary " type="button" href="../wht2eat/logout.php">Logout</a>
                </span>
            </li>
        

      </div>
    </nav>
  </header> <br><br><br>

  <div class="container mt-3">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
      <div class="col">
        <div class="card">
          <img src="./meals/food3.webp" class="card-img-top" alt="Image 1">
        </div>
      </div>

      <div class="col">
        <div class="card">
          <img src="./meals/food2.avif" class="card-img-top" alt="Image 2">
        </div>
      </div>

      <div class="col">
        <div class="card">
          <img src="./meals/bg.jpg" class="card-img-top" alt="Image 3">
        </div>
      </div>
    </div>
  </div>
  <div class="container col-sm mt-3">
    <div class="card text-bg- ">
      <div class="card-header"> WHY NEED OF FOOD RECCOMENDATION SYSTUM ?</div>
      <div class="card-body">
        <p class="text-success">The increasing availability of diverse food options, coupled with the growing reliance on digital platforms for decision-making, has paved the way for the development of innovative food recommendation systems. This paper proposes a comprehensive food recommendation system that leverages advanced machine learning techniques to cater to the individual preferences and dietary needs of users. The system incorporates collaborative filtering, content-based filtering, and deep learning methodologies to analyze user behavior, food attributes, and contextual information.

          The collaborative filtering component harnesses user-item interaction data to identify patterns and similarities between users with similar tastes. Meanwhile, the content-based filtering aspect focuses on extracting features from food items, considering factors such as ingredients, nutritional content, and culinary styles. Additionally, deep learning models are employed to capture intricate relationships and patterns within the data, enabling the system to provide more accurate and personalized recommendations.

          To enhance user engagement and satisfaction, the recommendation system also integrates real-time feedback mechanisms. Users can provide explicit feedback on recommended items, allowing the system to continuously adapt and refine its suggestions. Furthermore, the system embraces a hybrid approach that intelligently combines collaborative filtering, content-based filtering, and deep learning, mitigating the limitations associated with each technique when used in isolation.

          The proposed food recommendation system is designed to be scalable and adaptable to varying user preferences and dietary restrictions. It aims to deliver a seamless and enjoyable user experience by presenting highly relevant and personalized food suggestions. The effectiveness of the system is evaluated through comprehensive experiments and user studies, demonstrating its ability to outperform traditional recommendation systems in terms of accuracy and user satisfaction. The results suggest that the proposed system has the potential to revolutionize the way individuals discover and enjoy food, making it a valuable addition to the evolving landscape of digital food platforms.</p>
      </div>
    </div>
  </div>


  <div class="container mt-3">
    <div class="row">

      <div class="col-md-3">
        <div class="card">
          <img src="./meals/diabetes.avif" class="card-img-top" alt="Article 1 Image">
          <div class="card-body">
            <h5 class="card-title">DIABETES</h5>
            <p class="card-text"></p>
          </div>
        </div>
      </div>


      <div class="col-md-3">
        <div class="card">
          <img src="./meals/heart.webp" class="card-img-top" alt="Article 2 Image">
          <div class="card-body">
            <h5 class="card-title">HEART ISSUE</h5>
            <p class="card-text"></p>
          </div>
        </div>
      </div>


      <div class="col-md-3">
        <div class="card">
          <img src="./meals/fatty.jpg" class="card-img-top" alt="Article 3 Image">
          <div class="card-body">
            <h5 class="card-title">FATTY LIVER</h5>
            <p class="card-text"></p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <img src="./meals/bloodp.webp" class="card-img-top" alt="Article 4 Image">
          <div class="card-body">
            <h5 class="card-title">BLOOD PRESSURE</h5>
            <p class="card-text"></p>
          </div>
        </div>
      </div>
    </div>
  </div><br><br>
  <footer><?php require 'footer.php' ?></footer>
</body>

</html>