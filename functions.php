<?php
    require("dbcon.php");

    function allAccounts(){
        global $conn;

        $query = "SELECT *
                  FROM `accounts` ";
        $result = mysqli_query($conn,$query);

        return $result;
    }

    function allGenres($url){
        global $conn;
        
        $query = "SELECT *
                  FROM `genre` 
                  WHERE `acc_id` = '$url'";
        $result = mysqli_query($conn,$query);

        return $result;
    }

    function allNiche($url){
        global $conn;
        
        $query = "SELECT *
                  FROM `niche` 
                  WHERE `genre_id` = '$url'";
        $result = mysqli_query($conn,$query);

        return $result;
    }

    function allMedia($url){
        global $conn;
        
        $query = "SELECT *
                  FROM `media` 
                  WHERE `niche_id` = '$url'";
        $result = mysqli_query($conn,$query);

        return $result;
    }

    function allThread($url){
        global $conn;

        $query = "SELECT *
                  FROM `thread` 
                  WHERE `media_id` = '$url'";
        $result = mysqli_query($conn,$query);

        return $result;

    }

    function allComments($url){
        $conn = mysqli_connect("localhost","root","","forums");
        //check connection
        if (!$conn) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }
        $query = "SELECT * 
                  FROM `comments` 
                  WHERE `thread_id` = '$url'";
        $result = mysqli_query($conn,$query);

        return $result;

    }


    function getAccount($url){
        global $conn;

        $query = "SELECT *
                  FROM `accounts` 
                  WHERE `id`= $url";
        $result = mysqli_query($conn,$query);

        return $result;
    }   

    function accountBreadCrumb($data){

        $query = "UPDATE breadcrumb SET acc_id='".$data['acc_id']."' WHERE id=1";
        mysqli_query($conn,$query);
    }
    // function getcsvheader(){
    //     $file = fopen("seo.csv","r");
    //     $ret =fgetcsv($file);

    //     fclose($file);

    //     return $ret;
    // }

    // function webGenreSearch($url){
    //     global $conn;
        
    //     $query = "SELECT `URL` 
    //               FROM `website` 
    //               WHERE `genre` = '$url'";
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

    // function webUrlCommentSearch($url){
    //     global $conn;

    //     $query = "SELECT `thread_url`, `website_url`, `comment_url`, `date_posted`, `comment`, `account` 
    //               FROM `comments` 
    //               WHERE `website_url` = '$url'";
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

    // function threadUrlCommentSearch($url){
    //     global $conn;
        
    //     $query = "SELECT DISTINCT `comment_url`, `date_posted`, `comment`, `account`, `agent`, `backlink` 
    //               FROM `comments` 
    //               WHERE `thread_url` = '$url'";
    //     $result = mysqli_query($conn,$query);

    //     return $result;

    // }

    // function allWebAccounts($url){
    //     global $conn;

    //     $query = "SELECT DISTINCT a.username, a.password 
    //               FROM accounts a, website w, thread t
    //               WHERE w.URL = a.website_url  AND w.URL = '$url'";
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



    // function accountCommentSearch($url){
    //     global $conn;
        
    //     $query = "SELECT `thread_url`, `website_url`, `comment_url`, `date_posted`, `comment`, `account`, 
    //               FROM `comments` 
    //               WHERE `account` = '$url'";
    //     $result = mysqli_query($conn,$query);

    //     return $result;

    // }

?>