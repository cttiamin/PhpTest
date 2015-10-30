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
//�趨���˵��
$pdf->Cell(150,10,'The Information Of Books',0,1,'C');
$pdf->Ln(5);
//�趨��ͷ
$thead=array('Names','Author','Price','Number','Publisher');		
//��д������Ϣ
$info=array();								
$info[0] = array('Struts2','Andy','80.00','3000','NO1');
$info[1] = array('Groovy','Job','70.00','3000','NO2');
$info[2] = array('C++','Bob','60.00','3000','NO3');
$info[3] = array('C','Terry','59.00','3000','NO3');
//�趨��ͷ��������					
$pdf->SetFont('Times','B',15);
//�����ͷ
for($i=0;$i<count($thead);$i++)					
    $pdf->Cell(30,8,$thead[$i],1,0,'C');
$pdf->Ln();
//�趨�����������Ͳ���ʾ����
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
//���
$pdf->Output();
?>
