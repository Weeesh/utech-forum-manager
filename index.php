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

<body style="background-image:url('paper.jpg'); background-size:100% 100%;">
<!-- container section start -->


<div class="container">
    <form class="login-form" action="#">
      <div class="login-wrap">
        <p class="login-img"><img id="profile-img" class="profile-img-card" src="utech_logo.png" style="border-radius: 50%;"></p>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input type="text" id="user" class="form-control" placeholder="Username" autofocus="">
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <input type="password" id="pass" class="form-control" placeholder="Password">
        </div>
        <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
                <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
            </label>
        <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
        <button class="btn btn-info btn-lg btn-block" type="submit">Signup</button>
      </div>
    </form>
    <div class="text-right">
      <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
          <a href="https://bootstrapmade.com/">Free Bootstrap Templates</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
  </div>
<!-- container section end -->
<?php include("javascriptScripts.php") ?>

<script>

  //knob
$(document).ready(function() {
    $("form").submit(function(){
      var data = {
          username:$("#user").val(),
          password:$("#pass").val()
        };
    request=$.ajax({
      type: "POST",
      url: "./queries/get/getUsers.php",
      data: {data:data}
      });
    request.success(function (response) {
          if(response.data==1){
            alert(response.data);
            window.location.assign("displayWebPages.php");
          }else{
            alert(response.data);
          }
        });
    });
});
</script>


</body>
</html>
