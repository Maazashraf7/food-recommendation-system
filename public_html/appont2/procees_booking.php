<?php
// process_booking.php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $doctor = $_POST['doctor'];
    
   
    require '../env.php';
    $con = mysqli_connect(SERVER, USERNAME, PASSWORD, DATABASE);
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert the booking details into the database (modify as needed)
    $sql = "INSERT INTO appointments (doctor, user_name, user_email, appointment_date) 
            VALUES ('$doctor', 'John Doe', 'john@example.com', '2023-12-31')";

    if ($conn->query($sql) === TRUE) {
        echo "Appointment booked successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    
    $conn->close();
} else {
    // Redirect to the homepage if accessed directly
    header("Location: index.html");
    exit();
}
?>
