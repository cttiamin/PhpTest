<?php
$db_host="localhost";//������
$db_user="root";//�û���
$db_psw="root";//����
$db_name="sunyang";//���ݿ���
$connection=mysql_connect($db_host,$db_user,$db_psw) or die("���ӷ�����ʧ��");
mysql_select_db($db_name,$connection) or die("ѡ�����ݿ�ʧ��");
$query="select * from employee";
$result=mysql_query($query) or die("��ѯʧ��");//ִ�в�ѯ
//�жϽ�������е���Ŀ�Ƿ������
if (mysql_num_rows($result)>0) {
//ͨ��whileѭ���������е�ֵ���
while($row =mysql_fetch_array($result) ){
echo ($row['emp_id']);
echo ($row["emp_number"]);
echo ($row["emp_name"]);
echo ($row["emp_age"]);
}
} else {
echo "δ��ѯ���κμ�¼";	
}
mysql_free_result($result);// �ͷŽ�����ڴ�
mysql_close($connection);
?>
