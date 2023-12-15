
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
    $class_name = $_POST['class_name'];
    $Capacity = $_POST['Capacity'];
    $teacher_ID = $_POST['teacher_ID'];

    echo $class_ID;
    echo $class_name;
    echo $Capacity;
    echo $teacher_ID;
    
//if($conn->query($sql)===true)
//if(!mysqli_query($conn, $sql))
      // Prepare and execute SQL query
    $query = "INSERT INTO class (class_ID,class_name, Capacity, teacher_ID) VALUES ('$class_ID','$class_name', '$Capacity', '$teacher_ID')";
    if(!mysqli_query($conn, $sql)) die(
      'error: could not insert parent data');
     
  //close the connection of database
  mysqli_close($conn);
  ?>