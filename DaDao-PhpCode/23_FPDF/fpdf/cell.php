<?php
//������;

//����FPDF���п�
define('FPDF_FONTPATH','font/');
require_once('fpdf.php');
//ʵ����FPDF����
$pdf=new FPDF('p','mm','A4');
//��ʼ����PDF
$pdf->Open();
//�½�һ��ҳ��
$pdf->AddPage();
//�趨����
$pdf->SetFont('Times','I',20);
$pdf->Cell(100,10,'Hello Sunyang!!!',1,1,'C');
//���
$pdf->Output();
?>
