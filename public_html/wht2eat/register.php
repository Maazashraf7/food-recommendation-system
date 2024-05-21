<!-- <?php
        if (isset($_POST['signup'])) {
            include './sigcon.php';
            print_r($_POST);
        }
?> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../index.css">
</head>

<body class="container">
    <header>
        <?php require '../layout/nav.php' ?>
    </header><br><br><br>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-4">
                <form action="../wht2eat/sigcon.php" method="post">
                    <h1> SIGN UP </h1>
                    <label for="name" class="form-item mt-3"> Name</label>
                    <input type="text" class="form-control" name="name" id="name" required>



                    <label for="email" class="form-item mt-3"> Email</label>
                    <input type="email" class="form-control" name="email" id="email" required>

                    <label for="password" class="form-item mt-3">Password</label>
                    <input type="password" class="form-control" name="password" id="password" required>
                    <button type="submit" class="btn btn-success mt-3" name="signup " id="signup">sign up</button>
                    <!-- <p class="row justify-content-center"><a href="login.php">If you have already an account</a></p> -->
                </form>

            </div>


        </div>
    </div>

</body>

</html>