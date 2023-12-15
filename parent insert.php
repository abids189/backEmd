<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "ua92school";

// connect to database
$conn=new mysqli($servername,$username,$password,$dbname);

// check conncetion
if($conn->connect_error) {
    die("conncetion failed:" . $conn->conncet_error);}

    //check if the form is submitted

    echo "parent information insert successfully";

    $parent_ID = $_POST['parent_ID'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];


    //SQL Query to insert data in Parent table
    $sql = "INSERT INTO parent(parent_ID, firstName, lastName, email) VALUES ('$parent_ID','$firstName','$lastName','$email,')";
   if(!mysqli_query($conn, $sql)) die(
    'error: could not insert parent data');
   
//close the connection of database
mysqli_close($conn);
?>