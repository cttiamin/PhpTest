<?php
$db_host="localhost";
$db_user="root";
$db_pass="root";
$db_name="sunyang";
$connection=mysql_connect($db_host,$db_user,$db_pass) or die("���ӷ�����ʧ��");
mysql_select_db($db_name) or die("�������ݿ�ʧ��");
$query="select * from sale";
$result=mysql_query($query) or die("��ѯ�û�ʧ��");
if (mysql_num_rows($result)>0) {
while($row =mysql_fetch_row($result) ){
echo ($row[0])."<br>";
echo ($row[1])."<br>";
echo ($row[2])."<br>";
echo ($row[3])."<br>";
echo ($row[4])."<br>";
echo ($row[5])."<br>";
}
}

mysql_query($query) or die("��ѯ�û�ʧ��");

mysql_free_result($result);
mysql_close($connection);
?>
