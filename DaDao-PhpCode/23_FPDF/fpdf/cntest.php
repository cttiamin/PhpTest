<?php 
//�������ļ�
require('chinese.php'); 
//���延ӭ��Ϣ
$str ="��ӭ�������";
//ʵ��������PDF����
$pdf=new PDF_Chinese(); 
//�趨�ĵ���ʹ�õ���������
$pdf->AddGBFont('songti','����'); 
//����һ���µ�PDF�ĵ�
$pdf->Open(); 
//����һ����ҳ��
$pdf->AddPage(); 
//�趨����
$pdf->SetFont('songti','B',40); 
//�������
$pdf->Write(10,$str); 

//���PDF
$pdf->Output(); 
?>