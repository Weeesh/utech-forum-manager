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
                <h3 class="page-header"><i class="fa fa-user-md"></i> <?php echo $_POST['account']." - ".$_POST['genre'].":".$_POST['niche'];  ?> </h3>
                
                        <?php
                            $result = allMedia($_POST['niche_id']);

                            while($vals = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                                echo "<form action = 'showThreads.php' method = 'post'>";
                                echo "<input type ='text' value = ".$vals['id']." name = 'media_id' style='display:none;'>";
                                echo "<input type ='text' value = ".$_POST['account']." name = 'account' style='display: none'>";
                                echo "<input type ='text' value = ".$_POST['acc_id']." name = 'acc_id' style='display: none'>";
                                echo "<input type ='text' value = ".$_POST['genre']." name = 'genre' style='display: none'>";
                                echo "<input type ='text' value = ".$_POST['genre_id']." name = 'genre_id' style='display: none'>";
                                echo "<input type ='text' value = ".$_POST['niche']." name = 'niche' style='display: none'>";
                                echo "<input type ='text' value = ".$_POST['niche_id']." name = 'niche_id' style='display: none'>";
                                echo "<input type ='submit' value = ".$vals['name']." name = 'media' class='btn btn-link' style='color:grey;text-decoration:none;'><span>".$vals['thread_no']." threads </span><span>".$vals['comment_no']." comments </span>";
                                echo "</form>";
                            }
                        ?>
                  
                    <br><br>

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

</script>


</body>
</html>
.":".