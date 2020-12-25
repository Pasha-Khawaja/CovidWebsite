<?php 

$conn= mysqli_connect('localhost', 'root', '');
if (!$conn) {
	echo "Not connected to server";
}
if(!mysqli_select_db($conn, 'Covid'))
{
	echo "Database not connected";
}

$ID = $_POST['ID'];
$CNIC = $_POST['CNIC'];
$Name = $_POST['Name'];
$Age = $_POST['Age'];
$Date = $_POST['AdmDate'];
$Gender = $_POST['Gender'];
$Country = $_POST['Country'];
$Province = $_POST['Province'];
$City = $_POST['City'];	
$District = $_POST['District'];
$Test = $_POST['Test'];

$sql = "INSERT INTO patients (Pt_ID, CNIC, Pt_Name, Age, Admission_Date, Gender, Country, Province, City, District, Test) VALUES ('$ID', '$CNIC', '$Name', '$Age', '$Date', '$Gender', '$Country', '$Province', '$City', '$District', '$Test')";

if (!mysqli_query($conn, $sql))
{
	echo "Not Inserted";
}
else
{
	echo "Inserted";
}

header("refresh:5; url=readings.html");
?>