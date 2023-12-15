
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
    $student_ID =$_POST['student_ID'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $ClassLevel = $_POST['ClassLevel'];
    $P_ID = $_POST['P_ID'];
    echo $student_ID;
    echo $firstName;
    echo $lastName;
    echo $email;
    echo $ClassLevel;
    echo $P_ID; 

      // Prepare and execute SQL query
    $sql = "INSERT INTO student (student_ID,firstName, lastName, email, ClassLevel, P_ID) VALUES ('$student_ID','$firstName', '$lastName', '$email', '$ClassLevel', '$P_ID')";
    if($conn->query($sql)===true)
    { 
      
      echo "student Add successfully";
    }
     
          else { echo "error";}
      
          $conn->close();
          ?>