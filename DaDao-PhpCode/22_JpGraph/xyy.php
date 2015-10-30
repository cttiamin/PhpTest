<?php
include("src/jpgraph.php");
include("src/jpgraph_line.php");

$data=array(0=>-21,1=>-3,2=>12,3=>19,4=>22,5=>28,6=>30,7=>29,8=>23,9=>18,10=>5,11=>-10);
//第二条数据
$data2y=array(0=>3,1=>12,2=>17,3=>20,4=>25,5=>32,6=>41,7=>38,8=>30,9=>27,10=>15,11=>10);

$graph=new Graph(400,300);
//设置X和Y轴样式，同时设置Y轴的最大最小值
$graph->SetScale("textint",-30,50);
//设置右侧Y轴样式，同时设置其最大最小值
$graph->SetY2Scale("int",-30,50);

//设置图像样式
$graph->SetShadow();

$graph->img->SetMargin(40,50,20,70);
$graph->title->Set("Changchun and ChangSha Air temperature");//标题

$lineplot=new LinePlot($data);
//定义第二条曲线
$lineplot2y=new LinePlot($data2y);

$graph->Add($lineplot);

//将第二条曲线加入图像中
$graph->Addy2($lineplot2y);

//设置三坐标轴名称
$graph->xaxis->title->Set("Month");
$graph->yaxis->title->Set("ChangChun");
$graph->y2axis->title->Set("ChangSha");

//设置两条曲线颜色
$lineplot->SetColor("red");
$lineplot2y->setcolor("blue");
//设置两条曲线图例
$lineplot->SetLegend("ChangChun");
$lineplot2y->SetLegend("ChangSha");

//设置图例样式
$graph->legend->setlayout(LEGEND_HOR);
$graph->legend->Pos(0.45,0.95,"center","bottom");

//将图像输出
$graph->Stroke();
?>