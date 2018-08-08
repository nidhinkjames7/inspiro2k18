<?php
include_once("connect.php");
if(isset($_POST['register']))
{
 $email=$_POST['email'];  
 $phone=$_POST['phn'];
 $name=$_POST['name'];
 $sex=$_POST['gender'];
 $clg=$_POST['clg'];
 $food=$_POST['food'];
 $stay=$_POST['stay'];
 $r1=mysqli_query($con,"select * from `registered-students` where `EMAIL`='$email'")or die(mysqli_error($con));
 $r2=mysqli_query($con,"select * from `registered-students` where `PHONE`='$phone'")or die(mysqli_error($con));
 if(mysqli_num_rows($r1)>0)
    echo "<script> alert('Email already exist');window.location.href='register.php';</script>"; 
 if(mysqli_num_rows($r2)>0)
    echo "<script> alert('Phone number already exist');window.location.href='register.php';</script>"; 
 mysqli_query($con,"insert into `registered-students` values(0,'$name','$sex','$phone','$email','$clg','$stay','$food')")or die(mysqli_error($con));
 if(isset($_POST['cod']))
    mysqli_query($con,"insert into `coding` values(0,'$name','$clg')")or die(mysqli_error($con));     
 if(isset($_POST['game']))
    mysqli_query($con,"insert into `gaming` values(0,'$name','$clg')")or die(mysqli_error($con));     
 if(isset($_POST['star']))
    mysqli_query($con,"insert into `star of inspiro` values(0,'$name','$clg')")or die(mysqli_error($con));     
 $r1=mysqli_query($con,"select `reg-id` from `registered-students` where `EMAIL`='$email'")or die(mysqli_error($con));
 $row=mysqli_fetch_array($r1);
 if(isset($_POST['quiz']))
 {
    $a='Q'.$row['reg-id'];
    $p=$_POST['quiz_p']; 
    mysqli_query($con,"insert into `quiz` values(0,'$a','$name','$clg')")or die(mysqli_error($con));     
    mysqli_query($con,"insert into `quiz` values(0,'$a','$p','$clg')")or die(mysqli_error($con));     
 }
 if(isset($_POST['web']))
 {
    $a='W'.$row['reg-id'];
    $p=$_POST['web_p']; 
    mysqli_query($con,"insert into `web designing` values(0,'$a','$name','$clg')")or die(mysqli_error($con));     
    mysqli_query($con,"insert into `web designing` values(0,'$a','$p','$clg')")or die(mysqli_error($con));     
 }
 if(isset($_POST['market']))
 {
    $a='M'.$row['reg-id'];
    $p1=$_POST['market_p1']; 
    $p2=$_POST['market_p2']; 
    $p3=$_POST['market_p3']; 
    mysqli_query($con,"insert into `marketing` values(0,'$a','$name','$clg')")or die(mysqli_error($con));     
    mysqli_query($con,"insert into `marketing` values(0,'$a','$p1','$clg')")or die(mysqli_error($con));     
    mysqli_query($con,"insert into `marketing` values(0,'$a','$p2','$clg')")or die(mysqli_error($con));     
    mysqli_query($con,"insert into `marketing` values(0,'$a','$p3','$clg')")or die(mysqli_error($con));     
 }
 if(isset($_POST['treasure']))
 {
    $a='T'.$row['reg-id'];
    $p1=$_POST['treasure_p1']; 
    $p2=$_POST['treasure_p2']; 
    mysqli_query($con,"insert into `treasure hunt` values(0,'$a','$name','$clg')")or die(mysqli_error($con));     
    mysqli_query($con,"insert into `treasure hunt` values(0,'$a','$p1','$clg')")or die(mysqli_error($con));     
    mysqli_query($con,"insert into `treasure hunt` values(0,'$a','$p2','$clg')")or die(mysqli_error($con));     
    if($_POST['treasure_p3']!='') 
    {
        $p3=$_POST['treasure_p3']; 
        mysqli_query($con,"insert into `treasure hunt` values(0,'$a','$p3','$clg')")or die(mysqli_error($con));     
    }
 }
  if(!mysqli_error($con))
  {
      echo "<script> alert('Registeration Sucessfull');window.location.href='index.php';</script>"; 
  }
}
else
    header("location:index.php");
?>