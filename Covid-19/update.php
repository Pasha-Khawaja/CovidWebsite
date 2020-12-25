<!DOCTYPE html>
<html>
<head>
	<title>Update Record</title>
	<style type="text/css">
	*{
	margin: 0;
	padding: 0
	font-family: Century Gothic;
	}

	body, html {
 	 height: 100%;
 	 margin: 0;
	}

	.bg-img {
  	background-image: url("8.jpg");
  	height: 100%; 
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
	}
	input{
		width: 40%;
		height: 5%;
		border: 1px;
		border-radius: 05px;
		padding: 8px 15px 8px 15px;
		margin: 10px 0px 15px 0px;
		box-shadow: 1px 1px 2px 1px grey;
	}
	.input{
		width: 40%;
		height: 5%;
		border: 1px;
		border-radius: 05px;
		padding: 8px 15px 8px 15px;
		margin: 10px 0px 15px 0px;
		box-shadow: 1px 1px 2px 1px grey;
		background-color: maroon;
		color: white;
	}
	h3{
		color: white;
		font-size: 26px;
	}	
	.btn{
		background-color: maroon;
		color: white;
	}
	</style>
</head>
<body>
<div class="bg-img">
<center>
	<h3>Update Patient Record</h3>
	<form method="POST" action="">
		<input type="number" name="ID" placeholder="Enter Patient ID"><br>
		<input type="text" name="Test" placeholder="Enter Test Result"><br>
		<input type="text" name="Date" placeholder="Enter Discharged Date"><br>
		<input type="submit" name="update" value="Update Table" class="btn"><br>
		<ul><li><a href="index.html" class="input">Home</a></li></ul>
	</form>
</center>
</div>
</body>
</html>


<?php  

$conn = mysqli_connect('localhost', 'root', '');
$db = mysqli_select_db($conn, 'Covid');

$ID = $_POST['ID'];
$Test = $_POST['Test'];
$Date = $_POST['Date'];
if (isset($_POST['update'])) 
{
	$id = $_POST['id'];
	$sql = "UPDATE patients SET Test='$Test', Discharge_Date='$Date' where Pt_ID='$ID'";
	$sql_run = mysqli_query($conn, $sql);

	if ($sql_run) 
	{
		echo "Updated";
	} 
	else 
	{
		echo "Not Updated";;
	}
}
?>