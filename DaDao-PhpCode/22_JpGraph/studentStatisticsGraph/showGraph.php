<?php
include("../src/jpgraph.php");
include("../src/jpgraph_bar.php");
include("../src/jpgraph_pie.php");
include("../src/jpgraph_pie3d.php");
include("../src/jpgraph_line.php");
//创建数据库连接
$db=mysql_connect("localhost","root","123456");
//选择要操作的数据库
mysql_select_db("sanyang");
//对数据表进行查询，得到需要的记录
$resultNum=mysql_query("select * from studentnumber where year>=".$_POST['start']." and year <=".$_POST['end']);
//将查询结果设为X坐标和Y坐标显示的数据
$i=0;
while($it=mysql_fetch_array($resultNum)){
	$datay[$i]=(int)$it['STU_NUM'];
	$datax[$i]=(int)$it['YEAR'];
	$i++;
}
//判断生成哪种统计图
switch ($_POST['graphType']){
	//X-Y坐标图
	case 1:
		$graph=new Graph(500,300);
		$graph->SetScale("intint",150,450,$_POST['start'],$_POST['end']);
		$graph->img->SetMargin(30,30,80,30);
		$graph->title->Set("年度学生人数");
		$graph->title->setFont(FF_SIMSUN,FS_BOLD);

		$lineplot=new LinePlot($datay,$datax);
		$lineplot->SetColor("red");
		$lineplot->SetLegend("number");

		$graph->Add($lineplot);
		break;
	//柱形图
	case 2:
		$graph=new Graph(500,300);
		$graph->SetScale("intint",150,450,$_POST['start']-1,$_POST['end']+1);
		$graph->img->SetMargin(30,30,80,30);
		$graph->title->Set("年度学生人数");
		$graph->title->setFont(FF_SIMSUN,FS_BOLD);

		$barplot=new BarPlot($datay,$datax);
		$barplot->SetLegend("number");
		$barplot->value->show();
		$barplot->value->SetFormat('%1.0f');;
		$barplot->setfillcolor("blue");
		$barplot->SetColor("red");

		$graph->Add($barplot);
		break;
	//饼图
	case 3:
		$graph=new pieGraph(500,300);
		$graph->img->SetMargin(30,30,80,30);
		$graph->title->Set("年度学生人数");
		$graph->title->setFont(FF_SIMSUN,FS_BOLD);

		$pieplot=new piePlot($datay);
		$pieplot->SetLegends($datax);

		$graph->legend->Pos(0.01,0.45,"left","center");
		$graph->Add($pieplot);
		break;
	//3D饼图
	case 4:
		$graph=new pieGraph(500,300);
		$graph->img->SetMargin(30,30,80,30);
		$graph->title->Set("年度学生人数");
		$graph->title->setFont(FF_SIMSUN,FS_BOLD);

		$pie3dplot=new piePlot3d($datay);
		$pie3dplot->SetLegends($datax);

		$graph->legend->Pos(0.01,0.45,"left","center");
		$graph->Add($pie3dplot);
		break;
	default:echo "数据传递错误";
}
//将统计图输出
$graph->Stroke();
?>