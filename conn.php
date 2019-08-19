<?php
$conn = mysqli_connect('localhost','root','','map');
	
	if($conn){
		echo "";
	}
	else{
		echo $conn->error;
	}
?>