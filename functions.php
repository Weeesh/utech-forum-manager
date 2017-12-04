<?php
    require("dbcon.php");


    function allGenres(){
        global $conn;
        
        $query = "SELECT DISTINCT `genre` 
                  FROM `website` ";
        $result = mysqli_query($conn,$query);

        return $result;
    }

    function webGenreSearch($url){
        global $conn;
        
        $query = "SELECT `URL` 
                  FROM `website` 
                  WHERE `genre` = '$url'";
        $result = mysqli_query($conn,$query);

        return $result;
    }

    function allWebUrls(){
        global $conn;

        $query = "SELECT `URL` 
                  FROM `website`";
        $result = mysqli_query($conn,$query);

        return $result;
    }

    function threadSearch($url){
        global $conn;

        $query = "SELECT `thread_name`, `thread_url`, `genre` 
        FROM `thread` 
        WHERE `website_url` = '$url'";
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
        
        $query = "SELECT DISTINCT `comment_url`, `date_posted`, `comment`, `account`, `agent`, `backlink` 
                  FROM `comments` 
                  WHERE `thread_url` = '$url'";
        $result = mysqli_query($conn,$query);

        return $result;

    }

    function allAccounts(){
        global $conn;
        
        $query = "SELECT `username`, `password` 
                  FROM `accounts`";
        $result = mysqli_query($conn,$query);

        return $result;

    }

    function allWebAccounts($url){
        global $conn;

        $query = "SELECT DISTINCT a.username, a.password 
                  FROM accounts a, website w, thread t
                  WHERE w.URL = a.website_url  AND w.URL = '$url'";
        $result = mysqli_query($conn,$query);
        
        return $result;

    }

    function accountDetails($user){
        global $conn;
        
        $query = "SELECT `username`, `password`, 
                  FROM `accounts`
                  WHERE `username` = '$user'";
        $result = mysqli_query($conn,$query);

        return $result;

    }



    function accountCommentSearch($url){
        global $conn;
        
        $query = "SELECT `thread_url`, `website_url`, `comment_url`, `date_posted`, `comment`, `account`, 
                  FROM `comments` 
                  WHERE `account` = '$url'";
        $result = mysqli_query($conn,$query);

        return $result;

    }

?>