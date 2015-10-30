<?php
//引入运行库
include("src/jpgraph.php");
include("src/jpgraph_pie.php");
include("src/jpgraph_pie3d.php");
//长春降水量数据
$data=array(0=>3.5,1=>4.6,2=>9.1,3=>21.9,4=>42.3,5=>90.7,6=>183.5,7=>127.5,8=>61.4,9=>33.5,10=>11.5,11=>4.4);

//定义背景图
$graph=new pieGraph(500,300);
//设置背景图
$graph->img->SetMargin(30,30,80,30);
$graph->title->Set("Year to precipitation");

//定义饼图
$pie3dplot=new piePlot3d($data);
//设置3D饼图图例
$pie3dplot->SetLegends(array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"));
//设置图例位置
$graph->legend->Pos(0.01,0.45,"left","center");
//将饼图加入背景图
$graph->Add($pie3dplot);
//将统计图输出
$graph->Stroke();
?>