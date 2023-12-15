<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Website</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
 <table>
        <tr>
            <th>Teacher ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Lectures</th>
    
        </tr>
 
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ua92school";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("connection failed: " . $conn->connect_error);
}
else {
    echo "";
}
 
$sql = "SELECT * FROM teacher";
$result = mysqli_query($conn, $sql);
 
if (mysqli_num_rows($result) > 0) {
    echo "<tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "
        <tr>
        <th>{$row['teacher_ID']}</th>
        <th>{$row['firstName']}</th>
        <th>{$row['lastName']}</th>
        <th>{$row['lectures']}</th>
        
        </tr>";
    }
    echo "</tr>";
} else {
    echo "No tacher data found.";
}
mysqli_close($conn);
?>
</table>
 
</head>
<body>
