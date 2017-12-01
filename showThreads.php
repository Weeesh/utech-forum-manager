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
                    <h3 class="page-header"><i class="fa fa-user-md"></i> Thread</h3>
                    <table class = "table">
                        <thead>
                            <th>Thread name</th>
                            <th>Thread URL</th>
                            <th>Genre</th>
                        </thead>
                        <tbody>
                            <?php
                                $result = threadSearch($_POST['URLs']);

                                while($vals = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>".$vals[0]."</td>";
                                        echo "<td>".$vals[1]."</td>";
                                        echo "<td>".$vals[2]."</td>";
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


<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js">

  //knob
  $(".knob").knob();
  $(document).ready(function() {
    $('.js-example-basic-single').select2();
});

</script>


</body>
</html>
