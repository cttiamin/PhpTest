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
//设置中文标题
$graph->title->Set("长春，长沙每月平均温度");

$lineplot=new LinePlot($data);
$lineplot2y=new LinePlot($data2y);

$graph->Add($lineplot);

$graph->Addy2($lineplot2y);

//设置三坐标轴中文名称
$graph->xaxis->title->Set("月");
$graph->yaxis->title->Set("长春");
$graph->y2axis->title->Set("长沙");

$lineplot->SetColor("red");
$lineplot2y->setcolor("blue");
$lineplot->SetLegend("Changchun");
$lineplot2y->SetLegend("Changsha");

$graph->legend->setlayout(LEGEND_HOR);
$graph->legend->Pos(0.45,0.95,"center","bottom");

//设置中文字体
$graph->title->setFont(FF_SIMSUN,FS_BOLD);
$graph->yaxis->title->setfont(FF_SIMSUN,FS_BOLD);
$graph->y2axis->title->setfont(FF_SIMSUN,FS_BOLD);
$graph->xaxis->title->setfont(FF_SIMSUN,FS_BOLD);

$graph->Stroke();
?>