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
$MName = $_POST['Medicine'];
$Dose = $_POST['Dose'];
$MName1 = $_POST['Medicine1'];
$Dose1 = $_POST['Dose1'];

$sql = "INSERT INTO medicine (Pt_ID, Hl_ID, Name, Dose, Prev_Med_Name, Prev_Med_Dose) VALUES ('$PID','$HID','$MName','$Dose','$MName1', '$Dose1')";

if (!mysqli_query($conn, $sql))
{
	echo "Not Inserted";
}
else
{
	echo "Inserted";
}

header("refresh:3; url=chambers.html");

?>