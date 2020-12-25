<?php  


$conn= mysqli_connect('localhost', 'root', '');
if (!$conn) {
	echo "Not connected to server";
}
if(!mysqli_select_db($conn, 'Covid'))
{
	echo "Database not connected";
}

$PID = $_POST['PtID'];
$HID = $_POST['HlID'];
$Pulse = $_POST['Pulse'];
$Temp = $_POST['temp'];
$Date = $_POST['Date'];

$sql = "INSERT INTO readings (Pt_ID, Hl_ID, Pulse, Temperature, Date) VALUES ('$PID','$HID','$Pulse','$Temp','$Date')";

if (!mysqli_query($conn, $sql))
{
	echo "Not Inserted";
}
else
{
	echo "Inserted";
}

header("refresh:10; url=medicine.html");



?>