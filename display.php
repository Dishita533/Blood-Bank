<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donors List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            background-image: url("https://s-media-cache-ak0.pinimg.com/736x/5e/bb/35/5ebb350afa99fb3a2b75c5855e98bd9c.jpg");
            background-attachment:center;
            background-size:cover;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #000000;
            text-align:center;
            color:#FFFFFF;
        }
        
        tr:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <h2><center>Donors List</center></h2>
    <?php
    // Establish database connection
    $conn = new mysqli('localhost', 'root', '', 'bloodbank');

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve data from database
    $sql = "SELECT * FROM donors";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>Name</th><th>Blood Group</th><th>Phone</th><th>Address</th></tr>";
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["blood_group"] . "</td>";
            echo "<td>" . $row["phone"] . "</td>";
            echo "<td>" . $row["address"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }

    // Close connection
    $conn->close();
    ?>
</body>
</html>
