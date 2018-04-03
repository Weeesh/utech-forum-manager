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
    
    
        //Updating count number of thread
        $query="SELECT DISTINCT COUNT(c.thread_id) AS numbers FROM comments c WHERE c.thread_id = ".$data['thread_id']." GROUP BY c.thread_id;";
        $result = mysqli_query($conn,$query);
        $val = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $query="UPDATE thread SET comment_no = '".$val['numbers']."' WHERE thread.id='".$data['thread_id']."';";
        $result = mysqli_query($conn,$query);


        // TESTING!!!!!!!!!!!!!
        $query = "SELECT *
                  FROM `thread` 
                  WHERE `id` = ".$data['thread_id']."";
        $result = mysqli_query($conn,$query);
        $val = mysqli_fetch_array($result, MYSQLI_ASSOC);

        //echo "<script>console.log(".$val['comment_no'].");</script>";

        $query = "SELECT SUM(comment_no) AS dupa, SUM(media_id) AS dupo
                  FROM `thread` 
                  WHERE `media_id` = ".$data['media_id']."";
        $result = mysqli_query($conn,$query);
        $val = mysqli_fetch_array($result, MYSQLI_ASSOC);

        //echo "<script>console.log(".$val['dupa'].");</script>";

        $query="UPDATE media SET comment_no = '".$val['dupa']."', thread_no = '".$val['dupo']."' WHERE media.id='".$data['media_id']."';";
        $result = mysqli_query($conn,$query);

?>

