<?php
//连接数据库，获得数据
require_once('conndb.php');
$query="select * from sale";
$result=mysql_query($query) or die("查询用户失败");
mysql_close($connection);


//引入插件文件
require('chinese.php'); 
//实例化中文PDF对象
$pdf=new PDF_Chinese(); 
//设定文档中使用的中文字体
$pdf->AddGBFont('songti','宋体'); 
//创建一个新的PDF文档
$pdf->Open(); 
//增加一个新页面
$pdf->AddPage(); 
//设定字体
$pdf->SetFont('songti','B',15); 
//设定表格说明
$pdf->Cell(150,10,'XX销售公司年中营业额报表（2008）',0,1,'C');
$pdf->Ln(4);
$pdf->Cell(150,10,'单位：万元',0,1,'R');
//设定表头
$thead=array('月份','超市部','服装部','百货部','家居用品部');	
//输出表头
for($i=0;$i<count($thead);$i++)					
    $pdf->Cell(30,8,$thead[$i],1,0,'C');
$pdf->Ln();
//设定表内字体类型并显示数据
if (mysql_num_rows($result)>0) {
	$pdf->SetFont('songti','',10); 
	while($r =mysql_fetch_row($result) ){	
	$pdf->Cell(30,8,(int)$r[1],1,0,'C');
	$pdf->Cell(30,8,$r[2],1,0,'C');
	$pdf->Cell(30,8,$r[3],1,0,'C');
	$pdf->Cell(30,8,$r[4],1,0,'C');
	$pdf->Cell(30,8,$r[5],1,1,'C');
}
}
//输出
$pdf->Output();
?>
