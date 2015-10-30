<?php 
//引入插件文件
require('chinese.php'); 
//定义欢迎信息
$str ="欢迎来到三扬！";
//实例化中文PDF对象
$pdf=new PDF_Chinese(); 
//设定文档中使用的中文字体
$pdf->AddGBFont('songti','宋体'); 
//创建一个新的PDF文档
$pdf->Open(); 
//增加一个新页面
$pdf->AddPage(); 
//设定字体
$pdf->SetFont('songti','B',40); 
//输出文字
$pdf->Write(10,$str); 

//输出PDF
$pdf->Output(); 
?>