<?php 
	
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
$spreadsheet = $reader->load("database/reg.xlsx");
$spreadsheet->setActiveSheetIndexByName('registered-college');
$r=2;
$clg=$spreadsheet->getActiveSheet()->getCellByColumnAndRow(2,$r)->getValue();
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
 
</head>

  <body class="appear-animate">
  
 <div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 align='center' class="modal-title">....GENERAL RULES....</h4>
            </div>
            <div class="modal-body">
                <p>
                    1. A letter from the principal or HOD and ID card should be submitted at the time of regstration.<br>
                    2. Registration fee: Rs250/- for gaming and treasure hunt extra Rs50/-<br>
                    3. The maximum number of participants allowed from a college is 20.<br>
                    4. Food and accomodation will be provided for both boys and girls, during the program.<br>
                    5. Those who need accomodation may kindly inform on or before 10th September 2018.<br>
                    6. Participants should tick on to the time schedule.<br>
                    7. Any person voilating the rules is liable to be disqualified.<br>
                    8. The decision of the judges will be final and binding.<br>
                    9. Registration time 8:30 am to 11 am on 18 September 2018.<br>
                    10. There will be no priliminary round if there are less than 10 participants.<br>
                    11. For items with less than 5 perticipants, the following rules apply: <br>
                        *) The participants will be qualified for a prize only if they score more than 50% of the total score.<br>
                        *) In case no one manages to score more than 50%, only the one with the highest score alone will recieve a consolation prize.<br>
                </p>
                
                    
            </div>
        </div>
    </div>
</div>
<div id="modal2" class='modal fade'>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" onclick="">&times;</button>
                <h4 align='center' class="modal-title">Instructions for filling form</h4>
            </div>
            <div class="modal-body">
                <p>Subscribe to our maidhg.</p>

                    <button   class="close"  data-dismiss="modal" aria-hidden="true">OK</button>

            </div>
        </div>
    </div>
</div>
 
