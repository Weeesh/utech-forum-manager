<?php
$conn = mysqli_connect("localhost","root","","ojt_new");
	//check connection
	if (!$conn) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
	
?>
