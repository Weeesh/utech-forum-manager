<?php
    require("dbcon.php");

    function allWebUrls(){
        global $conn;

        $query = "SELECT `URL` 
                  FROM `website`";
        $result = mysqli_query($conn,$query);

        return $result;
    }


    function webUrlCommentSearch($url){
        global $conn;

        $query = "SELECT `thread_url`, `website_url`, `comment_url`, `date_posted`, `comment`, `account` 
                  FROM `comments` 
                  WHERE `website_url` = '$url'";
        $result = mysqli_query($conn,$query);

        return $result;
    }

    function allThreadUrls(){
        global $conn;
        
        $query = "SELECT `thread_url` 
                  FROM `thread`";
        $result = mysqli_query($conn,$query);

        return $result;

    }

    function threadUrlCommentSearch($url){
        global $conn;
        
        $query = "SELECT `thread_url`, `website_url`, `comment_url`, `date_posted`, `comment`, `account` 
                  FROM `comments` 
                  WHERE `thread_url` = '$url'";
        $result = mysqli_query($conn,$query);

        return $result;

    }

?>