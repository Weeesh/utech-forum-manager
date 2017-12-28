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
                        <div class="text-right">
                            <button id="addComment">Add Comment</button>
                            <button id="addColumn">Add Column</button>
                            <button id="confirmColumn">Confirm Column</button>
                            <button id="getDate">This month</button>
                        </div>
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
                                <th>Action</th>
                            </thead>
                            <tbody>
                                <?php
                                    $result = allComments($_POST['thread_id']);

                                    while($vals = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                                        // $given = strtotime($vals['date_posted']);
                                        // $second_date = strtotime('-10 day', strtotime(date("Y-m-d")));
                                        // if($given > $second_date){
                                            echo "<tr id='".$vals['id']."'>";
                                                echo "<td id='date_posted'>".$vals['Date_Posted']."</td>";  // Date Posted
                                                echo "<td id='comment'>".$vals['Comment']."</td>";  // Comment
                                                echo "<td id='comment_url'>".$vals['Comment_URL']."</td>";  //Comment URL
                                                echo "<td id='account'>".$vals['Account_Name']."</td>";
                                                echo "<td id='username'>".$vals['Username']."</td>";  //Username
                                                echo "<td id='password'>".$vals['Password']."</td>"; //password
                                                echo "<td id='agent'>".$vals['Agent']."</td>";  //Agent
                                                echo "<td id='backlink'>".$vals['Backlink']."</td>";  //Backlink
                                                echo "<td><button class='btn btn-primary confirmbtn'>Confirm</button><button class='btn btn-success editbtn'>Edit</button><button class='btn btn-danger deletebtn'>Delete</button><button class='btn btn-danger cancelbtn'>Cancel Edit</button></td>";  //Action
                                            echo "</tr>";
                                        // }
                                    }
                                ?>
                            </tbody>
                        </table>
                        <div class="text-right">
                            <button id="confirmComment">Confirm Comment</button>
                            <button id="cancelComment">Remove Comment</button>
                        </div>
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
$(document).ready(function() {
    $(".knob").knob();
    $("#confirmComment, #cancelComment, #getDate, .confirmbtn, .cancelbtn, confirmColumn").hide();
    // $("#dude").change(function(){
    //     console.log($("#dude").val());
    // });

    $("#addColumn").click(function(){
        $("#thisTable tr").append("<td></td>");
    });

    $("#addComment").click(function(){
        $('#thisTable > tbody:last-child').append("<tr ><td id='date_posted' style='background-color:#cccccc' contenteditable='true'></td><td id='comment' style='background-color:#cccccc' contenteditable='true'></td><td id='comment_url' style='background-color:#cccccc' contenteditable='true'></td><td id='account' style='background-color:#cccccc' contenteditable='true'></td><td id='username' style='background-color:#cccccc' contenteditable='true'></td><td id='password' style='background-color:#cccccc' contenteditable='true'></td><td id='agent' style='background-color:#cccccc' contenteditable='true'></td><td id='backlink' style='background-color:#cccccc' contenteditable='true'></td><td><button disabled style='display: none;' class='btn btn-primary confirmbtn'>Confirm</button><button disabled class='btn btn-success editbtn'>Edit</button><button disabled class='btn btn-danger deletebtn'>Delete</button><button disabled style='display: none;' class='btn btn-danger cancelbtn'>Cancel Edit</button></td></tr>");
        $("#confirmComment").show();
        $("#cancelComment").show();
        $("#addComment").hide();
        console.log($('#thisTable > tbody:last-child').text());
    });
    $("#getDate").click(function(){
        <?php
      $first_date = strtotime(date("Y-m-d"));
      $second_date = strtotime('-10 day', $first_date);
  
      echo "console.log('First Date ".date('Y-m-d', $first_date)."');console.log('Second Date ".date('Y-m-d', $second_date)."');";
        ?>
    });
    // $("tr").dblclick(function(){
    //     console.log($(this).children().text());
    // });
    $("#cancelComment").click(function(){
        $('#thisTable tr:last').remove();
        $("#confirmComment").hide();
        $("#cancelComment").hide();
        $("#addComment").show();
        $("#addComment").focus();
    });
    $(".confirmbtn").click(function(){
        console.log($(this).parent().parent().attr("id"));
        $(this).parent().parent().find("#date_posted").removeAttr("contenteditable");
        $(this).parent().parent().find("#comment").removeAttr("contenteditable");
        $(this).parent().parent().find("#comment_url").removeAttr("contenteditable");
        $(this).parent().parent().find("#account").removeAttr("contenteditable");
        $(this).parent().parent().find("#username").removeAttr("contenteditable");
        $(this).parent().parent().find("#password").removeAttr("contenteditable");
        $(this).parent().parent().find("#agent").removeAttr("contenteditable");
        $(this).parent().parent().find("#backlink").removeAttr("contenteditable");//
        $(this).parent().parent().find("#date_posted").removeAttr("style");
        $(this).parent().parent().find("#comment").removeAttr("style");
        $(this).parent().parent().find("#comment_url").removeAttr("style");
        $(this).parent().parent().find("#account").removeAttr("style");
        $(this).parent().parent().find("#username").removeAttr("style");
        $(this).parent().parent().find("#password").removeAttr("style");
        $(this).parent().parent().find("#agent").removeAttr("style");
        $(this).parent().parent().find("#backlink").removeAttr("style");
        $(this).parent().parent().find(".cancelbtn").hide();
        $(this).parent().parent().find(".confirmbtn").hide();
        $(this).parent().parent().find(".deletebtn").show();
  
        var data = {
      id:$(this).parent().parent().attr("id"),
      date:$(this).parent().parent().find('#date_posted').text(),
      comment: $(this).parent().parent().find('#comment').text(),
      url:$(this).parent().parent().find('#comment_url').text(),
      account:$(this).parent().parent().find('#account').text(),
      agent:$(this).parent().parent().find('#agent').text(),
      backlink:$(this).parent().parent().find('#backlink').text()
        };
        console.log(data);
    });
    $(".editbtn").click(function(){
        $(this).parent().parent().find("#date_posted").attr("contenteditable","true");
        $(this).parent().parent().find("#comment").attr("contenteditable","true");
        $(this).parent().parent().find("#comment_url").attr("contenteditable","true");
        $(this).parent().parent().find("#account").attr("contenteditable","true");
        $(this).parent().parent().find("#username").attr("contenteditable","true");
        $(this).parent().parent().find("#password").attr("contenteditable","true");
        $(this).parent().parent().find("#agent").attr("contenteditable","true");
        $(this).parent().parent().find("#backlink").attr("contenteditable","true");//
        $(this).parent().parent().find("#date_posted").attr("style","background-color:#cccccc");
        $(this).parent().parent().find("#comment").attr("style","background-color:#cccccc");
        $(this).parent().parent().find("#comment_url").attr("style","background-color:#cccccc");
        $(this).parent().parent().find("#account").attr("style","background-color:#cccccc");
        $(this).parent().parent().find("#username").attr("style","background-color:#cccccc");
        $(this).parent().parent().find("#password").attr("style","background-color:#cccccc");
        $(this).parent().parent().find("#agent").attr("style","background-color:#cccccc");
        $(this).parent().parent().find("#backlink").attr("style","background-color:#cccccc");
        $(this).parent().parent().find(".cancelbtn").show();
        $(this).parent().parent().find(".confirmbtn").show();
        $(this).parent().parent().find(".deletebtn").hide();
    });
    $(".cancelbtn").click(function(){
        $(this).parent().parent().find("#date_posted").removeAttr("contenteditable");
        $(this).parent().parent().find("#comment").removeAttr("contenteditable");
        $(this).parent().parent().find("#comment_url").removeAttr("contenteditable");
        $(this).parent().parent().find("#account").removeAttr("contenteditable");
        $(this).parent().parent().find("#username").removeAttr("contenteditable");
        $(this).parent().parent().find("#password").removeAttr("contenteditable");
        $(this).parent().parent().find("#agent").removeAttr("contenteditable");
        $(this).parent().parent().find("#backlink").removeAttr("contenteditable");//
        $(this).parent().parent().find("#date_posted").removeAttr("style");
        $(this).parent().parent().find("#comment").removeAttr("style");
        $(this).parent().parent().find("#comment_url").removeAttr("style");
        $(this).parent().parent().find("#account").removeAttr("style");
        $(this).parent().parent().find("#username").removeAttr("style");
        $(this).parent().parent().find("#password").removeAttr("style");
        $(this).parent().parent().find("#agent").removeAttr("style");
        $(this).parent().parent().find("#backlink").removeAttr("style");
        $(this).parent().parent().find(".cancelbtn").hide();
        $(this).parent().parent().find(".confirmbtn").hide();
        $(this).parent().parent().find(".deletebtn").show();
    });
    $(".deletebtn").click(function(){
        var data = {
      id:$(this).parent().parent("tr").attr("id")
        };
        deleteAjax(data);
    });
    function deleteAjax(data) {
        
        console.log(data);
  
        request=$.ajax({
      type: "POST",
      url: "deleteRow.php",
      data: {data:data}
      });
        request.success(function (response) {
      console.log("Success:"+data['id']);
      $("#"+data['id']).hide();
        });
        request.fail(function (error) {
      console.log(error);
        });
    }
    $("#confirmComment").click(function(e){
        e.preventDefault();
        var data = {
      date:$('#date_posted').text(),
      comment: $('#comment').text(),
      url:$('#comment_url').text(),
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
        ajax(data);
    });

    function ajax(data, url) {
  
        console.log(data);
  
        request=$.ajax({
      type: "POST",
      url: "insert.php",
      data: {data:data}
      });
        request.success(function (data) {
      $('#date_posted, #comment, #comment_url, #account, #username, #password, #agent, #backlink, #website_url, #thread_url, #thread_id, #media_id').attr("contenteditable","false");
      $('#date, #comment, #url, #account, #username, #password, #agent, #backlink, #website_url, #thread_url, #thread_id, #media_id').attr("style","background-color:#fffffff");
      $(".deletebtn, .editbtn, .confirmbtn, .cancelbtn").removeAttr("disabled");
      $("#confirmComment").hide();
      $("#addComment").show();
        });
        request.fail(function (error) {
      console.log(error);
        });
    }
});
</script>


</body>
</html>
