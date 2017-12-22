<?php

require("dbcon.php");
include("functions.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
<meta name="author" content="GeeksLabs">
<meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
<link rel="shortcut icon" href="img/favicon.png">

<title>Utech Forum</title>

<?php include("cssScripts.php") ?>
</head>

<body>
<!-- container section start -->


<section id="container" class="">
    <?php include("header.php");?>

    <?php include("sidebar.php");?>

    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-user-md"></i> <?php echo $_POST['account']." - ".$_POST['genre'].":".$_POST['niche']." - ".$_POST['media'].":".$_POST['thread_name'];  ?></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <table id="thisTable" class = "table table-bordered table-responsive">
                            <thead>
                                <th>Date Posted</th>
                                <th>Comment</th>
                                <th>Comment URL</th>
                                <th>Account Name</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Agent</th>
                                <th>Backlink</th>
                            </thead>
                            <tbody>
                                <?php
                                    $result = allComments($_POST['thread_id']);

                                    while($vals = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                                        // $given = strtotime($vals['date_posted']);
                                        // $second_date = strtotime('-10 day', strtotime(date("Y-m-d")));
                                        // if($given > $second_date){
                                            echo "<tr id='".$vals['id']."'>";
                                                echo "<td>".$vals['date_posted']."</td>";  // Date Posted
                                                echo "<td>".$vals['comment']."</td>";  // Comment
                                                echo "<td>".$vals['comment_url']."</td>";  //Comment URL
                                                echo "<td>".$vals['account']."</td>";
                                                echo "<td>adamsNancy</td>";  //Username
                                                echo "<td>BTs61313@</td>"; //password
                                                echo "<td>".$vals['Agent']."</td>";  //Agent
                                                echo "<td>".$vals['Backlink']."</td>";  //Backlink
                                            echo "</tr>";
                                        // }
                                    }
                                ?>
                            </tbody>
                        </table>
                        <div class="text-right">
                            <button id="confirmComment">Confirm Comment</button>
                            <button id="addComment">Add Comment</button>
                            <button id="removeComment">Remove Comment</button>
                            <button id="getDate">This month</button>
                        </div>
                        <!-- <form id="inputComment" >
                            Date:       <input type="date" id="date" name="date"><br>
                            Comment:    <input type="text" id="comment" name="comment"><br>
                            Comment URL:<input type="text" id="url" name="url"><br>
                            Account:    <input type="text" id="account" name="account"><br>
                            Username:   <input type="text" id="username" name="username"><br>
                            Password:   <input type="text" id="password" name="password"><br>
                            Agent:      <input type="text" id="agent" name="agent"><br>
                            Backlink:   <select name="backlink" id="backlink">
                                            <option value="No">No</option>
                                            <option value="Yes">Yes</option>
                                        </select><br> -->
                        <?php 
                            echo "<input type ='text' value = ".$_POST['account']." name = 'account' style='display: none'>";
                            echo "<input type ='text' value = ".$_POST['acc_id']." name = 'acc_id' style='display: none'>";
                            echo "<input type ='text' value = ".$_POST['genre']." name = 'genre' style='display: none'>";
                            echo "<input type ='text' value = ".$_POST['genre_id']." name = 'genre_id' style='display: none'>";
                            echo "<input type ='text' value = ".$_POST['niche']." name = 'niche' style='display: none'>";
                            echo "<input type ='text' value = ".$_POST['niche_id']." name = 'niche_id' style='display: none'>";
                            echo "<input type ='text' value = ".$_POST['media']." name = 'media' style='display: none'>";
                            echo "<input type ='text' value = ".$_POST['media_id']." name = 'media_id' style='display: none'>";

                            echo "<input type='text' value=".$_POST['thread_id']." id='thread_id' name='thread_id' hidden>";
                            echo "<input type='text' value=".$_POST['media_id']." id='media_id' name='media_id' hidden>";

                            $result = getAccount($_POST['thread_id']);
                            $vals = mysqli_fetch_array($result, MYSQLI_ASSOC);
                            echo "<input type='text' value=".$vals['website_url']." id='website_url' name='website_url' hidden>";
                            
                            $result = allThread($_POST['thread_id']);
                            $vals = mysqli_fetch_array($result, MYSQLI_ASSOC);
                            echo "<input type='text' value=".$vals['thread_url']." id='thread_url' name='thread_url' hidden>";
                        ?><!-- 
                            <input type="submit" value="Submit"><br>
                        </form> -->
                        <!-- <select id="dude">
                            <option value="1st">1st</option>
                            <option value="2nd">2nd</option>
                            <option value="3rd">3rd</option>
                            <option value="4th">4th</option>
                        </select> -->
                    </section>
                </div>
            </div>
            
            <!-- page end-->
        </section>
    </section>
    <!--main content end-->
  
</section>
<!-- container section end -->
<?php include("javascriptScripts.php") ?>

<script>

  //knob
  $(".knob").knob();
  $("#confirmComment").hide();
    $("#dude").change(function(){
        console.log($("#dude").val());
    });
    $("#addComment").click(function(){
        $('#thisTable > tbody:last-child').append("<tr ><td id='date' style='background-color:#cccccc' contenteditable='true'></td><td id='comment' style='background-color:#cccccc' contenteditable='true'></td><td id='url' style='background-color:#cccccc' contenteditable='true'></td><td id='account' style='background-color:#cccccc' contenteditable='true'></td><td id='username' style='background-color:#cccccc' contenteditable='true'></td><td id='password' style='background-color:#cccccc' contenteditable='true'></td><td id='agent' style='background-color:#cccccc' contenteditable='true'></td><td id='backlink' style='background-color:#cccccc' contenteditable='true'></td>></tr>");
        $("#confirmComment").show();
        $("#addComment").hide();
    });
    $("#getDate").click(function(){
        <?php
            $first_date = strtotime(date("Y-m-d"));
            $second_date = strtotime('-10 day', $first_date);

            echo "console.log('First Date ".date('Y-m-d', $first_date)."');console.log('Second Date ".date('Y-m-d', $second_date)."');";
        ?>
    });
    $("#removeComment").click(function(){
        $('#thisTable tr:last').remove();
        $("#confirmComment").hide();
        $("#addComment").show();
    });
    $("#confirmComment").click(function(e){
        e.preventDefault();
        var data = {
            date:$('#date').text(),
            comment: $('#comment').text(),
            url:$('#url').text(),
            account:$('#account').text(),
            username:$('#username').text(),
            password:$('#password').text(),
            agent:$('#agent').text(),
            backlink:$('#backlink').text(),
            website_url:$('#website_url').val(),
            thread_url:$('#thread_url').val(),
            thread_id:$('#thread_id').val(),
            media_id:$('#media_id').val()
        };
        console.log(data);
        ajax(data);
    });
    $(document).on("dblclick",function(){
        $target = $( event.target );
        if($target.is("td")){
            console.log("Correct");
        }
        });

    $(document).on("submit" , "#inputComment" ,function(e){
        e.preventDefault();
        var data = {
            date:$('#date').val(),
            comment: $('#comment').val(),
            url:$('#url').val(),
            account:$('#account').val(),
            username:$('#username').val(),
            password:$('#password').val(),
            agent:$('#agent').val(),
            backlink:$('#backlink').val(),
            website_url:$('#website_url').val(),
            thread_url:$('#thread_url').val(),
            thread_id:$('#thread_id').val(),
            media_id:$('#media_id').val()
        };
        ajax(data);
    });

    function ajax(datas) {
        var request;

        console.log(datas);

        request=$.ajax({
            type: "POST",
            url: "insert.php",
            data: {data:datas}
            });
        request.success(function (data) {
            // console.log(datas);
            // console.log("cracl");
            // console.log(datas['date']);
            // console.log("cracl");
            //     document.getElementById("inputComment").reset();
            $('#date, #comment, #url, #account, #username, #password, #agent, #backlink, #website_url, #thread_url, #thread_id, #media_id').attr("contenteditable","false");
            $('#date, #comment, #url, #account, #username, #password, #agent, #backlink, #website_url, #thread_url, #thread_id, #media_id').attr("style","background-color:#fffffff");
            $("#confirmComment").hide();
            $("#addComment").show();
            // $('#comment').attr("contenteditable","false");
            // $('#url').attr("contenteditable","false");
            // $('#account').attr("contenteditable","false");
            // $('#username').attr("contenteditable","false");
            // $('#password').attr("contenteditable","false");
            // $('#agent').attr("contenteditable","false");
            // $('#backlink').attr("contenteditable","false");
            // $('#website_url').attr("contenteditable","false");
            // $('#thread_url').attr("contenteditable","false");
            // $('#thread_id').attr("contenteditable","false");
            // $('#media_id').attr("contenteditable","false");

                // $('#thisTable > tbody:last-child').append("<tr><td>"+datas['date']+"</td><td>"+datas['comment']+"</td><td>"+datas['url']+"</td><td>"+datas['account']+"</td><td>adamsNancy</td><td>BTs61313</td><td>"+datas['agent']+"</td><td>"+datas['backlink']+"</td></tr>");

            console.log("cracl");
        });
        request.fail(function (error) {
            console.log(error);
        });
    }

</script>


</body>
</html>
