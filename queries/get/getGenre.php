<?php
	require("dbcon.php");

	$query = "SELECT *
			  FROM `genre_access` `ga`
			  INNER JOIN `user_acc` `u`
			  ON `u`.`user_id` = `ga`.`user_id`
			  INNER JOIN `genre` `g`
			  ON `g`.`genre_id` = `ga`.`genre_id`
			  INNER JOIN `website` `w`
			  ON `w`.`website_id` = `g`.`website_id`
			  ";

	$result = mysqli_query($conn,$query);

	return $result;

?>