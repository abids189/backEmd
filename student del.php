<?php
$servername = "localhost";
$username = "root" ;
$password = "";
$dbname = "ua92school";
$conn = new mysqli ($servername, $username, $password, $dbname);
if ($conn->connect_error) {
die("connection failed:" . $conn->connect_error);

}
else{
    echo"";
}


if ($_SERVER[ "REQUEST_METHOD"]
== "POST") {
$student_ID = $_POST["student_ID"];


// SQL Query to delete a class
$sql = "DELETE FROM student WHERE student_ID = $student_ID";
if ($conn->query ($sql)
== TRUE) {
echo
"student deleted successfully";
} else {
echo
"Error deleting Student: " . $conn->error;

}}

$conn->close();
?>