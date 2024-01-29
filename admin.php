<?php

$conn= new mysqli('localhost','root','','stationery')or die("Could not connect to mysql".mysqli_error($con));

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$conn->close();

// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['admin'])) {
    // Redirect to the login page if not logged in
    header("Location: login.php");
    exit();
}

// Sample data (replace this with data from your storage mechanism)
$adminData = [
    'name' => 'Admin Name',
    'department' => 'Admin Department',
    'items' => ['Item1', 'Item2', 'Item3'],
];

// Check if the form is submitted for updating data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Update data based on the form inputs
    $adminData['full_name'] = test_input($_POST["new_name"]);
    $adminData['department_name'] = test_input($_POST["new_department"]);

    // Update items (for simplicity, replacing all items with the new list)
    $adminData['items'] = explode(',', $_POST["new_items"]);

    // In a real-world scenario, you would perform database updates here

    // Display a success message
    $success_message = "Data updated successfully!";
}

// Function to sanitize user input
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .admin-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 400px;
            text-align: center;
        }

        h2, h3 {
            color: #333;
        }

        p {
            margin: 5px 0;
            color: #555;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        a {
            color: #4caf50;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .success-message {
            color: #4caf50;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="admin-container">
    <h2>Welcome to the Admin Page!</h2>

    <?php if (isset($success_message)) : ?>
        <p class="success-message"><?php echo $success_message; ?></p>
    <?php endif; ?>

    <!-- Edit form -->
    <h3>Edit data</h3>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="new_name">New Name:</label>
        <input type="text" name="new_name" id="new_name" required>

        <label for="new_department">New Department:</label>
        <input type="text" name="new_department" id="new_department" required>

        <label for="new_items">New Items (comma-separated):</label>
        <input type="text" name="new_items" id="new_items" required>

        <input type="submit" value="Update Data">
    </form>

    <p><a href="logout.php">Logout</a></p>
    <!-- Add Home button to redirect to index.php -->
    <a class="home-button" href="index.php">Go to Home</a>
</div>

</body>
</html>