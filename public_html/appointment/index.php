
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Book</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 150vh;
            margin: 10px;
            
        }
        /* .form {
          margin-top: auto;
        } */

        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 5px rgba(0, 0, 0, 0.1);
            width: 50%;
            margin-top: 50vh;
        }
        h2 {
            color: #007bff;
            text-align: center;
        }
        label {
            font-weight: bold;
        }
        .form-control {
            border-radius: 5px;
        }
        button {
            background-color: #007bff;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            width: 50%;
        }
    </style>
</head>
<body class="mt-5">
   
        <header>
          <?php require '../layout/nav.php';?>
        </header>

    <div class="container mt-5">
        <h2>Appointment Book Form</h2>

        <form action="appntcon.php" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <!-- <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div> -->

            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" class="form-control" id="date" name="date" required>
            </div>

            <div class="form-group">
                <label for="time">Time:</label>
                <input type="time" class="form-control" id="time" name="time" required>
            </div>

            <div class="form-group">
                <label for="notes">Additional Notes:</label>
                <textarea class="form-control" id="notes" name="notes" rows="4"></textarea>
            </div>

            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</body>
</html>