<?php
$db_host="localhost"; //������
$db_user="root";
$db_pws="123456";
$db_name="sunyang";
$connection=mysql_connect($db_host,$db_user,$db_pws)or die("���ӷ�����ʧ��");
mysql_select_db($db_name,$connection);
$query="select * from employee2";
$result=mysql_query($query)or die("��ѯʧ��");
//�жϽ�����������Ƿ����0
if(mysql_num_rows($result)>0){
	//ͨ��whileѭ���������е�ֵ���
	while($row=mysql_fetch_array($result)){
		echo ($row['emp_id'])."<br>";
		echo ($row['emp_name'])."<br>";
		echo ($row['emp_number'])."<br>";
		echo ($row['emp_age'])."<br>";
	}
}else{
	echo "δ��ѯ���κμ�¼";
}
mysql_free_result($result);//�ͷŽ�����ڵĿռ�
mysql_close($connection);



?>