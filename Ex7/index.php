<?php 
$title ="Create Data";
    include '../header.php'; 
?>
<section id="plan">
            <div class="tourPlan">
                <div class="row">
                    <div class="col text-center">
                    <h1>EXERCISE 7</h1>
                    </div>
                </div>
                <br>
<center><h2>Input Your Information Below:</h2></center><br>
<div class="row justify-content-center">
    <div class="col-md-5">
<form name="form1" method="post" action="">
    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="fname">First Name:</label>
                <input type="text" class="form-control" id="fname" placeholder="Enter your first name" name="fname" required>
            </div>
            <div class="col">
                <label for="lname">Last Name:</label>
                <input type="text" class="form-control" id="lname" placeholder="Enter your last name" name="lname" required>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="city">City:</label>
                <input type="text" class="form-control" id="city" placeholder="Enter your city" name="city" required>
            </div>
            <div class="col">
                <label for="groupid">Group ID:</label>
                <select class="form-control" id="groupid" name="groupid">
                    <option value="BBCAP19">BBCAP19</option>
                    <option value="BBCAP20">BBCAP20</option>
                    <option value="BBCAP21">BBCAP21</option>
                    <option value="BBCAP22">BBCAP22</option>
                    <option value="Others">Others</option>
                </select>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary" name="submit" style="float: right;">Submit</button>
    </div>
    </div>
</form>

<?php

if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];     
    $lname = $_POST['lname'];     
    $city = $_POST['city'];      
    $groupid = $_POST['groupid'];

    
    include 'db.php';

    
    $sql = "INSERT INTO studentsinfo (first_name, last_name, groupid, city)
            VALUES ('$fname', '$lname', '$groupid','$city')";

    
    if ($conn->query($sql) === TRUE) {
        
        echo "<br><div class='alert alert-success text-center'>Your information is successfully saved</div>";
    } else {
        
        echo "<div class='alert alert-danger'>Error updating record: " . $sql . "<br>" . $conn->error;
    }

    
    $conn->close();
}
?>

<?php 
    include '../footer.php'; 
?>

