
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
//SQL Query to update the student table
$sql ="UPDATE student SET firstName='$firstName', lastName='$lastName', email='$email',ClassLevel='$ClassLevel',P_ID='$P_ID'WHERE student_ID='$student_ID'";
if($conn->query($sql)===true)
    { 
      echo "record updated successfully";
    }
     
          else { echo "error";}
      
          $conn->close();
          ?>
  


    