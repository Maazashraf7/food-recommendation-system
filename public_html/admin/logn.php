<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>

<body class="container">
    <header>
    <nav class="navbar navbar-light fixed-top" style="background-color: #e3f2fd;">
  <div class="container-fluid ">
    <ul class="nav justify-content-center">
      <li class="nav-item">
        <a class="nav-link " href="../index.php">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../admin/dietchartread.php">Dietchart</a>
      </li>
    </ul>
  </div>
</nav>
    </header><br><br><br>
    <div class="container mt-5">
    </div>
    <div class="container mt-5 ">
        <legend class="row justify-content-center">LOGIN </legend>
        <div class="row justify-content-center">
            <div class="col-4">
                <form action="logconn.php" method="post" >

                    <label for="gmail" class="form-item mt-3"> gmail</label>
                    <input type="email" class="form-control" name="gmail" id="gmail" required>

                    <label for="password" class="form-item mt-3">Password</label>
                    <input type="password" class="form-control" name="password" id="password" required>

                    <button type="submit" class="btn btn-success mt-3" name=" " id="">log in</button>



                </form>

            </div>


        </div>
    </div>
</body>

</html>