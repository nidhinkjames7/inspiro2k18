<?php
include_once("connect.php");
$cod='no';
$star='no';
$game='no';
$quiz='no';
$web='no';
$market='no';
$treasure='no';
$g_w=0;
$g_q=0;
$g_t=0;
$g_m=0;
$query="SELECT * FROM `registered-college`";
$result=mysqli_query($con,$query)or die(mysqli_error($con));	    
if(isset($_POST['check']))
{
    $email=$_POST['email'];
    $clg=$_POST['clg'];
    $r=mysqli_query($con,"select * from `registered-students` where `EMAIL`='$email' and `COLLEGE`='$clg'")or die(mysqli_error($con));
    if(mysqli_num_rows($r)==0)
            echo "<script> alert('Email is not registered')</script>";             
    else
    {
     $rw=mysqli_fetch_array($r);
     $name=$rw['NAME'];
     $rid=$rw['reg-id'];
    $r1=mysqli_query($con,"select * from `coding` where `NAME`='$name' and `COLLEGE`='$clg'")or die(mysqli_error($con));
    $r2=mysqli_query($con,"select * from `gaming` where `NAME`='$name' and `COLLEGE`='$clg'")or die(mysqli_error($con));
    $r3=mysqli_query($con,"select * from `star of inspiro` where `NAME`='$name' and `COLLEGE`='$clg'")or die(mysqli_error($con));
    $a=mysqli_num_rows($r1);
    if(mysqli_num_rows($r1)!=0)
        $cod='yes';
    if(mysqli_num_rows($r2)!=0)
        $game='yes';
    if(mysqli_num_rows($r3)!=0)
       $star='yes';
    $r4=mysqli_query($con,"select * from `web designing` where `NAME`='$name' and `COLLEGE`='$clg'")or die(mysqli_error($con));
    $r5=mysqli_query($con,"select * from `treasure hunt` where `NAME`='$name' and `COLLEGE`='$clg'")or die(mysqli_error($con));
    $r6=mysqli_query($con,"select * from `quiz` where `NAME`='$name' and `COLLEGE`='$clg'")or die(mysqli_error($con));
    $r7=mysqli_query($con,"select * from `marketing` where `NAME`='$name' and `COLLEGE`='$clg'")or die(mysqli_error($con));
    if(mysqli_num_rows($r6)!=0)
    {
        $quiz='yes';
        $rw4=mysqli_fetch_array($r6);
        $g_q=$rw4['G_ID'];
        $r9=mysqli_query($con,"select * from `quiz` where `G_ID`='$g_q' and `NAME`!='$name'")or die(mysqli_error($con));
        $rr=mysqli_fetch_array($r9);
            $qname=$rr['NAME'];   
    }
    if(mysqli_num_rows($r4)!=0)
    {
        $web='yes';
        $rw4=mysqli_fetch_array($r4);
        $g_w=$rw4['G_ID'];
        $r9=mysqli_query($con,"select * from `web designing` where `G_ID`='$g_w' and `NAME`!='$name'")or die(mysqli_error($con));
        $rr=mysqli_fetch_array($r9);
            $wname=$rr['NAME'];   
    }
    if(mysqli_num_rows($r5)!=0)
    {
        $treasure='yes';
        $rw4=mysqli_fetch_array($r5);   
        $g_t=$rw4['G_ID'];
        $r9=mysqli_query($con,"select * from `treasure hunt` where `G_ID`='$g_t' and `NAME`!='$name'")or die(mysqli_error($con));
        $i=1;
        While($rr=mysqli_fetch_array($r9))
        {
            ${'tname'.$i}=$rr['NAME'];
            $i++;
        }
        
        
    }
    if(mysqli_num_rows($r7)!=0)
    {
        $market='yes';
        $rw4=mysqli_fetch_array($r7);   
        $g_m=$rw4['G_ID'];
        $r9=mysqli_query($con,"select * from `marketing` where `G_ID`='$g_m' and `NAME`!='$name'")or die(mysqli_error($con));
        $i=1;
        While($rr=mysqli_fetch_array($r9))
        {
            ${'mname'.$i}=$rr['NAME'];
            $i++;
        }
        
    }
    
 }
    
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
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
    font-size: 13px;
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
form select:hover{
    background-color: rgb(0,0,1,.6);
         
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

 <section id="hero" class="full-screen">
	<div id="particle-ground" data-background="img/full-width/bg-21.jpg" data-top="transform: translate3d(0px, 0px, 0px)" data-top-bottom="transform: translate3d(0px, -200px, 0px)" data-anchor-target="#hero" class="parallax parallax-hero full-screen bg-dark-50"></div>
      <div class="hero-content">
        <div class="hero-content-inner">  
	  <fieldset>       
	  <filedset>
          <form action="" method="post">
          <br><br><br>
            <div class='row' align='left'>
                <div class='col-md-5 col-md-offset-1'>
              <div class='row'>
	        <div class='col-md-4'>Email</div>
			<div class='col-md-4 '><input type='text' name='email' id='name' placeholder='Registered Email'>
            </div></div></div>
            <div class='col-md-5'>
            <div class='row'>    
            <div class='col-md-3'>College</div>
			<div class='col-md-6'><select name='clg' id='clg' value="<?php if(isset($_POST['clg'])) echo $_POST['clg']; ?>">
												  <option>Select</option>
                                                 <?php
                                                 while($row=mysqli_fetch_array($result))
                                                 {
                                                    $a=$row['NAME'].", ".$row['PLACE'];
                                                 ?>
                                                    <option><?php echo $a; ?></option>     
                                                 <?php } ?>
												
                                                  </select>
            </div>
            <div class='col-md-2'>
                <input type='submit' name='check' value='SUBMIT'>
            </div>
            </div>  
          </div></div>
          </form>
      </filedset><br><br>
     
          <form action='update.php' method='post'>  
              <input type='hidden' name='name' value='<?php echo $name; ?>'>
              <input type='hidden' name='clg' value='<?php echo $clg; ?>'>
              <input type='hidden' name='wid' value='<?php echo $g_w; ?>'>
              <input type='hidden' name='tid' value='<?php echo $g_t; ?>'>
              <input type='hidden' name='qid' value='<?php echo $g_q; ?>'>
              <input type='hidden' name='mid' value='<?php echo $g_m; ?>'>
              <input type='hidden' name='rid' value='<?php echo $rid; ?>'>
    <filedset>
              <legend>Single Events</legend>
            <div class='row' >
            <div class='col-md-5 col-md-offset-0'>
            <div class='row'>
	        <div class='col-md-5'></div>
			<div class='col-md-5 '><input type='checkbox' name='cod' id='cod' value='yes' <?php if($cod=='yes') echo "checked='checked'" ;?> > &nbsp; CODIFICIA</div></div>
            </div>
            <div class='col-md-7'>
            <div class='row'>    
            <div class='col-md-4'><input type='checkbox' name='star' id='star' <?php if($star=='yes') echo "checked='checked'" ;?>>&nbsp; STAR OF INSPIRO</div>
			<div class='col-md-5'><input type='checkbox' name='game' id='game' <?php if($game=='yes') echo "checked='checked'" ;?>>&nbsp; GAMING</div>
            <div class='col-md-2'></div>
            </div>  
          </div></div>
      </filedset><br>
      <fieldset>
	  <legend>Group Events</legend>
          <div class='row'>
            <div class='col-md-5 col-md-offset-0'>
            <div class='row'>
            <div class='col-md-1'></div>    
	        <div class='col-md-5' align='left'><input type='checkbox' name='quiz' id='quiz' <?php if($quiz=='yes') echo "checked='checked'" ;?>>&nbsp; QUIZZARDS</div>
			<div class='col-md-5 '><input type='text' name='quiz_p'  id='quiz_t' placeholder='Partners Name' <?php if($quiz=='no') ?> <?php if($quiz=='yes') echo "value=$qname";?>> </div></div>
            </div>
            <div class='col-md-7'>
            <div class='row'>    
            <div class='col-md-4'></div>
			<div class='col-md-5'></div>
            <div class='col-md-2'></div>
            </div>  
          </div></div><br>
		 <div class='row'>
            <div class='col-md-5 col-md-offset-0'>
            <div class='row'>
            <div class='col-md-1' ></div>    
	        <div class='col-md-5' align='left'><input type='checkbox' name='web' id='web' <?php if($web=='yes') echo "checked='checked'" ;?>>&nbsp; WEBTISM</div>
			<div class='col-md-5 '><input type='text' name='web_p'  id='web_t' placeholder='Partners Name' <?php if($web=='no') "readonly" ?> <?php if($web=='yes') echo "value=$wname";?>> </div></div>
            </div>
            <div class='col-md-7'>
            <div class='row'>    
            <div class='col-md-4'></div>
			<div class='col-md-5'></div>
            <div class='col-md-2'></div>
            </div>  
          </div></div><br>
          <div class='row'>
            <div class='col-md-5 col-md-offset-0'>
            <div class='row'>
            <div class='col-md-6' align='left'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='checkbox' name='market' id='market' <?php if($market=='yes') echo "checked='checked'" ;?>>&nbsp; THE BIG BASH</div>
			<div class='col-md-5 '><input type='text' name='market_p1' id='market_p1' placeholder='Partners Name'  <?php if($market=='yes') echo "value=$mname1";?>></div></div>
            </div>
            <div class='col-md-7'>
            <div class='row'>    
            <div class='col-md-4'><input type='text' name='market_p2' id='market_p2' placeholder='Partners Name'  <?php if($market=='yes') echo "value=$mname2"?>></div>
			<div class='col-md-4'><input type='text' name='market_p3' id='market_p3' placeholder='Partners Name' <?php if($market=='yes') echo "value=$mname3"?>></div>
            <div class='col-md-2'></div>
            </div>  
          </div></div><br>
		  <div class='row'>
            <div class='col-md-5 col-md-offset-0'>
            <div class='row'>
	        <div class='col-md-6' align='left'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='checkbox' name='treasure' id='treasure' <?php if($treasure=='yes') echo "checked='checked'" ;?>>&nbsp; FORTUNE HUNT</div>
			<div class='col-md-5 '><input type='text' name='treasure_p1' id='treasure_p1' placeholder='Partners Name' <?php if($market=='yes') echo "value=$tname1";?>></div></div>
            </div>
            <div class='col-md-7'>
            <div class='row'>    
            <div class='col-md-4'><input type='text' name='treasure_p2' id='treasure_p2' placeholder='Partners Name'  <?php if($treasure=='yes') echo "value=$tname2";?>></div>
			<div class='col-md-4'><input type='text' name='treasure_p3' id='treasure_p3' placeholder='Partners Name'  <?php if(isset($tname3)) echo "value=$tname3";?>></div>
            </div>  
          </div></div>
        </fieldset><br>
        	    <input type='submit' name='update' class='sbtn' value='Update'>
          </form></fieldset>
 	  </div>
	  </div>    
	  </section>

  
<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>  
<script src="js/main.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>    
<script src="js/jquery.particleground.min.js"></script>
<script src="js/reg.js"></script>	

	

</body>
</html>

