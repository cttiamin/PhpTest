<?php
//�������ݿ⣬�������
require_once('conndb.php');
$query="select * from sale";
$result=mysql_query($query) or die("��ѯ�û�ʧ��");
mysql_close($connection);


//�������ļ�
require('chinese.php'); 
//ʵ��������PDF����
$pdf=new PDF_Chinese(); 
//�趨�ĵ���ʹ�õ���������
$pdf->AddGBFont('songti','����'); 
//����һ���µ�PDF�ĵ�
$pdf->Open(); 
//����һ����ҳ��
$pdf->AddPage(); 
//�趨����
$pdf->SetFont('songti','B',15); 
//�趨���˵��
$pdf->Cell(150,10,'XX���۹�˾����Ӫҵ���2008��',0,1,'C');
$pdf->Ln(4);
$pdf->Cell(150,10,'��λ����Ԫ',0,1,'R');
//�趨��ͷ
$thead=array('�·�','���в�','��װ��','�ٻ���','�Ҿ���Ʒ��');	
//�����ͷ
for($i=0;$i<count($thead);$i++)					
    $pdf->Cell(30,8,$thead[$i],1,0,'C');
$pdf->Ln();
//�趨�����������Ͳ���ʾ����
if (mysql_num_rows($result)>0) {
	$pdf->SetFont('songti','',10); 
	while($r =mysql_fetch_row($result) ){	
	$pdf->Cell(30,8,(int)$r[1],1,0,'C');
	$pdf->Cell(30,8,$r[2],1,0,'C');
	$pdf->Cell(30,8,$r[3],1,0,'C');
	$pdf->Cell(30,8,$r[4],1,0,'C');
	$pdf->Cell(30,8,$r[5],1,1,'C');
}
}
//���
$pdf->Output();
?>
