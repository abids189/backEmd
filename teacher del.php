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
$teacher_ID = $_POST["teacher_ID"];


// SQL Query to delete a class
$sql = "DELETE FROM teacher WHERE teacher_ID = $teacher_ID";
if ($conn->query ($sql)
== TRUE) {
echo
"teacher data deleted successfully";
} else {
echo
"Error deleting teacher data: " . $conn->error;

}}

$conn->close();
?>