<?php
//�������п�
include("src/jpgraph.php");
include("src/jpgraph_bar.php");
//����ͼģ������
$data=array(0=>-21,1=>-3,2=>12,3=>19,4=>22,5=>28,6=>32,7=>29,8=>23,9=>18,10=>5,11=>-10);

//���������ñ���ͼ
$graph=new Graph(400,300);
$graph->SetScale("textlin");
$graph->img->SetMargin(30,30,80,30);
$graph->title->Set("Air temperature");

//��������ͼ
$barplot=new BarPlot($data);
//��������ͼͼ��
$barplot->SetLegend("Changchun");
//��ʾ����ͼ�������ݵ�ֵ
$barplot->value->show();
//���������ɫ
$barplot->setfillcolor("blue");
//���ñ߿���ɫ
$barplot->SetColor("red");

//������ͼ���뱳��ͼ
$graph->Add($barplot);
//������ͼ���
$graph->Stroke();
?>