
<?php
	
	$conn = new mysqli('localhost','root','','hnidb');
	
	
	$date=$_POST["user_date"];
	$time=$_POST["user_date"];
	
	$sql = "INSERT INTO m_appoint_table  values(1,'".$_POST['user_location']."','".$date."','".$time."','".$_POST['user_subject']."','".$_POST['user_reason']."','pending')";

  
if($conn->query($sql) === TRUE) {
    echo "Rescheduled successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
  
$conn->close();

?>