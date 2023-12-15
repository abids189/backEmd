<?php
$servername = "localhost";
$username = "root" ;
$password = "";
$dbname = "schoolpri";
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
$parent_ID = $_POST["parent _ID"];


// SQL Query to delete a parent_ID
$sql = "DELETE FROM parent WHERE parent_ID = $parent_ID";
if ($conn->query ($sql)
== TRUE) {
echo
"parentID deleted successfully";
} else {
echo
"Error deleting parent_ID: " . $conn->error;

}}

$conn->close();
?>