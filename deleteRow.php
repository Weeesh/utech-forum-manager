<?php
    require("dbcon.php");

        global $conn;

        $data=$_POST['data'];
        $query = "DELETE FROM `comments` 
        		  WHERE id='".$data['id']."'";
        $result = mysqli_query($conn,$query);

        $id=$data['id'];

        return $result;

?>