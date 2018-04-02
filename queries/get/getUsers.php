<?php
	require("../../dbcon.php");
	$ret=0;
	
	$query = "SELECT *
			  FROM `user_acc` 
			  WHERE username='".$_POST["username"]."'";

	$result = mysqli_query($conn,$query);

	while($ret==0 && $rs = $result->fetch_array(MYSQLI_ASSOC)) {
	    if(md5($_POST["password"]) == $rs["user_password"]){
	        $ret=1;
	    }
	}

	echo $ret;

?>