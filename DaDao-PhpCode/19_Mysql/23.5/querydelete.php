<?php
$db_host="localhost";//������
$db_user="root";//�û���
$db_psw="root";//����
$db_name="sunyang";//���ݿ���
$mysqli=new mysqli($db_host,$db_user,$db_psw,$db_name)  ;
$query="delete from employee where emp_id=2";
$result=$mysqli->query($query);
if ($result){
	echo "ɾ������ִ�гɹ�";
}else {
	echo "ɾ������ִ��ʧ��";
}
$mysqli->close();
?>
