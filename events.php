<?php

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
$spreadsheet = $reader->load("database/reg.xlsx");
$r=2;
$email;
$clg;
$cod='no';
$web='no';
$idea='no';
$star='no';
$game='no';
$treasure='no';
$quiz='no';
$market='no';
$tname1='';
$tname2;
$tname3;
$tname4;
$qname;
$mname1;
$mname2;
$mname3;

function check($sheet,$name,$clg,$item)
{
    $r=2;
    $name1=$sheet->getActiveSheet()->getCellByColumnAndRow(2,$r)->getValue();
    while(isset($name1))
    {
        if($name1==$name)
        {
        $clg1=$sheet->getActiveSheet()->getCellByColumnAndRow(3,$r)->getValue();
        $gid=$sheet->getActiveSheet()->getCellByColumnAndRow(4,$r)->getValue();
        $gid1=$sheet->getActiveSheet()->getCellByColumnAndRow(4,$r+1)->getValue();
        if($clg==$clg1)
        {
            switch($item)
            {
                case "coding":
                    $GLOBALS['cod']='yes';
                    break;
                case "designing":
                    $GLOBALS['web']='yes';
                    break;
                case "gaming":
                    $GLOBALS['game']='yes';
                    break;
                case "star":
                    $GLOBALS['star']='yes';
                    break;
                case "idea":
                    $GLOBALS['idea']='yes';
                    break;
                case "market":
                    $GLOBALS['market']='yes';
                    $i=1;
                    $t=$r+1;
                    while($gid1==$gid)
                    {
                        $GLOBALS['mname'.$i]=$sheet->getActiveSheet()->getCellByColumnAndRow(2,$t)->getValue();
                        $gid1=$sheet->getActiveSheet()->getCellByColumnAndRow(4,$t+1)->getValue();
                        $i++;
                        $t++;                        
                    }
                    break;
                case "quiz":
                    $GLOBALS['quiz']='yes';
                    $i=1;
                    $t=$r+1;
                    while($gid1==$gid)
                    {
                        $GLOBALS['qname']=$sheet->getActiveSheet()->getCellByColumnAndRow(2,$t)->getValue();
                        $gid1=$sheet->getActiveSheet()->getCellByColumnAndRow(4,$t+1)->getValue();
                        $i++;
                        $t++;                        
                    }
                    
                    break;
                case "treasure":
                    $GLOBALS['treasure']='yes';
                    $i=1;
                    $t=$r+1;
                    while($gid1==$gid)
                    {
                        $GLOBALS['tname'.$i]=$sheet->getActiveSheet()->getCellByColumnAndRow(2,$t)->getValue();
                        $gid1=$sheet->getActiveSheet()->getCellByColumnAndRow(4,$t+1)->getValue();
                        $i++;
                        $t++;                        
                    }
                    
                    break;
                    
            }
        }
        }
        $r++;
        $name1=$sheet->getActiveSheet()->getCellByColumnAndRow(2,$r)->getValue();
        
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
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
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

  
<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/reg.js"></script>
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
<?php 
if(isset($_POST['check']))
{
?>
 <script>
  document.getElementById("clg") = '<?php echo $_POST['clg']; ?>';
  document.getElementById("name") = '<?php echo $_POST['name']; ?>';
 </script>
<?php
}
?>
      
</head>

  <body class="appear-animate">
 
<nav class="main-nav white transparent stick-fixed">
      <div class="full-wrapper relative clearfix">
        <!-- Logo ( paste you text or image)-->
        <div class="nav-logo-wrap"><a href="index.php" class="logo">INSPIRO<span class="higl"><sub>i8</sub></span></a></div>    
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
            <div class='col-md-4'>College</div>
			<div class='col-md-4'><select name='clg' id='clg' value="<?php if(isset($_POST['clg'])) echo $_POST['clg']; ?>">
												  <option>Select</option>
                                                    <?php
                                                    $spreadsheet->setActiveSheetIndexByName('registered-college');
                                                    $r=2;
                                                    $clg=$spreadsheet->getActiveSheet()->getCellByColumnAndRow(2,$r)->getValue();
                                                    while(isset($clg))
                                                    {
                                                  ?>
                                                     <option><?php echo $clg; ?></option>
                                                        <?php $r++;
                                                        $clg=$spreadsheet->getActiveSheet()->getCellByColumnAndRow(2,$r)->getValue();
                                                    }
												  ?>
                                                  </select>
            </div>
            <div class='col-md-4'>
                <input type='submit' name='check'>
            </div>
            </div>  
          </div></div>
          </form>
      </filedset><br><br>

          <?php


if(isset($_POST['check']))
{
    $r=2;
    $email=$_POST['email'];
    $clg=$_POST['clg'];
    $spreadsheet->setActiveSheetIndexByName('registered-students');
    $emailValue=$spreadsheet->getActiveSheet()->getCellByColumnAndRow(5,$r)->getValue();
    while(isset($emailValue))
      {
          $r++;
          if($email==$emailValue)
          {
              $f=1;
              break;
          }
          $emailValue=$spreadsheet->getActiveSheet()->getCellByColumnAndRow(5,$r)->getValue();
    }
    if(!isset($emailValue))
    {
        echo "<script> alert('Email is not registered'); </script>";
    }
    if($f==1)
    {
        
        $clgValue=$spreadsheet->getActiveSheet()->getCellByColumnAndRow(6,$r-1)->getValue();
        $name=$spreadsheet->getActiveSheet()->getCellByColumnAndRow(2,$r-1)->getValue();
        
        if($clg!=$clgValue)
        {
            echo "<script> alert('Email id and College doesnt match'); </script>";
        }
        else
        {
            $spreadsheet1 = $reader->load("database/event.xlsx");
            $spreadsheet1->setActiveSheetIndexByName('coding');
            check($spreadsheet1,$name,$clg,"coding");
            $spreadsheet1->setActiveSheetIndexByName('designing');
            check($spreadsheet1,$name,$clg,"designing");
            $spreadsheet1->setActiveSheetIndexByName('gaming');
            check($spreadsheet1,$name,$clg,"gaming");
            $spreadsheet1->setActiveSheetIndexByName('star-of-inspiro');
            check($spreadsheet1,$name,$clg,"star");
            $spreadsheet1->setActiveSheetIndexByName('idea-presentation');
            check($spreadsheet1,$name,$clg,"idea");
            $spreadsheet1->setActiveSheetIndexByName('quiz');
            check($spreadsheet1,$name,$clg,"quiz");
            $spreadsheet1->setActiveSheetIndexByName('marketing');
            check($spreadsheet1,$name,$clg,"market");
            $spreadsheet1->setActiveSheetIndexByName('treasure-hunt');
            check($spreadsheet1,$name,$clg,"treasure");
            
        }

    }
}

?>
          
          <form action='update.php' method='post'>  
    <filedset>
              <legend>Single Events</legend>
            <div class='row' >
            <div class='col-md-5 col-md-offset-0'>
            <div class='row'>
	        <div class='col-md-5'><input type='checkbox' name='cod' id='cod' value='yes' <?php if($cod=='yes') echo "checked='checked'" ;?> > &nbsp CODIFICIA</div>
			<div class='col-md-5 '><input type='checkbox' name='idea' <?php if($idea=='yes') echo "checked='checked'" ;?>>&nbsp IDEA PRESENTATION</div></div>
            </div>
            <div class='col-md-7'>
            <div class='row'>    
            <div class='col-md-4'><input type='checkbox' name='star' id='star' <?php if($star=='yes') echo "checked='checked'" ;?>>&nbsp STAR OF INSPIRO</div>
			<div class='col-md-5'><input type='checkbox' name='web' id='web'<?php if($web=='yes') echo "checked='checked'" ;?>>&nbsp WEBTISM</div>
            <div class='col-md-2'><input type='checkbox' name='game' id='game' <?php if($game=='yes') echo "checked='checked'" ;?>>&nbsp GAMING</div>
            </div>  
          </div></div>
      </filedset><br><br>
      <fieldset>
	  <legend>Group Events</legend>
	      <br>
          <div class='row'>
            <div class='col-md-5 col-md-offset-0'>
            <div class='row'>
            <div class='col-md-1' ></div>    
	        <div class='col-md-4' align='left'><input type='checkbox' name='quiz' id='quiz' <?php if($quiz=='yes') echo "checked='checked'" ;?>>&nbsp QUIZZARDS</div>
			<div class='col-md-5 '><input type='text'readonly name='quiz_p'  id='quiz_t' placeholder='Partners Name' <?php if($quiz=='no') "readonly" ?> <?php if($quiz=='yes') echo "value=$qname";?>> </div></div>
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
	        <div class='col-md-5'>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type='checkbox' name='market' id='market' <?php if($market=='yes') echo "checked='checked'" ;?>>&nbsp THE BIG BASH</div>
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
	        <div class='col-md-5'>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type='checkbox' name='treasure' id='treasure' <?php if($treasure=='yes') echo "checked='checked'" ;?>>&nbsp FORTUNE HUNT</div>
			<div class='col-md-5 '><input type='text' name='treasure_p2' id='treasure_p2' placeholder='Partners Name' <?php if($market=='yes') echo "value=$tname1";?>></div></div>
            </div>
            <div class='col-md-7'>
            <div class='row'>    
            <div class='col-md-4'><input type='text' name='treasure_p3' id='treasure_p3' placeholder='Partners Name'  <?php if($treasure=='yes') echo "value=$tname2";?>></div>
			<div class='col-md-4'><input type='text' name='treasure_p4' id='treasure_p4' placeholder='Partners Name'  <?php if($treasure=='yes') echo "value=$tname3";?>></div>
            <div class='col-md-2'><input type='text' name='treasure_p1' id='treasure_p1' placeholder='Partners Name'  <?php if($treasure=='yes') echo "value=$tname4";?>></div>
            </div>  
          </div></div>
        </fieldset><br>
        	    <button type='submit' class='sbtn'>Update</button>
          </form></fieldset>
 	  </div>
	  </div>    
	  </section>

  
  
<script src="js/main.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>    
<script src="js/style.changer.js"></script>
<script src="js/jquery.particleground.min.js"></script>
	

	

</body>
</html>

