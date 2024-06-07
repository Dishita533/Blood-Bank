<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thank You Card</title>
  <style>
    body {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
      background-color: #f0f0f0;
    }

    .card {
      text-align: center;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      background-color: #ffffff;
      max-width: 400px;
      width: 100%;
    }
  </style>
</head>
<body>
  <div class="card">
    
    <p>"Your blood, their lifeline. Donate today, make a difference."</p>
<h2><a href='main.html'>HOME</a></h2></center>
  </div>
<br>




<?php
// Establish connection to MySQL database
$conn = new mysqli('localhost', 'root', '', 'bloodbank');


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$name = $_POST['name'];
$blood_group = $_POST['blood_group'];
$phone = $_POST['phone'];
$address = $_POST['address'];

// Prepare SQL statement to insert data into the database
$sql = "INSERT INTO donors (name, blood_group, phone, address) VALUES ('$name', '$blood_group', '$phone', '$address')";

// Execute SQL statement
if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>



</body>
</html>