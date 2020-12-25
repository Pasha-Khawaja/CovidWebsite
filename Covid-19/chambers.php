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
$PID = $_POST['PtID'];
$HID = $_POST['HlID'];

$sql = "INSERT INTO isolationchambers (Chambers_ID, Pt_ID, Hl_ID) VALUES ('$ID', '$PID', '$HID')";

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