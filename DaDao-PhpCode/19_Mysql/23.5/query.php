<?php
$db_host="localhost";//������
$db_user="root";//�û���
$db_psw="root";//����
$db_name="sunyang";//���ݿ���
$mysqli=new mysqli($db_host,$db_user,$db_psw,$db_name) ;//ʵ����mysqli
$query="select * from employee";
$result=$mysqli->query($query);
if ($result) {
	if($result->num_rows>0){ //�жϽ�������е���Ŀ�Ƿ����0
	while($row =$result->fetch_array() ){//ѭ�����������еļ�¼
	echo ($row[0])."<br>";
    echo ($row[1])."<br>";
    echo ($row[2])."<br>";	
    echo ($row[3])."<br>";
    echo "<hr>";
	}	
}
}else {
	echo "��ѯʧ��";
}
$result->free();
$mysqli->close();
?>
