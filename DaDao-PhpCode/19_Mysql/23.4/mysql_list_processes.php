<?php
$db_host="localhost";//������
$db_user="root";//�û���
$db_psw="root";//����
$db_name="mysql";//���ݿ�
$connection=mysql_connect($db_host,$db_user,$db_psw)or die("���ӷ�����ʧ��"); 
mysql_select_db($db_name,$connection) or die("ѡ�����ݿ�ʧ��");
$result = mysql_list_processes($connection);//ȡ�ý�����Ϣ
while ($row = mysql_fetch_array($result)){
	echo $row["Id"]."<br>";//����ID
	echo $row["User"]."<br>";//�û�
	echo $row["Host"]."<br>";//����
    echo $row["db"]."<br>";//���ݿ�
    echo $row["Command"]."<br>";//ִ�е�����
    echo $row["Time"]."<br>"; //ִ�е�ʱ��
}
mysql_free_result ($result);
?>
