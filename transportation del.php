<?php
$servername = "localhost";
$username = "root" ;
$password = "";
$dbname = "ua92school";
$conn = new mysqli ($servername, $username, $password, $dbname);
if ($conn->connect
_error) {
die("connection failed:" . $conn->connect_error);

}
else{
    echo"";
}


if ($_SERVER[ "REQUEST_METHOD"]
== "POST") {
$vehicle_ID = $_POST["vehicle_ID"];


// SQL Query to delete a vehicle ID in transportation table
$sql = "DELETE FROM transportation WHERE vehicle_ID = $Vehicle_ID";
if ($conn->query ($sql)
== TRUE) {
echo
"vehicle_ID deleted successfully";
} else {
echo
"Error deleting Vehicle_ID: " . $conn->error;

}}

$conn->close();
?>