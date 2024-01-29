<?php
require_once('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the required fields are set
    if (
        isset($_POST['name']) &&
        isset($_POST['department']) &&
        isset($_POST['item']) &&
        isset($_POST['date']) &&
        isset($_POST['quantity'])
    ) {
        // Escape and sanitize form data
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $department = mysqli_real_escape_string($conn, $_POST['department']);
        $item = mysqli_real_escape_string($conn, $_POST['item']);
        $date = mysqli_real_escape_string($conn, $_POST['date']);
        $quantity = mysqli_real_escape_string($conn, $_POST['quantity']);

        // Your SQL query to insert data into the database
        $sql = "INSERT INTO stationery_request (full_name, department, item, date, quantity) 
                VALUES ('$name', '$department', '$item', '$date', '$quantity')";

        if ($conn->query($sql) === TRUE) {
            // Successful insert
            echo "Your Data Have been success update!!!
            Thank You";
        } else {
            // Error in insert
            echo "Error inserting data: " . $conn->error;
        }

        // Close the database connection
        $conn->close();
    } else {
        echo "Invalid form submission. Please provide all required fields.";
    }
} else {
    // If the form is not submitted directly, redirect or handle as needed
    echo "Invalid form submission.";
}

?>

<!-- Add Back button to redirect to index.php -->
<a href="index.php">Back to Home</a>
