<?php
//引入FPDF运行库
define('FPDF_FONTPATH','font/');				
require_once('fpdf.php');
//创建生成页眉与页脚的类
class  PDF extends FPDF {
	//生成页眉
	function Header(){
		$this->SetFont('Arial','B',18);
		$this->Cell(200,10,'Welcome to Sunyang',0,0,'C');
		$this->Ln(20);
	}
	//生成页脚
	function Footer(){
		$this->SetY(-10);
		$this->SetFont('Times','B',18);
		$this->Cell(200,10,'Current Page is '.$this->PageNo(),0,0,'C');
	}
		
}
//创建PDF文档
$pdf =new PDF('p','mm','A4');
$pdf->Open();
//创建页面
$pdf->AddPage();
//指定字体类型
$pdf->SetFont('Times','I',20);
//指定页眉与显现内容的距离
$pdf->Ln(10);
//页面显示信息
$str ="The Sunyang Team is an excellent team!";
$pdf->Cell(0,0,$str);
//输出
$pdf->Output();
?>
