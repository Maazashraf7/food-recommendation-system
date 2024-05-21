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
    margin-right: 15px; /* Adjust the spacing between items */
  }

  /* Optional: Add some space around the logo */
  .logo {
    margin-right: 20px;
  }
  a{
    color: white;
    
  }
</style>

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
        <a class="nav-link" href="../contactUs/index.php">CONTACT US</a>
      </li>
    </ul>
    <div class="nav-item justify-content-end">
      <span class="navbar-text">
        <a class="btn btn-danger" type="button" href="../wht2eat/login.php">login</a>
      </span>
    </div>
  </div>
</nav>
