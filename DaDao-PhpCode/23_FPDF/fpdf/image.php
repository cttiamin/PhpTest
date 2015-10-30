<?php
//引入FPDF运行库
define('FPDF_FONTPATH','font/');				
require_once('fpdf.php');	
//实例化FPDF对象
$pdf=new FPDF('p','mm','A4');
//开始创建PDF
$pdf->Open();
//新建一个页面
$pdf->AddPage();
//设定字形
$pdf->SetFont('Times','B',20);
//输出一段文本
$pdf->Text(10,10,'The Sunyang Icon!');
$pdf->Ln();
//插入图片
$pdf->Image('sunyang.jpg',20,15,30,30);
//输出PDF
$pdf->Output();
?>
