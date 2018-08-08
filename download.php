<?php
include_once('connect.php');
$row=0;
if(isset($_POST['login']))
{
    $uname=$_POST['uname'];
    $paswd=$_POST['passwrd'];
    $r=mysqli_query($con,"select * from `admin` where `username`='$uname' and `password`='$paswd'")or die(mysqli_error($con));
    $row=mysqli_num_rows($r);
    if($row<1)
        echo "<script> alert('User Name or Password doesn\'t match');</script>";    
}
?>

<!DOCTYPE html>
<html>
  <head>
 <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="shortcut icon" href="img/team/favicon.png">
    <title>INSPIRO i8</title>
    <link href="http://fonts.googleapis.com/css?family=Raleway:400,300,100,700%7Dosis:400,500" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/animate.css" rel="stylesheet">
  <link href="css/et-line.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/style.changer.css" rel="stylesheet">
  <link id="theme" href="css/theme/theme-red-2.css" rel="stylesheet">	
  <link href="css/cd/loader.css" rel="stylesheet" type="text/css">
  <link href="css/cd/normalize.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="css/cd/font-awesome.min.css">
  <link href="css/cd/style1.css" rel="stylesheet" type="text/css">

	
	
	<script>
    function close_window() {
        if (confirm("Close Window?")) {
            close();
  }
}
    </script>
 <style>
  form input,button{ 
background-color: rgba(0,0,.8,.4);
border-bottom-color: rgba(0,0,.1,.6);
border-top-color: rgba(0,0,.1,.6);
border-left-color: rgba(0,0,.1,.6);
border-right-color: rgba(0,0,.1,.6);
}     
button  {
    display: inline-block;
    text-decoration: none;
    font-weight: bold;
    padding: 5px 10px;
    border: 1px solid #2d6898;
    border-radius: 6px;
}
button:hover{
         background-color: skyblue;
}
legend{
    color: aqua; 
         
     }
form select {
    font-size:14px;
    padding:1px;
    margin: 0;
    -webkit-border-radius:2px;
    -moz-border-radius:2px;
    border-radius:3px;
    -webkit-box-shadow: 0 2px 0 #ccc, 0 -1px #fff inset;
    -moz-box-shadow: 0 2px 0 #ccc, 0 -1px #fff inset;
    box-shadow: 0 2px 0 #ccc, 0 -1px #fff inset;
    background-color: rgba(0,0,.8,.4);
	border-bottom-color: rgba(0,0,.1,.1);
	border-top-color: rgba(0,0,.1,.1);
	border-left-color: rgba(0,0,.1,.1);
	border-right-color: rgba(0,0,.1,.1);
	outline:none;
    display: inline-block;
    -webkit-appearance:none;
    -moz-appearance:none;
    appearance:none;
    cursor:pointer;
}
  
</style> 
</head>

  <body class="appear-animate">
  

 
 
<nav class="main-nav white transparent stick-fixed">
      <div class="full-wrapper relative clearfix">
        <!-- Logo ( paste you text or image)-->
        <div class="nav-logo-wrap"><a href="index.php" class="logo"><img src="img/font.PNG" alt=""></a></div>    
      </div>
    </nav>
<br>
 <section id="hero" class="full-screen">
	<div id="particle-ground" data-background="img/full-width/bg-21.JPG" data-top="transform: translate3d(0px, 0px, 0px)" data-top-bottom="transform: translate3d(0px, -200px, 0px)" data-anchor-target="#hero" class="parallax parallax-hero full-screen bg-dark-50"></div>
    <div class="hero-content">
        <div class="hero-content-inner">
          <div class='col-md-4 col-md-offset-5'>
        <?php    
         if($row!=1)
         {
        ?>
	  <form  action='' method='post'>
	  <fieldset>
          <legend>Admin Login</legend>
          <div class='row'>
                    <div class='col-md-5'>User Name</div>
                    <div class='col-md-3'><input type="text" name='uname' required></div>
          </div><br>
          <div class='row'>
                    <div class='col-md-5'>Password</div>
                    <div class='col-md-3'><input type="password" name='passwrd' required></div><br>
          </div><br><br>
          <div class='row'>
                    <div class='col-md-5'><input type="submit" name='login'  class='scroll btn btn-coffee btn-border-w btn-round btn-medium' value='LOGIN'></div>
                    <div class='col-md-5'><a href="#" onclick="close_window();return false;" class="scroll btn btn-coffee btn-border-w btn-round btn-medium">CANCEL</a></div>
          </div><br>

      </fieldset>
      </form>
         <?php }
            else
            {
        ?>
	  <fieldset>
          <center><br>
          <div class='row'>
              <a href="spreadsheet/events-details.xlsx" download class="scroll btn btn-coffee btn-border-w btn-round btn-medium">Events List</a>
          </div><br>
          <div class='row'>
              <a href="spreadsheet/registered-details.xlsx" class="scroll btn btn-coffee btn-border-w btn-round btn-medium" download>Registered List</a></div>
          <br>
          </center>
      </fieldset>
           <?php
            }
            ?>
        </div>
          </div>
     </div>
</section>
     </body>
 <!--JS sctipts-->
    <script src="js/vendor/jquery-2.1.3.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/plagins.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.fitvids.js"></script>
    <script src="js/main.js"></script>
    <script src="js/jquery.particleground.min.js"></script>
	
	
	
	
	    
</html>