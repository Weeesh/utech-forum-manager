<?php
	require("dbcon.php");

	$query = "SELECT *
			  FROM `niche_access` `na`
			  INNER JOIN `user_acc` `u`
			  ON `u`.`user_id` = `na`.`user_id`
			  INNER JOIN `niche` `n`
			  ON `n`.`niche_id` = `na`.`niche_id`
			  INNER JOIN `genre` `g`
			  ON `g`.`genre_id` = `n`.`genre_id`
			  INNER JOIN `website` `w`
			  ON `w`.`website_id` = `g`.`website_id`
			  ";

	$result = mysqli_query($conn,$query);

	return $result;

?>