<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>��ҳ��ʾ</title>
</head>

<body>
<table width="576" height="88" border="1" cellpadding="0" cellspacing="0" bordercolor="#0000FF">
  <tr>
    <td colspan="4" align="center">��ҳ��ʾ��Ч��</td>
  </tr>
  <tr>
    <td>emp_id</td>
    <td>emp_number</td>
    <td>emp_name</td>
    <td>emp_age</td>
  </tr>
  <?php
$db_host="localhost"; //������
$db_user="root";
$db_pws="123456";
$db_name="sunyang";
$connection=mysql_connect($db_host,$db_user,$db_pws)or die("���ӷ�����ʧ��");
mysql_select_db($db_name,$connection);
$query="select * from employee2";
$result=mysql_query($query)or die("��ѯʧ��");
//exit;
$rowsPerPage=2; //ÿһҳ������
$maxRowCount=mysql_num_rows($result);//������
//������ҳ��
if($maxRowCount&rowPerPage==0){
	$maxPage=(int)($maxRowCount/$rowsPerPage);
}else{
	$maxPage=(int)($maxRowCount/$rowsPerPage)+1;
}
if(isset($_GET['curPage'])){
	$page=$_GET['curPage'];
}else{
	$page=1;
}
$start=$rowsPerPage*($page-1);//��ʼ��¼��
//echo $rowsPerPage;
//echo $s
//exit;
$query2="select * from employee2 order by emp_id limit $start,$rowsPerPage";
$result=mysql_query($query2) or die ("��ѯ����ʧ��"); // ִ�в�ѯ
//ͨ��whileѭ���������е�ֵ���
while($row = mysql_fetch_array($result)){
  ?>
  <tr>
    <td><?php echo ($row['emp_id']);?></td>
    <td><?php echo ($row['emp_number']);?></td>
    <td><?php echo ($row['emp_name']);?></td>
    <td><?php echo ($row['emp_age']);?></td>
  </tr>
<?php } ?>
  <tr>
    <td colspan="4" align="right">
    <?php
    if($page>1){
    	$prevPage=$page-1; //��һҳ
    	echo "<a href='?curPage=$prevPage'>��һҳ</a>";
    }
    if($page<$maxPage){
    	$nextPage=$page+1;//��һҳ
    	echo "<a href='?curPage=$nextPage'>��һҳ</a>";
    }
    mysql_free_result($result);
    mysql_close($connection);
    ?>
    &nbsp;</td>
  </tr>
</table>
</body>
</html>
