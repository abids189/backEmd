
<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "ua92school";


    // Connect to the database
    $conn = mysqli_connect('localhost', 'root', '', 'ua92school');
  if (!$conn) {
    die('Error: Could not connect to the database');
}

    // Extract form data
    $teacher_ID =$_POST['teacher_ID'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $lectures = $_POST['lectures'];

    echo $teacher_ID;
    echo $firstName;
    echo $lastName;
    echo $lectures;

      // Prepare and execute SQL query
    $sql = "INSERT INTO teacher (teacher_ID,firstName, lastName, lectures) VALUES ('$teacher_ID','$firstName', '$lastName', '$lectures')";
    if($conn->query($sql)===true)
    { 
      echo "teacher Add successfully";
    }
     
          else { echo "error";}
      
          $conn->close();
          ?>