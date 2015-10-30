<?php
//第一个例子
//引入FPDF运行库
define('FPDF_FONTPATH','font/');
require_once('fpdf.php');
//实例化FPDF对象
$pdf=new FPDF('p','mm','A4');
//开始创建PDF
$pdf->Open();
//新建一个页面
$pdf->AddPage();
//设定PDF文档的标题
$pdf->SetTitle('Welcome to Sunyang');
//设定文档的作者
$pdf->SetAuthor('Sunyang Team');
//设定文档的主题
$pdf->SetSubject('Sunyang Test');
//设关键字
$pdf->SetKeywords('Declaration');
//设定字形
$pdf->SetFont('Times','I',15);
//输出文档信息
$pdf->Cell(200,100,'Hello Sunyang!!!',0,0,'C');
//输出文字，允许下载
 $pdf->Output('information.pdf','s');

?>
