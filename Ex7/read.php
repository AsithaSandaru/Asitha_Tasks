<?php 
$title ="Read Data";
    include '../header.php'; 
?>


<?php
include 'db.php';
// SQL query to retrieve data from the 'studentsinfo' table
$sql = "SELECT * FROM studentsinfo";

// Execute the SQL query and store the result
$result = $conn->query($sql);

// Check if there are any results
if ($result->num_rows > 0) {
    echo "<section id='plan'>
    <div class='tourPlan'>
        <div class='row'>
            <div class='col text-center'>
            <h1>EXERCISE 7</h1>
            </div>
        </div>";
    echo "<div class='container'>";
    echo "<h2 class='mt-3 mb-3'><center>Student Information</h2></center>";
    echo "<div class='table-responsive'>";
    echo "<table class='table table-striped'>";
    echo "<thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>City</th>
                <th>Group ID</th>
                <th>Action</th>
            </tr>
          </thead>
          <tbody>";

    // Loop through the result set and display data in rows
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['first_name']}</td>
                <td>{$row['last_name']}</td>
                <td>{$row['city']}</td>
                <td>{$row['groupid']}</td>
                <td>
                    <a href='updatesingle.php?id={$row['id']}' class='btn btn-primary btn-sm'>Edit</a>
                    <a href='deletesingle.php?id={$row['id']}' class='btn btn-danger btn-sm'>Delete</a>
                </td>
              </tr>";
    }

    echo "</tbody></table>";
    echo "</div>"; // closing table-responsive div
    echo "</div>"; // closing container div
} else {
    // Display a message if no results are found
    echo "<div class='container'>";
    echo "<p class='mt-3 mb-3'>No results found.</p>";
    echo "</div>";
}
echo "<div>";
// Close the database connection
$conn->close();
?>
<?php 
    include '../footer.php'; 
?>