<?php
	require("dbcon.php");

	$query = "SELECT *
			  FROM `website_access` `wa`
			  INNER JOIN `user_acc` `u`
			  ON `u`.`user_id` = `wa`.`user_id`
			  INNER JOIN `website` `w`
			  ON `w`.`website_id` = `wa`.`website_id`
			  ";

	$result = mysqli_query($conn,$query);

	return $result;

?>