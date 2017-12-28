<?php
    require("dbcon.php");

    global $conn;

    $data=$_POST['data'];
    
    $query = "UPDATE comments 
    		  SET Comment_URL='".$data['url']."',
    		      Date_Posted='".$data['date']."',
    		      Comment='".$data['comment']."',
    		      Account_Name='".$data['account']."',
    		      Agent='".$data['agent']."',
                  Username='".$data['username']."',
                  Password='".$data['password']."',
    		      Backlink='".$data['backlink']."'
    		  WHERE id='".$data['id']."'";
    
    $result=mysqli_query($conn,$query);

    return $result;

?>

