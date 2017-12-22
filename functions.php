<?php
    require("dbcon.php");

    function allAccounts(){
        global $conn;

        $query = "SELECT *
                  FROM `accounts` ";
        $result = mysqli_query($conn,$query);

        return $result;
    }

    function allGenres($data){
        global $conn;
        
        $query = "SELECT *
                  FROM `genre` 
                  WHERE `acc_id` = '$data'";
        $result = mysqli_query($conn,$query);

        return $result;
    }

    function allNiche($data){
        global $conn;
        
        $query = "SELECT *
                  FROM `niche` 
                  WHERE `genre_id` = '$data'";
        $result = mysqli_query($conn,$query);

        return $result;
    }

    function allMedia($data){
        global $conn;
        
        $query = "SELECT *
                  FROM `media` 
                  WHERE `niche_id` = '$data'";
        $result = mysqli_query($conn,$query);

        return $result;
    }

    function allThread($data){
        global $conn;

        $query = "SELECT *
                  FROM `thread` 
                  WHERE `media_id` = '$data'";
        $result = mysqli_query($conn,$query);

        return $result;

    }

    function allComments($data){
        $conn = mysqli_connect("localhost","root","","forums");
        //check connection
        if (!$conn) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }
        $query = "SELECT * 
                  FROM `comments` 
                  WHERE `thread_id` = '$data'";
        $result = mysqli_query($conn,$query);

        return $result;

    }


    function getAccount($data){
        global $conn;

        $query = "SELECT *
                  FROM `accounts` 
                  WHERE `id`= $data";
        $result = mysqli_query($conn,$query);

        return $result;
    }   

    function accountBreadCrumb($data){
        global $conn;

        $query = "UPDATE `breadcrumb`
                  SET `acc_id`='".$data['acc_id']."' 
                  WHERE `id`=1";
        $result = mysqli_query($conn,$query);

        return $result;
    }

    function getCrumbs(){
        global $conn;

        $query = "SELECT *
                  FROM `breadcrumb` 
                  WHERE `id`= 1";
        $result = mysqli_query($conn,$query);

        return $result;
    }
    // function getcsvheader(){
    //     $file = fopen("seo.csv","r");
    //     $ret =fgetcsv($file);

    //     fclose($file);

    //     return $ret;
    // }

    // function webGenreSearch($data){
    //     global $conn;
        
    //     $query = "SELECT `URL` 
    //               FROM `website` 
    //               WHERE `genre` = '$data'";
    //     $result = mysqli_query($conn,$query);

    //     return $result;
    // }

    // function allWebUrls(){
    //     global $conn;

    //     $query = "SELECT `URL` 
    //               FROM `website`";
    //     $result = mysqli_query($conn,$query);

    //     return $result;
    // }

    // function webUrlCommentSearch($data){
    //     global $conn;

    //     $query = "SELECT `thread_url`, `website_url`, `comment_url`, `date_posted`, `comment`, `account` 
    //               FROM `comments` 
    //               WHERE `website_url` = '$data'";
    //     $result = mysqli_query($conn,$query);

    //     return $result;
    // }

    // function allThreadUrls(){
    //     global $conn;
        
    //     $query = "SELECT `thread_url` 
    //               FROM `thread`";
    //     $result = mysqli_query($conn,$query);

    //     return $result;

    // }

    // function threadUrlCommentSearch($data){
    //     global $conn;
        
    //     $query = "SELECT DISTINCT `comment_url`, `date_posted`, `comment`, `account`, `agent`, `backlink` 
    //               FROM `comments` 
    //               WHERE `thread_url` = '$data'";
    //     $result = mysqli_query($conn,$query);

    //     return $result;

    // }

    // function allWebAccounts($data){
    //     global $conn;

    //     $query = "SELECT DISTINCT a.username, a.password 
    //               FROM accounts a, website w, thread t
    //               WHERE w.URL = a.website_url  AND w.URL = '$data'";
    //     $result = mysqli_query($conn,$query);
        
    //     return $result;

    // }

    // function accountDetails($user){
    //     global $conn;
        
    //     $query = "SELECT `username`, `password`, 
    //               FROM `accounts`
    //               WHERE `username` = '$user'";
    //     $result = mysqli_query($conn,$query);

    //     return $result;

    // }



    // function accountCommentSearch($data){
    //     global $conn;
        
    //     $query = "SELECT `thread_url`, `website_url`, `comment_url`, `date_posted`, `comment`, `account`, 
    //               FROM `comments` 
    //               WHERE `account` = '$data'";
    //     $result = mysqli_query($conn,$query);

    //     return $result;

    // }

?>