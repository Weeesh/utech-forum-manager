<?php
    require("dbcon.php");

        global $conn;

        $data=$_POST['data'];
        $query = "UPDATE `breadcrumb`
                  SET `acc_id`='".$data['acc_id']."' 
                  WHERE `id`=1";
        $result = mysqli_query($conn,$query);

        return $result;

?>