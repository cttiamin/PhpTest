<?php
//�������п�
include("src/jpgraph.php");
include("src/jpgraph_line.php");
//��������ͼ��
$graph=new Graph(400,300);
//���ÿ̶���ʽ
$graph->SetScale("textint");//text����,int����y  ,x:lin(ֱ��),text:�ı�,int:����,log:������y:int,log,int,
//���ñ߽緶Χ
$graph->img->SetMargin(30,30,80,10);//30:��,30:�ң�80����,10��
//���ñ���
$graph->title->Set("Year to air temperature");

//����������������
$data=array(0=>-21,1=>-3,2=>12,3=>19,4=>22,5=>28,6=>32,7=>29,8=>23,9=>18,10=>5,11=>-10);
//��������ͼ
$lineplot=new LinePlot($data);
//�ı�����ͼ��ɫΪ��ɫ
$lineplot->SetColor("red");
//�������ߵ�ͼ��
$lineplot->SetLegend("Temperature");	//����
//������ͼ���뱳��ͼ����
$graph->Add($lineplot);
//��X-Y����ͼ���
$graph->Stroke();
?>