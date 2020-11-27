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
$sql = "SELECT * FROM reply";
$results = $conn->query($sql);

if ($results->num_rows > 0) {
    echo "<table> 
    <center>Doctors report<br></center>
		  <tr>
		  <th>Id</th>
		  <th>Name</th>
          <th>Comment</th>
		  </tr>";
	while ($row = $results->fetch_assoc()) {
	echo "<tr>
		  <td>".$row['id']."</td>
		  <td>".$row['Name']."</td>
		  <td>".$row['Comment']."</td>
		  </tr>";
	}
	echo "</table>";

}
?>
