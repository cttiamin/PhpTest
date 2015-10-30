<?php
include("src/jpgraph.php");
include("src/jpgraph_line.php");

$data=array(0=>-21,1=>-3,2=>12,3=>19,4=>22,5=>28,6=>30,7=>29,8=>23,9=>18,10=>5,11=>-10);
//�ڶ�������
$data2y=array(0=>3,1=>12,2=>17,3=>20,4=>25,5=>32,6=>41,7=>38,8=>30,9=>27,10=>15,11=>10);

$graph=new Graph(400,300);
//����X��Y����ʽ��ͬʱ����Y��������Сֵ
$graph->SetScale("textint",-30,50);
//�����Ҳ�Y����ʽ��ͬʱ�����������Сֵ
$graph->SetY2Scale("int",-30,50);

//����ͼ����ʽ
$graph->SetShadow();

$graph->img->SetMargin(40,50,20,70);
$graph->title->Set("Changchun and ChangSha Air temperature");//����

$lineplot=new LinePlot($data);
//����ڶ�������
$lineplot2y=new LinePlot($data2y);

$graph->Add($lineplot);

//���ڶ������߼���ͼ����
$graph->Addy2($lineplot2y);

//����������������
$graph->xaxis->title->Set("Month");
$graph->yaxis->title->Set("ChangChun");
$graph->y2axis->title->Set("ChangSha");

//��������������ɫ
$lineplot->SetColor("red");
$lineplot2y->setcolor("blue");
//������������ͼ��
$lineplot->SetLegend("ChangChun");
$lineplot2y->SetLegend("ChangSha");

//����ͼ����ʽ
$graph->legend->setlayout(LEGEND_HOR);
$graph->legend->Pos(0.45,0.95,"center","bottom");

//��ͼ�����
$graph->Stroke();
?>