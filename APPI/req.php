<!DOCTYPE html>
<html>
<head>
	<title>App1</title>
</head>
<body>
<form method="post">
    <input type="text" name="PName" placeholder="Patient name" title="The official names of the patient; the one to be treated"><br><br>
    <input type="text" name="Age" placeholder="Age" title="How old is the patient to be treated"><br><br>
    Gender:<input type="radio" name="gender" value="male">Male&nbsp;&nbsp;&nbsp;
    <input type="radio" name="gender" value="female">Female&nbsp;&nbsp;&nbsp;
    <input type="radio" name="gender" value="other">Other<br><br>
    <textarea rows="4" cols="50" title="Why do you want to see the doctor?" placeholder="state your problem here"></textarea><br><br>
    <hr>
    <input type="text" name="response" placeholder="Feedback contact" title="How should the hospital get back to you after reviewing your problem?"><br><br>
    Appointment via:<input type="radio" name="comm" value="video">Video&nbsp;&nbsp;&nbsp;
    <input type="radio" name="comm" value="Audio">Audio&nbsp;&nbsp;&nbsp;
    <input type="radio" name="comm" value="text">Text<br><br>
    <input type="submit" name="register" value="Register">
</form>

<?php
	if (isset($_POST['register'])) {
		$usr = $_POST['username'];
 $em = $_POST['email'];
 $pwd = $_POST['password'];

 // echo $usr;
 // echo $em;
 // echo $pwd;

 //db credentials
$servername = 'localhost';
$dbusername = "root";
$dbpassword = "";
$dbname = "enock";

//connecting to the database
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

//checking errors
if ($conn->connect_error) {
	die("Connection error".$conn->connect_error);
}

//insert values into db
	$sql = "INSERT INTO details(username,email, password) VALUES('$usr','$em','$pwd')";

	//execute the query
	if ($conn->query($sql) === TRUE) {
		header('Location: index.php');
	}else{
		echo "Failled to register";
	}

	$conn->close();
	}
?>
</body>
</html>