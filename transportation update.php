
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
    $vehicle_ID =$_POST['vehicle_ID'];
    $vehicle_type = $_POST['vehicle_type'];
    $driver_name = $_POST['driver_name'];
    $teacher_ID = $_POST['teacher_ID'];
    $student_ID = $_POST['student_ID'];
    echo $vehicle_ID;
    echo $vehicle_type;
    echo $driver_name;
    echo $teacher_ID;
    echo $student_ID;
    

      // Prepare and execute SQL query
    $sql ="UPDATE transportation SET vehicle_type='$vehicle_type',driver_name='$driver_name',teacher_ID='$teacher_ID',student_ID='$student_ID'WHERE vehicle_ID='$vehicle_ID'";
    if($conn->query($sql)===true)
    { 
      echo "transportation Add successfully";
    }
     
          else { echo "error";}
      
          $conn->close();
          ?>