<nav class="main-nav white transparent stick-fixed">
      <div class="full-wrapper relative clearfix">
        <!-- Logo ( paste you text or image)-->
        <div class="nav-logo-wrap"><a href="index.php" class="logo">INSPIRO<span class="higl"><sub>i8</sub></span></a></div>    
      </div>
    </nav>

 <section id="hero" class="full-screen">
	<div id="particle-ground" data-background="img/full-width/bg-21.JPG" data-top="transform: translate3d(0px, 0px, 0px)" data-top-bottom="transform: translate3d(0px, -200px, 0px)" data-anchor-target="#hero" class="parallax parallax-hero full-screen bg-dark-50"></div>
      <div class="hero-content">
        <div class="hero-content-inner">  
	  <form action='reg-action.php' method='post'>
	  <fieldset>
	  <div class='row' align='left'>
	  <div class='col-md-6 col-md-offset-0'>
	  <fieldset>
	   <legend>Personal Details</legend>
	      <div class='row'>
	        <div class='col-md-4 col-md-offset-1'>Name</div>
			<div class='col-md-4 col-md-offset-1'><input type='text' name='name' placeholder='Student Name' required></div>
	      </div><br><br>
		  <div class='row'>
	        <div class='col-md-4 col-md-offset-1'>Gender</div>
			<div class='col-md-4 col-md-offset-1'><input type='radio' name='gender' value='m' required> Male <input type='radio' name='gender' value='f'> Female</div>
	      </div><br><br>
		  <div class='row'>
	        <div class='col-md-4 col-md-offset-1'>Mobile Number</div>
			<div class='col-md-4 col-md-offset-1'><input type='tel' name='phn' pattern="[7,8,9][0-9]{9}" minlength='10' maxlength='10' id="tel" name="tel" oninvalid="setCustomValidity('please enter a valid telephone number')" placeholder="Phone Number" required></div>
	      </div><br><br>
		  <div class='row'>
	        <div class='col-md-4 col-md-offset-1'>Email</div>
			<div class='col-md-4 col-md-offset-1'><input type='email' name='email' placeholder='Email id' required></div>
	      </div><br><br>
		  <div class='row'>
	        <div class='col-md-4 col-md-offset-1'>College Name</div>
			<div class='col-md-4 col-md-offset-1'>
                <select name='clg' id='clg' required>
                      <option>Select</option>
                      <?php
                        while(isset($clg))
                        {
                      ?>
                         <option><?php echo $clg; ?></option>
                            <?php $r++;
                            $clg=$spreadsheet->getActiveSheet()->getCellByColumnAndRow(2,$r)->getValue();
                        }
                      ?>
                      <option value='other' id="sample" >Others</option>
                </select>
              </div>
	      </div>
          
          <br><br>
		  <div class='row'>
	        <div class='col-md-4 col-md-offset-1'>Food Type</div>
			<div class='col-md-4 col-md-offset-1'><select name='food' required>
												  <option>Vegetarian</option>
												  <option>Non-Vegetarian</option>
												  </select></div>
	      </div><br><br>
		  <div class='row'>
	        <div class='col-md-4 col-md-offset-1'>Accommodation </div>
			<div class='col-md-5 col-md-offset-1'><input type='radio' name='stay' value='yes' required> Needed <input type='radio' name='stay' value='no'> Not Needed</div>
	      </div>
	    </fieldset>
	  </div>
	  <div class='col-md-6'>
	  <fieldset>
	  <legend>Event Details</legend>
	       <div class='row'>
	        <div class='col-md-3'> Single Events &nbsp: </div>
			<div class='col-md-4'><input type='checkbox' name='cod' >&nbsp CODIFICIA</div>
	        <div class='col-md-5'><input type='checkbox' name='web' >&nbsp WEBTISM</div>
	      </div><br>
		  <div class='row'>
	        <div class='col-md-3'> </div>
			<div class='col-md-4'><input type='checkbox' name='star' >&nbsp STAR OF INSPIRO</div>
	        <div class='col-md-5'><input type='checkbox' name='idea' >&nbsp IDEA PRESENTATION</div>
	      </div><br>
		  <div class='row'>
	        <div class='col-md-3'> </div>
			<div class='col-md-4'><input type='checkbox' name='game' >&nbsp GAMING</div>
	        <div class='col-md-4'></div>
	      </div><br>
		  <div class='row'>
	        <div class='col-md-3'> Group Events &nbsp: </div>
			<div class='col-md-4'><input type='checkbox' name='quiz' id='quiz' >&nbsp QUIZZARDS</div>
	        <div class='col-md-5'><input type='text'readonly name='quiz_p'  id='quiz_t' placeholder='Partners Name'  ></div>
	      </div><br><br>
		  <div class='row'>
	        <div class='col-md-3'> </div>
			<div class='col-md-4'><input type='checkbox' name='market' id='market' >&nbsp THE BIG BASH</div>
	        <div class='col-md-5'><input type='text' name='market_p1' id='market_p1' placeholder='Partners Name' readonly></div>
	      </div><br>
		  <div class='row'>
	        <div class='col-md-3'> </div>
			<div class='col-md-4'><input type='text' name='market_p3' id='market_p2' placeholder='Partners Name' readonly></div>
	        <div class='col-md-5'><input type='text' name='market_p2' id='market_p3' placeholder='Partners Name' readonly></div>
	      </div><br><br>
		  <div class='row'>
	        <div class='col-md-3'> </div>
			<div class='col-md-4'><input type='checkbox' name='treasure' id='treasure' >&nbsp FORTUNE HUNT</div>
	        <div class='col-md-5'></div>
	      </div><br>
		  <div class='row'>
	        <div class='col-md-3'> </div>
			<div class='col-md-4'><input type='text' name='treasure_p2' id='treasure_p2' placeholder='Partners Name' readonly></div>
	        <div class='col-md-5'><input type='text' name='treasure_p3' id='treasure_p3' placeholder='Partners Name' readonly></div>
	      </div><br>
		  <div class='row'>
	        <div class='col-md-3'> </div>
			<div class='col-md-4'><input type='text' name='treasure_p4' id='treasure_p4' placeholder='Partners Name' readonly></div>
	        <div class='col-md-5'><input type='text' name='treasure_p1' id='treasure_p1' placeholder='Partners Name' readonly>
	      </div><br>
          </div>
	    </fieldset>
 	  </div>
	  </div>
          <button type='submit' name='register' class='sbtn'>Register</button>
	  </fieldset>
	  </form>
      </div>              
	   </div>
      </section>

  
    <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>    
    <script src="js/style.changer.js"></script>
    <script src="js/jquery.particleground.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/reg.js"></script>
	

	

</body>
</html>