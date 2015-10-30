<?php
include("../src/jpgraph.php");
include("../src/jpgraph_bar.php");
include("../src/jpgraph_pie.php");
include("../src/jpgraph_pie3d.php");
include("../src/jpgraph_line.php");
//�������ݿ�����
$db=mysql_connect("localhost","root","123456");
//ѡ��Ҫ���������ݿ�
mysql_select_db("sanyang");
//�����ݱ���в�ѯ���õ���Ҫ�ļ�¼
$resultNum=mysql_query("select * from studentnumber where year>=".$_POST['start']." and year <=".$_POST['end']);
//����ѯ�����ΪX�����Y������ʾ������
$i=0;
while($it=mysql_fetch_array($resultNum)){
	$datay[$i]=(int)$it['STU_NUM'];
	$datax[$i]=(int)$it['YEAR'];
	$i++;
}
//�ж���������ͳ��ͼ
switch ($_POST['graphType']){
	//X-Y����ͼ
	case 1:
		$graph=new Graph(500,300);
		$graph->SetScale("intint",150,450,$_POST['start'],$_POST['end']);
		$graph->img->SetMargin(30,30,80,30);
		$graph->title->Set("���ѧ������");
		$graph->title->setFont(FF_SIMSUN,FS_BOLD);

		$lineplot=new LinePlot($datay,$datax);
		$lineplot->SetColor("red");
		$lineplot->SetLegend("number");

		$graph->Add($lineplot);
		break;
	//����ͼ
	case 2:
		$graph=new Graph(500,300);
		$graph->SetScale("intint",150,450,$_POST['start']-1,$_POST['end']+1);
		$graph->img->SetMargin(30,30,80,30);
		$graph->title->Set("���ѧ������");
		$graph->title->setFont(FF_SIMSUN,FS_BOLD);

		$barplot=new BarPlot($datay,$datax);
		$barplot->SetLegend("number");
		$barplot->value->show();
		$barplot->value->SetFormat('%1.0f');;
		$barplot->setfillcolor("blue");
		$barplot->SetColor("red");

		$graph->Add($barplot);
		break;
	//��ͼ
	case 3:
		$graph=new pieGraph(500,300);
		$graph->img->SetMargin(30,30,80,30);
		$graph->title->Set("���ѧ������");
		$graph->title->setFont(FF_SIMSUN,FS_BOLD);

		$pieplot=new piePlot($datay);
		$pieplot->SetLegends($datax);

		$graph->legend->Pos(0.01,0.45,"left","center");
		$graph->Add($pieplot);
		break;
	//3D��ͼ
	case 4:
		$graph=new pieGraph(500,300);
		$graph->img->SetMargin(30,30,80,30);
		$graph->title->Set("���ѧ������");
		$graph->title->setFont(FF_SIMSUN,FS_BOLD);

		$pie3dplot=new piePlot3d($datay);
		$pie3dplot->SetLegends($datax);

		$graph->legend->Pos(0.01,0.45,"left","center");
		$graph->Add($pie3dplot);
		break;
	default:echo "���ݴ��ݴ���";
}
//��ͳ��ͼ���
$graph->Stroke();
?>