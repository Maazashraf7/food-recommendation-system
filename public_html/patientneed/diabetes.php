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
    <title>Hearty meals</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../index.css">
</head>

<body class="container">
    <header>
    <?php require '../admin/nav.php'?>
                
    </header><br><br>
    <div class="container mt-5">

        <div class="row justify-content-center">
            <div class="col-4">
                <legend>
                    <h3> <B>DIABETES DIETCHART</B></h3>
                </legend>
                <form action="dbconn.php" method="post">
                    <label for="meal" class="form-label mt-3">Meal</label>
                    <select class="form-control" name="meal" id="meal" required>
                        <option selected> select</option>
                        <option>Breakfast</option>
                        <option>Mid-morning Snack</option>
                        <option>Lunch</option>
                        <option>Tea Time </option>
                        <option>Evening Snacks</option>
                        <option>Dinner</option>
                        <option>Bedtime Snack</option>
                    </select>
                    <label for="time" class="form-item mt-3"> Timing</label>
                    <input type="text" class="form-control" name="time" id="time" required>

                    <label for="food" class="form-item mt-3">FoodStuffs</label>
                    <input type="text" class="form-control" name="foodstuffs" id="foodstuffs" required>
                    <button class="btn btn-dark mt-3 mb-5" name="submit">Submit</button>
                    <!-- <p class="row justify-content-center"><a href="login.php">If you have already an account</a></p> -->
                </form>

            </div>


        </div>
    </div>
</body>

</html>
<!-- <script>
    let healthCondition = document.getElementById('healthcondition');
    healthCondition.onchange = function() {
        subCondition = document.getElementById('subcondition');
        value = healthCondition.value;
        if (value == 'Daibetic') {
            subCondition.add(new Option('Type1', 'Type2'));
        } else if (value == 'Heart Issue') {
            subCondition.add(new Option('', ''));
        } else if (value == 'Blood Pressure Problem')
            subCondition.add(new Option('high', 'low'));
    }
</script> -->