<?php
	require("dbcon.php");

	$query = "SELECT *
			  FROM `media_access` `ma`
			  INNER JOIN `user_acc` `u`
			  ON `u`.`user_id` = `ma`.`user_id`
			  INNER JOIN `media` `m`
			  ON `m`.`media_id` = `ma`.`media_id`
			  INNER JOIN `niche` `n`
			  ON `n`.`niche_id` = `m`.`niche_id`
			  INNER JOIN `genre` `g`
			  ON `g`.`genre_id` = `n`.`genre_id`
			  INNER JOIN `website` `w`
			  ON `w`.`website_id` = `g`.`website_id`
			  ";

	$result = mysqli_query($conn,$query);

	return $result;

?>