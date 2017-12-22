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
                <h3 class="page-header"><i class="fa fa-user-md"></i> 
                  <?php 
                    $crumb = mysqli_fetch_array(getCrumbs(), MYSQLI_ASSOC);
                    $account = mysqli_fetch_array(getAccount($crumb['acc_id']), MYSQLI_ASSOC);
                    echo $account['website'];  
                  ?>
                </h3>
                
                        <?php
                            $crumb = mysqli_fetch_array(getCrumbs(), MYSQLI_ASSOC);
                            echo "<script>console.log('".$crumb['acc_id']."');</script>";
                            $result = allGenres($crumb['acc_id']);

                            $account = mysqli_fetch_array(getAccount($crumb['acc_id']), MYSQLI_ASSOC);
                            echo "<script>console.log('".$account['website']."');</script>";
                            while($vals = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                                echo "<form action = 'showNiche.php' method = 'post'>";
                                echo "<input type ='text' value = ".$vals['id']." name ='genre_id' style='display: none'>";
                                echo "<input type ='submit' value = ".$vals['name']." name = 'genre' class='btn btn-link' style='color:grey;text-decoration:none;'>";
                                echo "</form>";
                            }
                        ?>
                	
                    <br><br>

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
