<?php
require '../env.php';
$con= mysqli_connect(SERVER,USERNAME,PASSWORD,DATABASE);
$sql= "SELECT * FROM "

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dietchart</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body class="container">
    <header>
        <?php include 'nav.php'; ?>
    </header>
    <main>
        <h3 class="mt-3">diet chart</h3>
        <a class="btn btn-primary mt-3 mb-3" href="update.php">UPDATE</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>timing</th>
                    <th>food</th>
                    <th>amount</th>
                    <th colspan="4"></th>
                </tr>
            </thead>
            <tbody>
                <!-- <?php
                foreach ($tournaments as $tournament) {
                ?>
                    <tr>
                        <td><?= $_POST['id'] ?></td>
                        <td><?= ['name'] ?></td>
                        <td><?= $tournament['venue'] ?></td>
                        <td><?= $tournament['organiser'] ?></td>
                        <td><a href="" class="btn btn-primary">Edit</a></td>
                        <td><a href="" class="btn btn-primary">Delete</a></td>
                    </tr>
                <?php
                }
                ?> -->
            </tbody>
        </table>
    </main>
</body>

</html>