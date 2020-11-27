<!DOCTYPE html>
<html lang="en">
<head>
	<title>Dashboard-The Winners online hospital</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
 



	<hr>
	<nav style="background-color: rgba(39, 89, 4, 0.755)">
	<center>
<a href="index.php" style="color: white" title="Display consultation details">Home</a>&nbsp;&nbsp;|
<a href="P-Dashboard.php?id=Report" style="color: white" title="Display consultation details">Consultation report</a>&nbsp;&nbsp;|
<a href="P-Dashboard.php?id=report" style="color: white" title="Display appointment details">Appointment report</a>&nbsp;&nbsp;|
<a href="P-Dashboard.php?id=logout" style="color: white" title="Leave the page">Logout</a>&nbsp;&nbsp;|
<a href = "mailto: abc@example.com" title="Click here to communicate with us via email" style="color: white" >Email us</a>
<hr>
</nav>
</center>
</body>
</html>

<?php
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		if ($id=='Report')
		{
			include 'C-Report.php';
		}
    if ($id=='logout') {
			echo "You clicked logout";
		}
	}
?>

<?php
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		if ($id=='report')
		{
			include 'A-Report.php';
		}
    if ($id=='logout') {
			echo "You clicked logout";
		}
	}
?>
