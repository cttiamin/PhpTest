<?php
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
$pdf->SetFont('Times','B',20);
//���һ���ı�
$pdf->Text(10,10,'The Sunyang Icon!');
$pdf->Ln();
//����ͼƬ
$pdf->Image('sunyang.jpg',20,15,30,30);
//���PDF
$pdf->Output();
?>
