<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
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
  	background-image: url("9.png");
  	height: 100%; 
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
	}
	table, th, td{
		border: 2px solid;
		width: 1100px;
		background-color: indianred;
	}
	.btn{
		width: 10%;
		height: 5%;
		font-size: 22px;
		padding: 0px;
	}
	.btn1{
		width: 10%;
		height: 5%;
		font-size: 22px;
		padding: 0px;
		background-color: #CA3433;
	}
	h1{
		color: white;
	}
	</style>
</head>
<body>
	<div class="bg-img">
	<center>
		<h1>Search Patient</h1>
		<div class="container">
			<form action="" method="POST">
				<input type="text" name="id" class="btn" placeholder="Enter ID">
				<input type="submit" name="search" class="btn1" value="Search By ID">
			</form>
			<table>
				<tr>
					<th>ID</th>
					<th>CNIC</th>
					<th>Name</th>
					<th>Age</th>
					<th>Admission Date</th>
					<th>Gender</th>
					<th>Country</th>
					<th>Province</th>
					<th>City</th>
					<th>District</th>
					<th>Test</th>
				</tr><br>
				<?php  
				$conn = mysqli_connect('localhost', 'root', '');
				$db = mysqli_select_db($conn, 'Covid');
				if (isset($_POST['search'])) 
				{
					$id = $_POST['id'];

					$sql = "SELECT * FROM patients p where p.Pt_ID='$id' ";
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
							<td><?php echo $row['District']; ?></td>
							<td><?php echo $row['Test']; ?></td>
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