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
                                // $result = allComments($_POST['thread_id']);

                                // while($vals = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                                    
                                //     echo "<tr>";
                                //         echo "<td>".$vals['date_posted']."</td>";  // Date Posted
                                //         echo "<td>".$vals['comment']."</td>";  // Comment
                                //         echo "<td>".$vals['comment_url']."</td>";  //Comment URL
                                //         echo "<td>".$vals['account']."</td>";
                                //         echo "<td>adamsNancy</td>";  //Username
                                //         echo "<td>BTs61313@</td>"; //password
                                //         echo "<td>".$vals['Agent']."</td>";  //Agent
                                //         echo "<td>".$vals['Backlink']."</td>";  //Backlink
                                //     echo "</tr>";
                                // }
                            ?>
                        </tbody>
                    </table>
                    <form id="inputComment">
                        Date:<input type="text" name="date">
                        Comment:<input type="text" name="comment">
                        Comment URL:<input type="text" name="url">
                        Account:<input type="text" name="account">
                        Username:<input type="text" name="username">
                        Password:<input type="text" name="password">
                        Agent:<input type="text" name="agent">
                        Backlink:<input type="text" name="backlink">
                    </form>
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
  $(document).ready(function() {
    $('.js-example-basic-single').select2();
});

</script>


</body>
</html>
