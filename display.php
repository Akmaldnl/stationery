<!DOCTYPE HTML>  
<html lang="en">
<head>
<style>
  body {
    font-family: 'Arial', sans-serif;
    background-color: #f7f7f7;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
  }

  .display-container {
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 40%;
    max-width: 400px;
    text-align: center;
  }

  h2 {
    color: #333;
    font-weight: bold;
  }

  .input-value {
    background-color: #f2f2f2;
    padding: 8px;
    border-radius: 4px;
    margin-bottom: 10px;
  }
</style>
</head>
<body>

<?php
// Check if the keys exist in $_POST
$name = isset($_POST["name"]) ? $_POST["name"] : '';
$department = isset($_POST["department"]) ? $_POST["department"] : '';
$item = isset($_POST["item"]) ? $_POST["item"] : '';
$date = isset($_POST["date"]) ? $_POST["date"] : '';
$quantity = isset($_POST["quantity"]) ? $_POST["quantity"] : '';
?>

<div class="display-container">
  <h2>Display Input Values</h2>

  <!-- Display input values with styling -->
  <div class="input-value">Name: <?php echo $name; ?></div>
  <div class="input-value">Department: <?php echo $department; ?></div>
  <div class="input-value">Item: <?php echo $item; ?></div>
  <div class="input-value">Date: <?php echo $date; ?></div>
  <div class="input-value">Quantity: <?php echo $quantity; ?></div>
  <!-- Back button -->
  <button class="back-button" onclick="goBack()">Back</button>
  <button class="proceed_page.php" onclick="proceed()">Proceed</button>

</div>

<script>
// JavaScript function to go back to the previous page
function goBack() {
  window.history.back();
}

// JavaScript function to proceed to the next page
function proceed() {
  // You can redirect to the next page here
  window.location.href = 'proceed_page.php';
}
</script>

</body>
</html>
