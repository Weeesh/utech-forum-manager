<?php
    require("dbcon.php");

    global $conn;

    $data=$_POST['data'];
    
    $query = "UPDATE comments 
    		  SET Comment_URL='".."',
    		      Date_Posted='".."',
    		      Comment='".."',
    		      Account_Name='".."',
    		      Agent='".."',
    		      Backlink='".."'
    		  WHERE id='".$data['id']."'";
    
    $result=mysqli_query($conn,$query);

    return $result;

?>

