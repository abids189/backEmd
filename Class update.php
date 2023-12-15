
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
    $class_ID =$_POST['class_ID'];
    $className = $_POST['className'];
    $Capacity = $_POST['Capacity'];
    $teacher_ID = $_POST['teacher_ID'];

    echo $class_ID;
    echo $className;
    echo $Capacity;
    echo $teacher_ID;
    

      //SQL Query to update the student table
    $sql = "UPDATE class  SET className='$className', Capacity='$Capacity',teacher_ID='$teacher_ID'WHERE='class_ID='$class_ID'";
    { 
      echo "class Add successfully";
    }
     
          else { echo "error";}
      
          $conn->close();
          ?>