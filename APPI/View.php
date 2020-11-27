<?php
 //db credentials
$servername = 'localhost';
$dbusername = "root";
$dbpassword = "";
$dbname = "register";

//connecting to the database
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

//checking errors
if ($conn->connect_error) {
	die("Connection error".$conn->connect_error);
}

//select from the table
$sql = "SELECT * FROM patients";
$results = $conn->query($sql);

if ($results->num_rows > 0) {
    echo "<table> 
    <center>Patient consultation requests<br></center>
		  <tr>
		  <th>Id</th>
		  <th>Name</th>
		  <th>Age</th>
          <th>Gender</th>
          <th>Problem</th>
		  <th>HealthHistory</th>
		  <th>Habits</th>
          <th>AOB</th>
          <th>Feedback</th>
		  <th>Appointment</th>
		  <th>Date</th>
		  <th>Action</th> 
		  </tr>";
	while ($row = $results->fetch_assoc()) {
	echo "<tr>
		  <td>".$row['id']."</td>
		  <td>".$row['Name']."</td>
		  <td>".$row['Age']."</td>
          <td>".$row['Gender']."</td>
          <td>".$row['Problem']."</td>
		  <td>".$row['HealthHistory']."</td>
		  <td>".$row['Habits']."</td>
          <td>".$row['AOB']."</td>
          <td>".$row['Feedback']."</td>
		  <td>".$row['Appointment']."</td>
		  <td>".$row['Date']."</td>
		  <td><a href='C-Comment.php?id=$row[id]'>Doctor's comment</a></td>
		  </tr>";
	}
	echo "</table>";

}
?>
