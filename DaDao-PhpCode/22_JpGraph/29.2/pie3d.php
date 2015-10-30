<?php
//�������п�
include("src/jpgraph.php");
include("src/jpgraph_pie.php");
include("src/jpgraph_pie3d.php");
//������ˮ������
$data=array(0=>3.5,1=>4.6,2=>9.1,3=>21.9,4=>42.3,5=>90.7,6=>183.5,7=>127.5,8=>61.4,9=>33.5,10=>11.5,11=>4.4);

//���屳��ͼ
$graph=new pieGraph(500,300);
//���ñ���ͼ
$graph->img->SetMargin(30,30,80,30);
$graph->title->Set("Year to precipitation");

//�����ͼ
$pie3dplot=new piePlot3d($data);
//����3D��ͼͼ��
$pie3dplot->SetLegends(array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"));
//����ͼ��λ��
$graph->legend->Pos(0.01,0.45,"left","center");
//����ͼ���뱳��ͼ
$graph->Add($pie3dplot);
//��ͳ��ͼ���
$graph->Stroke();
?>