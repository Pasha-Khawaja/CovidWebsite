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
$Country = $_POST['Country'];
$Province = $_POST['Province'];
$City = $_POST['City'];
$District = $_POST['District'];
$Patients = $_POST['Patients'];
$Chambers = $_POST['Chambers'];



$sql = "INSERT INTO isolationFacility (ID, Country, Province, City, District, No_of_Patients, No_of_Wards) VALUES ('$ID','$Country','$Province','$City','$District','$Patients','$Chambers')";


if (!mysqli_query($conn, $sql))
{
	echo "Not Inserted";
}
else
{
	echo "Inserted";
}

header("refresh:5; url=index.html");


?>