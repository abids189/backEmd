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
$Class_ID = $_POST["Class _ID"];


// SQL Query to delete a class
$sql = "DELETE FROM class WHERE Class_ID = $Class_ID";
if ($conn->query ($sql)
== TRUE) {
echo
"class deleted successfully";
} else {
echo
"Error deleting class: " . $conn->error;

}}

$conn->close();
?>