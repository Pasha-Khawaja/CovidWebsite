<!DOCTYPE html>
<html>
<head>
	<title>Daily Stats</title>
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
  	background-image: url("6.png");
  	height: 100%; 
	background-position: center;
	background-repeat: no-repeat;	
	background-size: cover;
	}
	table, th, td{
		border: 2px solid;
		width: 1100px;
		background-color: #BEBDB8;
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
	.btn{
		background-color: maroon;
		color: white;
	}	
	</style>
</head>
<body>
<div class="bg-img">
	<center>
		<h1>Daily Statistics</h1>
		<div class="container">
			<form method="POST" action="">
				<input type="submit" name="submit" class="btn" value="Daily Stats">
				<ul><li><a href="index.html" class="input">Home</a></li></ul><br>
			</form>
			<table>
				<tr>
					<th>Patient Count</th>
					<th>Date</th>
				</tr>
				<?php  
				$conn = mysqli_connect('localhost', 'root', '');
				$db = mysqli_select_db($conn, 'Covid');
				if (isset($_POST['submit'])) 
				{
					$sql = "SELECT COUNT(Pt_ID) AS Count, Admission_Date FROM patients GROUP BY Admission_Date";
					$sql_run = mysqli_query($conn, $sql);

					while ($row = mysqli_fetch_array($sql_run)) 
					{
						?>
						<tr>
							<td><?php echo $row['Count']; ?></td>
							<td><?php echo $row['Admission_Date']; ?></td>
						</tr>
						<?php
					}
				}
				?>
			</table>
		</div>
	</center>
</div>
</body>
</html>