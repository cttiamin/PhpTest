<?php
//��һ������
//����FPDF���п�
define('FPDF_FONTPATH','font/');
require_once('fpdf.php');
//ʵ����FPDF����
$pdf=new FPDF('p','mm','A4');
//��ʼ����PDF
$pdf->Open();
//�½�һ��ҳ��
$pdf->AddPage();
//�趨PDF�ĵ��ı���
$pdf->SetTitle('Welcome to Sunyang');
//�趨�ĵ�������
$pdf->SetAuthor('Sunyang Team');
//�趨�ĵ�������
$pdf->SetSubject('Sunyang Test');
//��ؼ���
$pdf->SetKeywords('Declaration');
//�趨����
$pdf->SetFont('Times','I',15);
//����ĵ���Ϣ
$pdf->Cell(200,100,'Hello Sunyang!!!',0,0,'C');
//������֣���������
 $pdf->Output('information.pdf','s');

?>
