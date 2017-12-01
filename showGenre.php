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
                <h3 class="page-header"><i class="fa fa-user-md"></i> Genre</h3>
                <form action = "transitionPage.php" method = "post">
                
                        <?php
                            $result = allGenres();

                            while($vals = mysqli_fetch_array($result)){
                                
                                echo "<input type ='submit' value = ".$vals[0]." name = 'URLs' class='btn btn-link' style='color:grey;text-decoration:none;'>";
                                echo "<br>";
                            }
                        ?>
                	
                    <br><br>
                </form>

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
