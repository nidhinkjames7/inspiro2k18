<?php
if(isset($_POST['update']))
{
    include_once("connect.php");
         $name=$_POST['name'];
         $rid=$_POST['rid'];
         $clg=$_POST['clg'];
         $tid=$_POST['tid'];
         $wid=$_POST['wid'];
         if($_POST['qid']!=0)
            $g_q=$_POST['qid'];
         else
             $g_q='Q'.$rid;
         if($_POST['tid']!=0)
            $g_t=$_POST['tid'];
         else
             $g_t='T'.$rid;
         if($_POST['wid']!=0)
            $g_w=$_POST['wid'];
         else
             $g_w='W'.$rid;
         if($_POST['mid']!=0)
            $g_m=$_POST['mid'];
         else
             $g_m='M'.$rid;
         mysqli_query($con,"DELETE FROM `marketing` WHERE `G_ID`='$g_m'")or die(mysqli_error($con));     
         mysqli_query($con,"DELETE FROM `quiz` WHERE `G_ID`='$g_q'")or die(mysqli_error($con));     
         mysqli_query($con,"DELETE FROM `treasure hunt` WHERE `G_ID`='$g_t'")or die(mysqli_error($con));     
         mysqli_query($con,"DELETE FROM `web designing` WHERE `G_ID`='$g_w'")or die(mysqli_error($con));
        if(isset($_POST['cod'])){
            $r=mysqli_query($con,"SELECT * FROM `coding` WHERE `NAME`='$name' and `COLLEGE`='$clg'")or die(mysqli_error($con));     
            if(mysqli_num_rows($r)==0)
               mysqli_query($con,"INSERT INTO  `coding` values(0,'$name','$clg')")or die(mysqli_error($con));  
        }
        if(isset($_POST['star'])){
            $r=mysqli_query($con,"SELECT * FROM `star of inspiro` WHERE `NAME`='$name' and `COLLEGE`='$clg'")or die(mysqli_error($con));     
            if(mysqli_num_rows($r)==0)
               mysqli_query($con,"INSERT INTO  `star of inspiro` values(0,'$name','$clg')")or die(mysqli_error($con));  
        }
        if(isset($_POST['game'])){
            $r=mysqli_query($con,"SELECT * FROM `gaming` WHERE `NAME`='$name' and `COLLEGE`='$clg'")or die(mysqli_error($con));     
            if(mysqli_num_rows($r)==0)
               mysqli_query($con,"INSERT INTO  `gaming` values(0,'$name','$clg')")or die(mysqli_error($con));  
        }
        if(!isset($_POST['cod']))
            mysqli_query($con,"DELETE FROM `coding` WHERE `NAME`='$name' and `COLLEGE`='$clg'")or die(mysqli_error($con));     
        if(!isset($_POST['star']))
            mysqli_query($con,"DELETE FROM `star of inspiro` WHERE `NAME`='$name' and `COLLEGE`='$clg'")or die(mysqli_error($con));     
        if(!isset($_POST['game']))
            mysqli_query($con,"DELETE FROM `gaming` WHERE `NAME`='$name' and `COLLEGE`='$clg'")or die(mysqli_error($con));     
        if(isset($_POST['quiz']))
        {
            $p=$_POST['quiz_p']; 
            mysqli_query($con,"insert into `quiz` values(0,'$g_q','$name','$clg')")or die(mysqli_error($con));     
            mysqli_query($con,"insert into `quiz` values(0,'$g_q','$p','$clg')")or die(mysqli_error($con));     
        }
        if(isset($_POST['web']))
        {
            $p=$_POST['web_p']; 
            mysqli_query($con,"insert into `web designing` values(0,'$g_w','$name','$clg')")or die(mysqli_error($con));     
            mysqli_query($con,"insert into `web designing` values(0,'$g_w','$p','$clg')")or die(mysqli_error($con));     

        }
        if(isset($_POST['market']))
        {
            $p1=$_POST['market_p1']; 
            $p2=$_POST['market_p2']; 
            $p3=$_POST['market_p3']; 
            mysqli_query($con,"insert into `marketing` values(0,'$g_m','$name','$clg')")or die(mysqli_error($con));     
            mysqli_query($con,"insert into `marketing` values(0,'$g_m','$p1','$clg')")or die(mysqli_error($con));     
            mysqli_query($con,"insert into `marketing` values(0,'$g_m','$p2','$clg')")or die(mysqli_error($con));     
            mysqli_query($con,"insert into `marketing` values(0,'$g_m','$p3','$clg')")or die(mysqli_error($con));     
        }
        if(isset($_POST['treasure']))
        {
            $p1=$_POST['treasure_p1']; 
            $p2=$_POST['treasure_p2'];
            mysqli_query($con,"insert into `treasure hunt` values(0,'$g_t','$name','$clg')")or die(mysqli_error($con));     
            mysqli_query($con,"insert into `treasure hunt` values(0,'$g_t','$p1','$clg')")or die(mysqli_error($con));     
            mysqli_query($con,"insert into `treasure hunt` values(0,'$g_t','$p2','$clg')")or die(mysqli_error($con));     
            if($_POST['treasure_p3']!=NULL)
            {
                $p3=$_POST['treasure_p3'];
                mysqli_query($con,"insert into `treasure hunt` values(0,'$g_t','$p3','$clg')")or die(mysqli_error($con));     
            }
 
        }
          echo "<script> alert('Updation Sucessfull');window.location.href='index.php';</script>"; 
}
else
header('location:index.php');
?>
