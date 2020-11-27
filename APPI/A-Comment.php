<?php
	if (isset($_GET['id'])) {
		$edit_id = $_GET['id'];
		include 'db.php';

		$sql = "SELECT * FROM appointment WHERE id = '$edit_id'";
		$results = $conn->query($sql);

		if ($results->num_rows > 0) {
		while ($row = $results->fetch_assoc()) {
		$db_id = $row['id'];
		$db_nm = $row['Name'];
		}
	}
	// 
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<form method="post">
	<input type="text" name="id" value="<?php echo $db_id; ?>" placeholder="Patient Id" title="The patient's id">&nbsp;&nbsp;
	<input type="text" name="Name" value="<?php echo $db_nm; ?>" placeholder="Patient name" title="Registered name of a student">&nbsp;&nbsp;
    <input type="text" name="Comment" placeholder="Comment" title="Registered name of a student">&nbsp;&nbsp;
	<input type="submit" name="sub" value="Submit">
</form>
<?php
	if (isset($_POST['sub'])) {
        $id = $_POST['id'];
        $nm = $_POST['Name'];
        $com =$_POST['Comment'];

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

//insert values into db
	$sql = "INSERT INTO reply(id,Name,Comment)
   VALUES('$id','$nm','$com')";

	//execute the query
	if ($conn->query($sql) === TRUE) {
        echo  "<p style='color:rgba(39, 89, 4, 0.755)'><b>Report written successfully.</b></p>";
	}else{
		echo "Failled to register";
	}

	$conn->close();
	}
?>
</body>
</html>