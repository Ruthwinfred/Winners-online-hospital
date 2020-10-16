<!DOCTYPE html>
<html>
<head>
	<title>App1</title>
	<link rel="stylesheet" type="text/css" href="req.css">
</head>
<body>
	<div class="col">
<form method="post">
	<fieldset id="leg">
		<legend>Submit your request here</legend>
    <input type="text" name="PName" placeholder="Patient name" title="The official names of the patient; the one to be treated" required><br><br>
    <input type="text" name="Age" placeholder="Age" title="How old is the patient to be treated" required><br><br>
    Gender:<input type="radio" name="Gender" value="male" required>Male&nbsp;&nbsp;&nbsp;
    <input type="radio" name="Gender" value="female" required>Female&nbsp;&nbsp;&nbsp;
    <input type="radio" name="Gender" value="other" required>Other<br><br>
    <textarea rows="4" cols="50" title="Why do you want to see the doctor?" placeholder="state your problem here" name="Problem" required></textarea><br><br>
    <hr>
    <input type="text" name="Fdback" placeholder="Feedback contact" title="How should the hospital get back to you after reviewing your problem?" required><br><br>
    Appointment via:<select name="Appointment">
	<option required>Video call</option>
	<option required>Audio call</option>
	<option required>Text chat</option>
    </select><br><br>
	<input type="datetime-local" name="Date" placeholder="Date and time" title="The exact date and time the transaction was made" required><br><br>
	<input type="submit" name="sub" value="Submit">
</fieldset>
</form>
</div>
<?php
	if (isset($_POST['sub'])) {
		$pname = $_POST['PName'];
		$age = $_POST['Age'];
		$gnder = $_POST['Gender'];
		$prob = $_POST['Problem'];
		$fbk = $_POST['Fdback'];
		$app = $_POST['Appointment'];
		$dte = $_POST['Date'];
		

 // echo $usr;
 // echo $em;
 // echo $pwd;

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
	$sql = "INSERT INTO patients(PName,Age,Gender,Problem,Fdback,Appointment,Date) VALUES('$pname','$age','$gnder','$prob','$fbk','$app','$dte')";

	//execute the query
	if ($conn->query($sql) === TRUE) {
		echo "<left>Dear  ".$pname. ",  your request has been submitted successfully. You can now <a href='logout.php'>end the session</a> or <a href='Grid.html'>go back</a> 
		as you await for your appointment notice.</left>";
	}else{
		echo "Failled to register. Try again or <a href='Grid.html'>go back.</a>";
	}

	$conn->close();
	}
?>
</body>
</html>