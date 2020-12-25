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
$Cat = $_POST['cat'];
$Wards = $_POST['Wards'];

$sql = "INSERT INTO healthcare (ID, Category, Wards_Allocated) VALUES ('$ID', '$Cat', '$Wards')";


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