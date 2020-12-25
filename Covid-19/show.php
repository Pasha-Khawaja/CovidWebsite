<!DOCTYPE html>
<html>
<head>
	<title>View All Records</title>
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
  	background-image: url("7.jpg");
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
	h1{
		color: white;
	}
	</style>
</head>
<body>
<div class="bg-img">
	<center>
		<h1>All Records</h1>
		<div class="container">
			<form method="POST" action="">
			<ul>
				<li><input type="submit" name="submit" class="btn" value="View All"></li>
				<li><a href="index.html" class="input">Home</a></li>
			</ul>
			</form>
			<table>
				<tr>
					<th>Patient's ID</th>
					<th>CNIC</th>
					<th>Name</th>
					<th>Age </th>
					<th>Admission Date</th>
					<th>Gender</th>
					<th>Country</th>
					<th>Province</th>
					<th>City</th>
					<th>Medicine</th>
					<th>Dose</th>
					<th>Reading's Date</th>
					<th>Pulse</th>
					<th>Temperature</th>
					<th>Chamber ID</th>
				</tr><br>
				<?php  
				$conn = mysqli_connect('localhost', 'root', '');
				$db = mysqli_select_db($conn, 'Covid');
				if (isset($_POST['submit'])) 
				{
					$sql = "SELECT DISTINCT p.Pt_ID, CNIC, Pt_Name, Age, Admission_Date, Gender, Country, Province, City, m.Name, r.Date, Dose, Pulse, Temperature, Chambers_ID FROM patients p INNER JOIN medicine m ON p.Pt_ID=m.Pt_ID INNER JOIN readings r ON m.Pt_ID=r.Pt_ID INNER JOIN isolationchambers c ON r.Pt_ID=c.Pt_ID ORDER BY Pt_ID ASC";
					$sql_run = mysqli_query($conn, $sql);

					while ($row = mysqli_fetch_array($sql_run)) 
					{
						?>
						<tr>
							<td><?php echo $row['Pt_ID']; ?></td>
							<td><?php echo $row['CNIC']; ?></td>
							<td><?php echo $row['Pt_Name']; ?></td>
							<td><?php echo $row['Age']; ?></td>
							<td><?php echo $row['Admission_Date']; ?></td>
							<td><?php echo $row['Gender']; ?></td>
							<td><?php echo $row['Country']; ?></td>
							<td><?php echo $row['Province']; ?></td>
							<td><?php echo $row['City']; ?></td>
							<td><?php echo $row['Name']; ?></td>
							<td><?php echo $row['Dose']; ?></td>
							<td><?php echo $row['Date']; ?></td>
							<td><?php echo $row['Pulse']; ?></td>
							<td><?php echo $row['Temperature']; ?></td>
							<td><?php echo $row['Chambers_ID']; ?></td>
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