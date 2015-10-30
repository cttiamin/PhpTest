<?php
include("src/jpgraph.php");
include("src/jpgraph_line.php");

$data=array(0=>-21,1=>-3,2=>12,3=>19,4=>22,5=>28,6=>30,7=>29,8=>23,9=>18,10=>5,11=>-10);
$data2y=array(0=>3,1=>12,2=>17,3=>20,4=>25,5=>32,6=>41,7=>38,8=>30,9=>27,10=>15,11=>10);

$graph=new Graph(400,300);
$graph->SetScale("textint",-30,50);
$graph->SetY2Scale("int",-30,50);

$graph->SetShadow();

$graph->img->SetMargin(40,50,20,70);
//�������ı���
$graph->title->Set("��������ɳÿ��ƽ���¶�");

$lineplot=new LinePlot($data);
$lineplot2y=new LinePlot($data2y);

$graph->Add($lineplot);

$graph->Addy2($lineplot2y);

//��������������������
$graph->xaxis->title->Set("��");
$graph->yaxis->title->Set("����");
$graph->y2axis->title->Set("��ɳ");

$lineplot->SetColor("red");
$lineplot2y->setcolor("blue");
$lineplot->SetLegend("Changchun");
$lineplot2y->SetLegend("Changsha");

$graph->legend->setlayout(LEGEND_HOR);
$graph->legend->Pos(0.45,0.95,"center","bottom");

//������������
$graph->title->setFont(FF_SIMSUN,FS_BOLD);
$graph->yaxis->title->setfont(FF_SIMSUN,FS_BOLD);
$graph->y2axis->title->setfont(FF_SIMSUN,FS_BOLD);
$graph->xaxis->title->setfont(FF_SIMSUN,FS_BOLD);

$graph->Stroke();
?>