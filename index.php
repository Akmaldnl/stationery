<?php
require_once('connection.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STATIONERY FORM</title>
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

        form {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
        }

        img {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        select,
        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="date"] {
            padding: 6px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        #stationeryForm {
            text-align: center;
        }

        #admin-login a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #e44d26;
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        #admin-login a:hover {
            background-color: #d1401f;
        }
    </style>
</head>

<body>

    <form method="post" action="stationery_requests.php">
        <img src="https://mir-s3-cdn-cf.behance.net/projects/404/f03b2358848959.Y3JvcCwxMzM1LDEwNDUsMjI0LDA.jpg" alt="unikl_logo">

        <?php
            $sql = "SELECT * FROM full_name";
            $result = $conn->query($sql);

            if ($result === false) {
                echo "Error: " . $conn->error;
            } else {
                // Fetch and display the data
                echo '<label for="name">Full Name:</label>';
                echo '<select name="name" required>';
                echo '<option value="" disabled selected>Select Full Name</option>';

                while ($row = $result->fetch_assoc()) {
                    echo '<option value="' . $row["name"] . '">' . $row["name"] . '</option>';
                }

                echo '</select>';
            }
            ?>


        <?php

        $sql = "SELECT * FROM departments";
        $result = $conn->query($sql);

        if ($result === false) {
            echo "Error: " . $conn->error;
        } else {
            // Fetch and display the data
            echo '<label for="department">Department:</label>';
            echo '<select name="department" id="department" required>';
            echo '<option value="" disabled selected>Select Department</option>';

            while ($row = $result->fetch_assoc()) {
                echo '<option value="' . $row["department_name"] . '">' . $row["department_name"] . '</option>';
            }

            echo '</select>';
        }
        ?>

        <?php

        $sql = "SELECT item_id, item_name FROM items";
        $result = $conn->query($sql);

        if ($result === false) {
            echo "Error: " . $conn->error;
        } else {
            // Fetch and display the data
            echo '<label for="items">Item:</label>';
            echo '<select name="item" id="item_id" required>';
            echo '<option value="" disabled selected>Select Item</option>';

            while ($row = $result->fetch_assoc()) {
                echo '<option value="' . $row["item_name"] . '">' . $row["item_name"] . '</option>';
            }

            echo '</select>';
        }

        ?>

        <label for="date">Date:</label>
        <input type="date" name="date" id="date" required>

        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" id="quantity" required>

        <form method="post" action="stationery_requests.php" id="stationeryForm">
            <!-- Your form fields go here -->
            <!-- Submit button -->
            <input type="submit" value="Submit">
            <div id="admin-login">
            <a href="admin.php">Admin Login</a>
        </div>
        </form>

        

    </form>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#stationeryForm").submit(function (e) {
                e.preventDefault(); // Prevent the form from submitting the traditional way

                // Explicitly select the value of the item dropdown
                var selectedItem = $("#item_id").val();
                // Add the selected item to the form data
                $("#item_id").prop("disabled", false); // Enable the dropdown before serializing
                var formData = $("#stationeryForm").serialize(); // Serialize form data

                $.ajax({
                    type: "POST",
                    url: "stationery_requests.php", // Replace with the actual PHP processing script
                    data: formData,
                    success: function (response) {
                        // Handle the success response here
                        console.log(response);
                        if (response === 'success') {
                            alert('Form submitted successfully!');
                        } else {
                            alert('Error submitting form. Please try again.');
                        }
                    },
                    error: function (error) {
                        // Handle the error here
                        console.log(error);
                        alert('Error submitting form. Please try again.');
                    }
                });
            });
        });

    </script>
</body>

</html>
