<?php
// booking.php

// Retrieve the selected doctor from the URL parameter
$doctor = isset($_GET['doctor']) ? $_GET['doctor'] : '';

// Check if a valid doctor is selected
if ($doctor === 'nutrition') {
    // Assuming you have a database connection
    $conn = new mysqli('your_host', 'your_username', 'your_password', 'your_database');

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Query to retrieve doctor information
    $sql = "SELECT * FROM doctors WHERE specialty = 'nutrition'";
    $result = $conn->query($sql);

    // Fetch doctor details
    if ($result->num_rows > 0) {
        $doctorDetails = $result->fetch_assoc();
        $doctorName = $doctorDetails['name'];
        $doctorFees = $doctorDetails['fees'];
        $doctorAvailability = $doctorDetails['availability'];
    } else {
        // Handle no results
        $doctorName = "Doctor Not Found";
        $doctorFees = "N/A";
        $doctorAvailability = "N/A";
    }

    // Close the database connection
    $conn->close();
} else {
    // Handle invalid doctor selection
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Booking - <?php echo $doctorName; ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2>Book an Appointment with <?php echo $doctorName; ?></h2>

    <p><strong>Fees:</strong> $<?php echo $doctorFees; ?></p>
    <p><strong>Availability:</strong> <?php echo $doctorAvailability; ?></p>

    <form action="process_booking.php" method="post">
        <input type="hidden" name="doctor" value="<?php echo $doctorName; ?>">

        <!-- Add more fields for the appointment form as needed -->

        <button type="submit" class="btn btn-primary">Book Appointment</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
