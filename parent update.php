<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "ua92school";

// connect to database
$conn-> new mysqli($localhost,$root,"",$ua92school);

// check conncetion
if($conn->connect_error) {
    die("conncetion failed:" . $conn->conncet_error);}

    //check if the form is submitted
if($_server['REQUEST_METHOD']=="POST"){

    $parent_ID = $_POST['parent_ID'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];


    //SQL Query to update the information parent
    $sql ="UPDATE parent SET =parent_ID='$parent_ID',firstName='$firstName',lastName='$lastName',email='$email' WHERE parent_ID='$parent_ID'";

// display parent information here
if($conn->query($sql) == TRUE){
    echo" parent information update successfully";
}
else{ echo"error:";}
}
$conn->close();
?>
