<?php
//����FPDF���п�
define('FPDF_FONTPATH','font/');				
require_once('fpdf.php');
//��������ҳü��ҳ�ŵ���
class  PDF extends FPDF {
	//����ҳü
	function Header(){
		$this->SetFont('Arial','B',18);
		$this->Cell(200,10,'Welcome to Sunyang',0,0,'C');
		$this->Ln(20);
	}
	//����ҳ��
	function Footer(){
		$this->SetY(-10);
		$this->SetFont('Times','B',18);
		$this->Cell(200,10,'Current Page is '.$this->PageNo(),0,0,'C');
	}
		
}
//����PDF�ĵ�
$pdf =new PDF('p','mm','A4');
$pdf->Open();
//����ҳ��
$pdf->AddPage();
//ָ����������
$pdf->SetFont('Times','I',20);
//ָ��ҳü���������ݵľ���
$pdf->Ln(10);
//ҳ����ʾ��Ϣ
$str ="The Sunyang Team is an excellent team!";
$pdf->Cell(0,0,$str);
//���
$pdf->Output();
?>
