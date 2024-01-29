<?php
// Start the session to persist user data
session_start();

// Check if the user is already logged in, redirect to the admin page if true
if (isset($_SESSION['admin'])) {
    header("Location: admin.php");
    exit();
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Hardcoded admin credentials (replace these with secure authentication)
    $adminUsername = "admin";
    $adminPassword = "admin123";

    // Get user input from the form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Validate the entered credentials
    if ($username === $adminUsername && $password === $adminPassword) {
        // Set a session variable to indicate that the user is logged in
        $_SESSION['admin'] = true;

        // Redirect to the admin page
        header("Location: admin.php");
        exit();
    } else {
        $error_message = "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        h2 {
            color: #333;
        }

        label {
            display: block;
            margin: 10px 0 5px;
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

        .error-message {
            color: #f00;
            margin-top: 10px;
        }
        .home button {
            background-color: #3498db;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 17px;
            font-weight: bold;
        }

        .home-button:hover{
            background-color: #2980b9;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Login</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <!-- Input fields for username and password -->
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>

        <!-- Submit button -->
        <input type="submit" value="Login">
        <a class="home-button" href="index.php">Go to Home</a>
    </form>

    <?php
    // Display error message if login attempt fails
    if (isset($error_message)) {
        echo "<p class='error-message'>$error_message</p>";
    }
    ?>
</div>

</body>
</html>
