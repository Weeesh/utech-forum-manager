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
                <h3 class="page-header"><i class="fa fa-user-md"></i> Accounts</h3>
                
                        <?php
                            $result = allAccounts();

                            while($vals = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                                
                                echo "<form action = 'showGenre.php' method = 'post'>";
                                echo "<input type ='text' value = ".$vals['id']." name ='acc_id' style='display:none'>";
                                echo "<br>";
                                echo "<input type ='text' value = ".$vals['website_url']." name ='acc_url' style='display:none'>";
                                echo "<br>";
                                echo "<input type ='submit' value = ".$vals['website']." name='account' class='btn btn-link' style='color:grey;text-decoration:none;'>";
                                echo "<br>";
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
  function ajax(data) {
        var request;

        console.log(data);

        request=$.ajax({
            type: "POST",
            data: {data:data}
            });
        request.success(function (data) {
            <?php header("Location: showGenre.php");?>
        });
        request.fail(function (error) {
            console.log(error);
        });
    }

</script>


</body>
</html>
