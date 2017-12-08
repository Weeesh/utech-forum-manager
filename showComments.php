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
                    <table class = "table">
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
                                    
                                    echo "<tr>";
                                        echo "<td>".$vals['date_posted']."</td>";  // Date Posted
                                        echo "<td>".$vals['comment']."</td>";  // Comment
                                        echo "<td>".$vals['comment_url']."</td>";  //Comment URL
                                        echo "<td>".$vals['account']."</td>";
                                        echo "<td>adamsNancy</td>";  //Username
                                        echo "<td>BTs61313@</td>"; //password
                                        echo "<td>".$vals['Agent']."</td>";  //Agent
                                        echo "<td>".$vals['Backlink']."</td>";  //Backlink
                                    echo "</tr>";
                                }
                            ?>
                        </tbody>
                    </table>
                    <form id="inputComment" style="display:none">
                        Date:       <input type="text" id="date" name="date"><br>
                        Comment:    <input type="text" id="comment" name="comment"><br>
                        Comment URL:<input type="text" id="url" name="url"><br>
                        Account:    <input type="text" id="account" name="account"><br>
                        Username:   <input type="text" id="username" name="username"><br>
                        Password:   <input type="text" id="password" name="password"><br>
                        Agent:      <input type="text" id="agent" name="agent"><br>
                        Backlink:   <input type="text" id="backlink" name="backlink"><br>
                        <input type="submit" value="Submit"><br>
                    </form>
                    <!-- <select id="dude">
                        <option value="1st">1st</option>
                        <option value="2nd">2nd</option>
                        <option value="3rd">3rd</option>
                        <option value="4th">4th</option>
                    </select> -->
                    <button id=addComment>Add Comment</button>
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
    $("#dude").change(function(){
        console.log($("#dude").val());
    });
    $("#addComment").click(function(){
        $("#inputComment").show();
    });
    $(document).on("submit" , "#inputComment" ,function(e){
        e.preventDefault();
        var data = {
            Date:$('#date').val(),
            Comment: $('#comment').val(),
            url:$('#url').val(),
            Account:$('#account').val(),
            Username:$('#username').val(),
            Password:$('#password').val(),
            Agent:$('#agent').val(),
            Backlink:$('#backlink').val()
        };
        ajax(data);
    });

    function ajax(data) {
        var request;

        console.log(data);

        request=$.ajax({
            type: 'POST',
            url: 'functions.php',
            data: data
            });
        request.done(function (response) {
            alert("Success");
        });
        request.fail(function (error) {
            swal("Failure");
        });
    }

</script>


</body>
</html>
