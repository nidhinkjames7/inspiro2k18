<?php
include_once("connect.php");

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet;
$spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();
$writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
$myWorkSheet = new \PhpOffice\PhpSpreadsheet\Worksheet\Worksheet($spreadsheet, 'coding');
$spreadsheet->addSheet($myWorkSheet, 0);
$myWorkSheet = new \PhpOffice\PhpSpreadsheet\Worksheet\Worksheet($spreadsheet, 'gaming');
$spreadsheet->addSheet($myWorkSheet, 1);
$myWorkSheet = new \PhpOffice\PhpSpreadsheet\Worksheet\Worksheet($spreadsheet, 'star-of-inspiro');
$spreadsheet->addSheet($myWorkSheet, 2);
$myWorkSheet = new \PhpOffice\PhpSpreadsheet\Worksheet\Worksheet($spreadsheet, 'web-designing');
$spreadsheet->addSheet($myWorkSheet, 3);
$myWorkSheet = new \PhpOffice\PhpSpreadsheet\Worksheet\Worksheet($spreadsheet, 'quiz');
$spreadsheet->addSheet($myWorkSheet, 4);
$myWorkSheet = new \PhpOffice\PhpSpreadsheet\Worksheet\Worksheet($spreadsheet, 'treasure-hunt');
$spreadsheet->addSheet($myWorkSheet, 5);
$myWorkSheet = new \PhpOffice\PhpSpreadsheet\Worksheet\Worksheet($spreadsheet, 'marketing');
$spreadsheet->addSheet($myWorkSheet, 6);
$spreadsheet->removeSheetByIndex(7);
$writer->save("spreadsheet/events-details.xlsx");

function writes($spreadsheet,$head,$body)
{
$spreadsheet->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);    
$spreadsheet->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
$spreadsheet->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
$spreadsheet->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
$spreadsheet->getActiveSheet()->fromArray($head,NULL,'A1');
$spreadsheet->getActiveSheet()->fromArray($body,NULL,'A2');
$GLOBALS['writer']->save("spreadsheet/events-details.xlsx");
}

$result=mysqli_query($con,"select * from `coding`");
$developer_records=array();
while($row=mysqli_fetch_assoc($result))
$developer_records[] = $row;
$spreadsheet->setActiveSheetIndexByName('coding');
foreach($developer_records as $record) {
$a[]=array_keys($record);
if($a!=' ')
    break ;
}
 writes($spreadsheet,$a,$developer_records);

$result=mysqli_query($con,"select * from `gaming` ");
$developer_records=array();
while($row=mysqli_fetch_assoc($result))
$developer_records[] = $row;
$spreadsheet->setActiveSheetIndexByName('gaming');
 writes($spreadsheet,$a,$developer_records);

$result=mysqli_query($con,"select * from `star of inspiro` ");
$developer_records=array();
while($row=mysqli_fetch_assoc($result))
$developer_records[] = $row;
$spreadsheet->setActiveSheetIndexByName('star-of-inspiro');
writes($spreadsheet,$a,$developer_records);

$result=mysqli_query($con,"select * from `web designing`");
$developer_records=array();
while($row=mysqli_fetch_assoc($result))
$developer_records[] = $row;
$spreadsheet->setActiveSheetIndexByName('web-designing');
unset($a);
foreach($developer_records as $record) {
$a[]=array_keys($record);
if($a!=' ')
    break ;
}
 writes($spreadsheet,$a,$developer_records);

$result=mysqli_query($con,"select * from `marketing`");
$developer_records=array();
while($row=mysqli_fetch_assoc($result))
$developer_records[] = $row;
$spreadsheet->setActiveSheetIndexByName('marketing');
writes($spreadsheet,$a,$developer_records);

$result=mysqli_query($con,"select * from `quiz`");
$developer_records=array();
while($row=mysqli_fetch_assoc($result))
$developer_records[] = $row;
$spreadsheet->setActiveSheetIndexByName('quiz');
writes($spreadsheet,$a,$developer_records);

$result=mysqli_query($con,"select * from `treasure hunt`");
$developer_records=array();
while($row=mysqli_fetch_assoc($result))
$developer_records[] = $row;
$spreadsheet->setActiveSheetIndexByName('treasure-hunt');
writes($spreadsheet,$a,$developer_records);
header('location:download.php');
?>