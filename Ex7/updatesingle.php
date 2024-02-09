<?php
$title = "Update Data";
include '../header.php'; 
include 'db.php';

$a = $_GET['id'];
$result = mysqli_query($conn,"SELECT * FROM studentsinfo WHERE id= '$a'");
$row= mysqli_fetch_array($result);
?>

<section id='plan'>
    <div class='tourPlan'>
        <div class='row'>
            <div class='col text-center'>
            <h1>EXERCISE 7</h1>
            </div>
        </div><br>
<center><h2> Update your information below </h2></center><br>
<form name= "form1" method="post" action="">
<div class="row justify-content-center">
    
    <div class="col-md-4">
    <label for="fname">First Name:</label>
      <input type="text" class="form-control" placeholder="First name" name="fname" required value="<?php echo $row['first_name']; ?>">
    </div>
    <div class="col-md-4">
    <label for="fname">Last Name:</label>
      <input type="text" class="form-control" placeholder="Last name" name="lname" required value="<?php echo $row['last_name']; ?>" >
    </div>
  </div>
  <br>
  <div class="row justify-content-center">
    <div class="col-md-4">
    <label for="fname">City:</label>
      <input type="text" class="form-control" placeholder="City" name="city" required value="<?php echo $row['city']; ?>">
    </div>

    <div class="col-md-4">
    <label for="fname">Group ID:</label>
    <select class="form-control" id="groupid" name="groupid">
                    <option value="BBCAP19">BBCAP19</option>
                    <option value="BBCAP20">BBCAP20</option>
                    <option value="BBCAP21">BBCAP21</option>
                    <option value="BBCAP22">BBCAP22</option>
                    <option value="Others">Others</option>
                </select>
</div>

</div>
<br>
<div class="row justify-content-center" style="margin-left: 636px;">
    <div class="col-md-6">
        <button type="submit" class="btn btn-primary" name="submit">Update</button>
        <button type="button" class="btn btn-primary" onclick="window.location.href='index.php'" style="color: white;">Back</button>
    </div>
    </div> <br>
</form>
<?php 
if (isset($_POST['submit'])){
    
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $groupid = $_POST['groupid'];
    $city = $_POST['city'];
    $query = mysqli_query($conn,"UPDATE studentsinfo set first_name='$fname', last_name='$lname', groupid='$groupid', city='$city' where id='$a'");
    if($query){
        echo "<div class='alert alert-success text-center'>Your information is updated successfully</div>";
    } else {
        echo "<div class='alert alert-danger'>Error updating record: " . mysqli_error($conn) . "</div>";
    }
}

$conn->close();
include '../footer.php';
?>
