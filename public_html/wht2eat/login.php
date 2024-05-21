<?php
$message = null;
if (isset($_GET['error'])) {
    if ($_GET['error'] == 1)
        $message = "Invalid username!";
    elseif ($_GET['error'] == 2)
        $message = "Invalid password!";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../index.css">
</head>

<body class="container">
    <header class="mt-3">
        <?php include "../layout/nav.php" ?>
    </header><br><br><br>
    <div class="container mt-5">
        <legend class="m-5">LOGIN </legend>
        <div class="m-4">
            <div class="col-4">
                <p for="" class="text-danger"><?= $message ?></p>
                <form action="logcon.php" method="post">

                    <label for="email" class="form-item mt-3"> Email</label>
                    <input type="email" class="form-control" name="email" id="email" required>

                    <label for="password" class="form-item mt-3">Password</label>
                    <input type="password" class="form-control" name="password" id="password" required>
                    <button type="submit" class="btn btn-success mt-3" name=" " id="">log in</button>

                </form>

            </div>
        </div>
        <div class="">
        </div>
        <fieldset>If you havn't an account
            <a href="register.php">sigin</a>
        </fieldset>


    </div>

</body>

</html>