<?php
include_once("connect.php");

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet;
$spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();
$writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
$myWorkSheet = new \PhpOffice\PhpSpreadsheet\Worksheet\Worksheet($spreadsheet, 'Registered-students');
$spreadsheet->addSheet($myWorkSheet, 0);
$myWorkSheet = new \PhpOffice\PhpSpreadsheet\Worksheet\Worksheet($spreadsheet, 'Registered-boys');
$spreadsheet->addSheet($myWorkSheet, 1);
$myWorkSheet = new \PhpOffice\PhpSpreadsheet\Worksheet\Worksheet($spreadsheet, 'Registered-girls');
$spreadsheet->addSheet($myWorkSheet, 2);
$myWorkSheet = new \PhpOffice\PhpSpreadsheet\Worksheet\Worksheet($spreadsheet, 'Registered-college');
$spreadsheet->addSheet($myWorkSheet, 3);
$spreadsheet->removeSheetByIndex(4);
$writer->save("spreadsheet/registered-details.xlsx");

function writes($spreadsheet,$head,$body)
{
$spreadsheet->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);    
$spreadsheet->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
$spreadsheet->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
$spreadsheet->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
$spreadsheet->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);
$spreadsheet->getActiveSheet()->getColumnDimension('F')->setAutoSize(true);
$spreadsheet->getActiveSheet()->getColumnDimension('G')->setAutoSize(true);
$spreadsheet->getActiveSheet()->getColumnDimension('H')->setAutoSize(true);
$spreadsheet->getActiveSheet()->fromArray($head,NULL,'A1');
$spreadsheet->getActiveSheet()->fromArray($body,NULL,'A2');
$GLOBALS['writer']->save("spreadsheet/registered-details.xlsx");
}

$result=mysqli_query($con,"select * from `registered-students`");
$developer_records=array();
while($row=mysqli_fetch_assoc($result))
$developer_records[] = $row;
$spreadsheet->setActiveSheetIndexByName('Registered-students');
foreach($developer_records as $record) {
$a[]=array_keys($record);
if($a!=' ')
    break ;
}
 writes($spreadsheet,$a,$developer_records);

$result=mysqli_query($con,"select `reg-id`,`NAME`,`PHONE`,`EMAIL`,`COLLEGE`,`ACCOMMODATION`,`FOOD` from `registered-students` where `GENDER`='m'");
$developer_records=array();
while($row=mysqli_fetch_assoc($result))
$developer_records[] = $row;
$spreadsheet->setActiveSheetIndexByName('Registered-boys');
unset($a);
foreach($developer_records as $record) {
$a[]=array_keys($record);
if($a!=' ')
    break ;
}
 writes($spreadsheet,$a,$developer_records);

$result=mysqli_query($con,"select `reg-id`,`NAME`,`PHONE`,`EMAIL`,`COLLEGE`,`ACCOMMODATION`,`FOOD` from `registered-students` where `GENDER`='f'");
$developer_records=array();
while($row=mysqli_fetch_assoc($result))
$developer_records[] = $row;
$spreadsheet->setActiveSheetIndexByName('Registered-girls');
unset($a);
foreach($developer_records as $record) {
$a[]=array_keys($record);
if($a!=' ')
    break ;
}
 writes($spreadsheet,$a,$developer_records);

$result=mysqli_query($con,"select * from `registered-college`");
$developer_records=array();
while($row=mysqli_fetch_assoc($result))
$developer_records[] = $row;
$spreadsheet->setActiveSheetIndexByName('Registered-college');
unset($a);
foreach($developer_records as $record) {
$a[]=array_keys($record);
if($a!=' ')
    break ;
}
 writes($spreadsheet,$a,$developer_records);
header('location:event-details.php');
?>