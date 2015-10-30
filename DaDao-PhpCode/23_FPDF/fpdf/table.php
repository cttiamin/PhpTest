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
//设定表格说明
$pdf->Cell(150,10,'The Information Of Books',0,1,'C');
$pdf->Ln(5);
//设定表头
$thead=array('Names','Author','Price','Number','Publisher');		
//填写表内信息
$info=array();								
$info[0] = array('Struts2','Andy','80.00','3000','NO1');
$info[1] = array('Groovy','Job','70.00','3000','NO2');
$info[2] = array('C++','Bob','60.00','3000','NO3');
$info[3] = array('C','Terry','59.00','3000','NO3');
//设定表头数据字形					
$pdf->SetFont('Times','B',15);
//输出表头
for($i=0;$i<count($thead);$i++)					
    $pdf->Cell(30,8,$thead[$i],1,0,'C');
$pdf->Ln();
//设定表内字体类型并显示数据
$pdf->SetFont('Times','I',13);
foreach($info as $r)						
{	
    $pdf->Cell(30,8,$r[0],1,0,'C');
    $pdf->Cell(30,8,$r[1],1,0,'C');
    $pdf->Cell(30,8,$r[2],1,0,'C');
    $pdf->Cell(30,8,$r[3],1,0,'C');
    $pdf->Cell(30,8,$r[4],1,0,'C');
    $pdf->Ln();
}
//输出
$pdf->Output();
?>
