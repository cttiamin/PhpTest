<?php
//引入运行库
include("src/jpgraph.php");
include("src/jpgraph_bar.php");
//柱形图模拟数据
$data=array(0=>-21,1=>-3,2=>12,3=>19,4=>22,5=>28,6=>32,7=>29,8=>23,9=>18,10=>5,11=>-10);

//创建和设置背景图
$graph=new Graph(400,300);
$graph->SetScale("textlin");
$graph->img->SetMargin(30,30,80,30);
$graph->title->Set("Air temperature");

//创建柱形图
$barplot=new BarPlot($data);
//设置柱形图图例
$barplot->SetLegend("Changchun");
//显示柱形图代表数据的值
$barplot->value->show();
//设置填充颜色
$barplot->setfillcolor("blue");
//设置边框颜色
$barplot->SetColor("red");

//将柱形图加入背景图
$graph->Add($barplot);
//将柱形图输出
$graph->Stroke();
?>