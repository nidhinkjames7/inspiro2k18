<?php 
if(!isset($_POST['register']))
{
    header('location:index.php');
}
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet;
$f=0;
function eof($sheet)
{
    $r=1;
    $mail=$sheet->getActiveSheet()->getCellByColumnAndRow(2,$r)->getValue();
    while(isset($mail))
      {
          $r++;
          $mail=$sheet->getActiveSheet()->getCellByColumnAndRow(2,$r)->getValue();
      }
    return $r;    
}
function emailExist($sheet,$email)
{
    $r=1;
    $mail=$sheet->getActiveSheet()->getCellByColumnAndRow(5,$r)->getValue();
    while(isset($mail))
      {
          $r++;
          if($email==$mail)
          {
              $GLOBALS['f']=1;
              break;
          }
          $mail=$sheet->getActiveSheet()->getCellByColumnAndRow(5,$r)->getValue();
      }
    return $r;   
}

function s_event($sheet,$r,$writer,$name,$clg,$gid='')
{
$sheet->getActiveSheet()->setCellValue('A'.$r, $r-1); 
$sheet->getActiveSheet()->setCellValue('B'.$r, $name); 
$sheet->getActiveSheet()->setCellValue('C'.$r, $clg);
if(isset($gid)) 
   $sheet->getActiveSheet()->setCellValue('D'.$r, $gid);
$writer->save('database/event.xlsx');    
}

$spreadsheet1 = \PhpOffice\PhpSpreadsheet\IOFactory::load("database/reg.xlsx");
$spreadsheet2 = \PhpOffice\PhpSpreadsheet\IOFactory::load("database/event.xlsx");
$reader= \PhpOffice\PhpSpreadsheet\IOFactory::createReader("Xlsx");
$writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet1, "Xlsx");

$name=$_POST['name'];
$clg=$_POST['clg'];
$gender=$_POST['gender'];
$mob=$_POST['phn'];
$email=$_POST['email'];
$food=$_POST['food'];
$stay=$_POST['stay'];
$spreadsheet1->setActiveSheetIndexByName('registered-students');    
$r=emailExist($spreadsheet1,$email);
if($f==1)
{
    echo"<script>alert('Email already registered');
    window.location.href='register.php';</script>";

}
else
{
$spreadsheet1->getActiveSheet()->setCellValue('A'.$r, $r-1); 
$spreadsheet1->getActiveSheet()->setCellValue('B'.$r, $name); 
$spreadsheet1->getActiveSheet()->setCellValue('C'.$r, $gender); 
$spreadsheet1->getActiveSheet()->setCellValue('D'.$r, $mob); 
$spreadsheet1->getActiveSheet()->setCellValue('E'.$r, $email); 
$spreadsheet1->getActiveSheet()->setCellValue('F'.$r, $clg);  
$writer->save('database/reg.xlsx');
if($gender=='m')
{
    $spreadsheet1->setActiveSheetIndexByName('registered-boys');    
    $r=eof($spreadsheet1);
}
else
{
    $spreadsheet1->setActiveSheetIndexByName('registered-girls');
    $r=eof($spreadsheet1);
}
    
$spreadsheet1->getActiveSheet()->setCellValue('A'.$r, $r-1); 
$spreadsheet1->getActiveSheet()->setCellValue('B'.$r, $name); 
$spreadsheet1->getActiveSheet()->setCellValue('C'.$r, $mob); 
$spreadsheet1->getActiveSheet()->setCellValue('D'.$r, $email); 
$spreadsheet1->getActiveSheet()->setCellValue('E'.$r, $clg); 
$spreadsheet1->getActiveSheet()->setCellValue('F'.$r, $stay); 
$spreadsheet1->getActiveSheet()->setCellValue('G'.$r, $food); 
$writer->save('database/reg.xlsx');
$writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet2, "Xlsx");

if(isset($_POST['cod']))
{
    $spreadsheet2->setActiveSheetIndexByName('coding');    
    $r=eof($spreadsheet2);
    s_event($spreadsheet2,$r,$writer,$name,$clg);
}
if(isset($_POST['game']))
{
    $spreadsheet2->setActiveSheetIndexByName('gaming');    
    $r=eof($spreadsheet2);
    s_event($spreadsheet2,$r,$writer,$name,$clg);
}
if(isset($_POST['web']))
{
    $spreadsheet2->setActiveSheetIndexByName('designing');    
    $r=eof($spreadsheet2);
    s_event($spreadsheet2,$r,$writer,$name,$clg);
}
if(isset($_POST['star']))
{
    $spreadsheet2->setActiveSheetIndexByName('star-of-inspiro');    
    $r=eof($spreadsheet2);
    s_event($spreadsheet2,$r,$writer,$name,$clg);
}
if(isset($_POST['idea']))
{
    $spreadsheet2->setActiveSheetIndexByName('idea-presentation');    
    $r=eof($spreadsheet2);
    s_event($spreadsheet2,$r,$writer,$name,$clg);
}
if(isset($_POST['quiz']))
{
    $spreadsheet2->setActiveSheetIndexByName('quiz');    
    $r=eof($spreadsheet2);
    s_event($spreadsheet2,$r,$writer,$name,$clg,$r-1);
    s_event($spreadsheet2,$r+1,$writer,$_POST['quiz_p'],$clg,$r-1);    
}
if(isset($_POST['treasure']))
{
    $spreadsheet2->setActiveSheetIndexByName('treasure-hunt');    
    $r=eof($spreadsheet2);
    s_event($spreadsheet2,$r,$writer,$name,$clg,$r-1);
    s_event($spreadsheet2,$r+1,$writer,$_POST['treasure_p1'],$clg,$r-1);
    s_event($spreadsheet2,$r+2,$writer,$_POST['treasure_p2'],$clg,$r-1);
    s_event($spreadsheet2,$r+3,$writer,$_POST['treasure_p3'],$clg,$r-1);
    s_event($spreadsheet2,$r+4,$writer,$_POST['treasure_p4'],$clg,$r-1);
}
if(isset($_POST['market']))
{
    $spreadsheet2->setActiveSheetIndexByName('marketing');    
    $r=eof($spreadsheet2);
    s_event($spreadsheet2,$r,$writer,$name,$clg,$r-1);
    s_event($spreadsheet2,$r+1,$writer,$_POST['market_p1'],$clg,$r-1);
    s_event($spreadsheet2,$r+2,$writer,$_POST['market_p2'],$clg,$r-1);
    s_event($spreadsheet2,$r+3,$writer,$_POST['market_p3'],$clg,$r-1);
}


echo "<script>
alert('Registration Sucessfull');
window.location.href='index.php';
</script>";
}
?>



