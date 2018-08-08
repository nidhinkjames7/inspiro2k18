<?php
if(isset($_POST['cname']))
{
include_once("connect.php");
$cname=$_POST['cname'];
$email=$_POST['email'];
$phone=$_POST['phn'];
$fname=$_POST['fname'];
$limit=$_POST['limit'];
$place=$_POST['place'];
mysqli_query($con,"insert into `registered-college` values(0,'$cname','$place','$fname','$email','$phone','$limit')")or die(mysqli_error($con));
echo "ok";die;
}
else
{
 echo "error";die;
}
?>