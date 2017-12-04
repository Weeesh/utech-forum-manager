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
                    <h3 class="page-header"><i class="fa fa-user-md"></i> <?php echo $_POST['URLs'];?></h3>
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
                                $result = threadUrlCommentSearch($_POST['URLs']);

                                while($vals = mysqli_fetch_array($result)){
                                    
                                    echo "<tr>";
                                        echo "<td>".$vals[1]."</td>";  // Date Posted
                                        echo "<td>".$vals[2]."</td>";  // Comment
                                        echo "<td>".$vals[0]."</td>";  //Comment URL
                                        echo "<td></td>";
                                        echo "<td>".$vals[3]."</td>";  //Username
                                        //echo "<td>".$vals[4]."</td>";
                                    echo "</tr>";
                                }
                            ?>
                        </tbody>
                    </table>
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
