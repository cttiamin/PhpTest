<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>��ҳ��ʾ</title>
<LINK href="css/css.css" type=text/css rel=stylesheet>
</head>
<body>
<div class="mainbox threadlist">
 <div class="headactions">
</div>
<h1>��ҳ��ʾ��Ч��</h1>
 <table class="portalbox"  cellpadding="0" cellspacing="1" >
 <thead class="separation">
<tr>
		<td>emp_id</td>	
		<td>emp_number</td>	
		<td>emp_name</td>
		<td>emp_age</td>
</tr>
	</thead>
	</div>
<?php
$db_host="localhost";//������
$db_user="root";//�û���
$db_psw="root";//����
$db_name="sunyang";//���ݿ���
$connection=mysql_connect($db_host,$db_user,$db_psw) or die("���ӷ�����ʧ��");
mysql_select_db($db_name,$connection) or die("ѡ�����ݿ�ʧ��");
$query1="select * from employee";
$result=mysql_query($query1) or die("��ѯ����ʧ��");//ִ�в�ѯ
$rowsPerPage=2;//ÿһҳ��ʾ������
$maxRowCount=mysql_num_rows($result);//������
//������ҳ��
if($maxRowCount%$rowsPerPage==0){
	$maxPage=(int)($maxRowCount/$rowsPerPage);
}else {
	$maxPage=(int)($maxRowCount/$rowsPerPage)+1;
}
//��ȡ��ǰҳ
if (isset($_GET['curPage'])){
	$page=$_GET['curPage'];
}else {
$page=1;	
}
$start=$rowsPerPage*($page-1);//��ʼ��¼��
$query2="select * from employee order by emp_id limit $start,$rowsPerPage ";
$result=mysql_query($query2) or die("��ѯ����ʧ��");//ִ�в�ѯ
//ͨ��whileѭ���������е�ֵ���
while($row =mysql_fetch_array($result) ){	
?>
<tr>
		<td><?php echo ($row['emp_id']);?></td>	
		<td><?php echo ($row["emp_number"]); ?></td>	
		<td><?php echo ($row["emp_name"])?></td>
		<td><?php echo ($row["emp_age"]);?></td>		
</tr>
<?php } ?>
 <tr>
 <td colspan="4" >
 <div class="pages">
<?php

//��ǰҳ���ǵ�һҳ
if ($page>1) {
	$prevPage=$page-1;//��һҳ
	echo "<a href='?curPage=$prevPage'>��һҳ</a>";
}
if($page<$maxPage){
	$nextPage=$page+1;//��һҳ
	echo "<a href='?curPage=$nextPage'>��һҳ</a>";	
}
mysql_free_result($result);
mysql_close($connection);
?>
</div>
 </td>
 </tr> 
</table>
</body>
</html>
