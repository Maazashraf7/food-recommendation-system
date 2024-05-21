<?php
require '../env.php';

$con = mysqli_connect(SERVER, USERNAME, PASSWORD, DATABASE);
if (isset($_POST['submit'])) {
    $healthcondition = $_POST['healthcondition'];
    switch ($healthcondition) {
        case 'Daibetic':
            $table = 'diabetes';
            break;
        case 'Heart Issue':
            $table = 'heart';
            break;
        case 'Blood Pressure Problem':
            $table = 'blood_pressure';
            break;
        case 'Fatty Liver':
            $table = 'fatty_liver';
            break;
        default:

            die("Invalid health condition selected.");
    }


    $sql = "SELECT * FROM $table ORDER BY id";
    $result = mysqli_query($con, $sql);

    if (!$result) {
        die("Query failed: " . mysqli_error($con));
    }


    mysqli_close($con);
}
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
</head>

<body class="Container mt-5">

    <header>
        <?php include './nav.php' ?>
    </header><br><br>

    <div>
   
        <div class="container mt-5">
        <h3 class=" row-justify-centre text-primary">Food plan For Diabetic Patient</h3>
            <table class="table table-bordered">
                <thead>
                    <tr class="table-primary mt-5">
                        <th scope="col">Meal</th>
                        <th scope="col">Time</th>
                        <th scope="col">Foodstuffs</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row["meal"] . "</td>";
                            echo "<td>" . $row["time"] . "</td>";
                            echo "<td>" . $row["foodstuffs"] . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='3'>No data found</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <footer>
        <?php include '../layout/footer.php' ?>
    </footer>

</body>

</html>