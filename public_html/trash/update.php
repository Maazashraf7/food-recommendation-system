<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hearty meals</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../index.css">
</head>

<body>
    <header>
        <?php include 'nav.php'; ?>
    </header>
    <div class="row justify-content-center mt-5">
        <div class="col-4">
            <form action="updateconn.php" method="post">
                <label for="chart_id" class="form-item mt-3"> chart_id</label>
                <input type="int" class="form-control" name="chart_id" id="chart_id" required>

                <label for="Timing" class="form-item mt-3"> Timing</label>
                <input type="text" class="form-control" name="timing" id="timing" required>

                <label for="food" class="form-item mt-3">Food</label>
                <input type="text" class="form-control" name="food" id="food" required>

                <label for="amount" class="form-item mt-3">Amount</label>
                <input type="text" class="form-control" name="amount" id="amount" required>


                <button type="submit" class="btn btn-success mt-3" name=" " id="">submit</button>



            </form>

        </div>


    </div>
</body>

</html>