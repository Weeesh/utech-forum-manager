<?php
$conn = mysqli_connect("localhost","root","","forums");
	//check connection
	if (!$conn) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
	
?>
