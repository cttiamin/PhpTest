<?php
$file_name="access.log";	//������־�ļ�
$fp=fopen($file_name,"r");							//����־�ļ�
$count=0;									//�������������
$totle_size=0;									//�������������������
echo "<table border='1'><tr><td>����</td><td>����ip</td><td>���ݴ�����</td></tr>";
											//��ʾ��ͷ
while ($row=fgets($fp)) {							//���б�����־�ļ�
	$array=explode(",","$row");						//ͨ�����ŷָ���־�ļ�ÿһ��
	$date=substr($array[1],1,11);						//�����ڽ��нش�����
	$ip=$array[0];								//�õ�����IP
	$data_size=(int)$array[2];							//�õ��������ݴ�С
	echo "<tr><td>$date</td><td>$ip</td><td>$data_size</td></tr>";//�����ڣ�IP�������������
	$count++;									//�������Լ�
	$totle_size+=$data_size;							//�������������ۼ�
}
echo "</table><table border='1'><tr><td>�ܷ�����</td><td>����������</td></tr>
		<tr><td>$count</td><td>$totle_size</td></tr></table>";	//����ܷ�����������������
?>
