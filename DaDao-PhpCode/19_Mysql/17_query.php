<?php
//mysqi ��ѯ

$db_host='localhost';
$db_user='root';
$db_pws='123456';
$db_name='test';
$mysqli=new mysqli($db_host,$db_user,$db_pws,$db_name);
$query="select * from users";
$result=$mysqli->query($query);
if($result){
	if($result->num_rows>0){	//�жϽ�������е���Ŀ�Ƿ����0
		while($row =$result->fetch_array()){	//ѭ�����������еļ�¼
			echo ($row[0])."<br>";
		echo ($row[1])."<br>";
		echo ($row[2])."<br>";
		echo ($row[3])."<br>";
		echo "<hr>";
		}
	}
}else{
	echo "��ѯʧ��";
}
$result->free();	//�ͷŽ�����е��ڴ�
$mysqli->close();	//�ر����ݿ������

?>