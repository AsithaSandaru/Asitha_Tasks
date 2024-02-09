<?php 

//what to do with the data

if (isset($_POST['submit'])) {
    $fname= $_POST['fname'];
    $lname= $_POST['lname'];
    $city= $_POST['city'];
    $groupid= $_POST['groupid'];
    include 'db.php';
    $sql="insert into studentsinfo (first_name, last_name, city, groupid)
    values('$fname', '$lname', '$city', '$groupid')";

    if($conn -> query($sql) === TRUE) {
        echo "<br> New record added";
    }
    else {
      echo "Error: " . $sql . "<br>" . $conn -> error;
  }
    $conn->close();
}



?>