<?php
//引入运行库
include("src/jpgraph.php");
include("src/jpgraph_line.php");
//创建背景图像
$graph=new Graph(400,300);
//设置刻度样式
$graph->SetScale("textint");//text代表,int代表y  ,x:lin(直线),text:文本,int:整数,log:对数，y:int,log,int,
//设置边界范围
$graph->img->SetMargin(30,30,80,10);//30:左,30:右，80：上,10底
//设置标题
$graph->title->Set("Year to air temperature");

//定义数组类型数据
$data=array(0=>-21,1=>-3,2=>12,3=>19,4=>22,5=>28,6=>32,7=>29,8=>23,9=>18,10=>5,11=>-10);
//定义曲线图
$lineplot=new LinePlot($data);
//改变曲线图颜色为红色
$lineplot->SetColor("red");
//设置曲线的图例
$lineplot->SetLegend("Temperature");	//新闻
//将曲线图加入背景图像中
$graph->Add($lineplot);
//将X-Y坐标图输出
$graph->Stroke();
?>