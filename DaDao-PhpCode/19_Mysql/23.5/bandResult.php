<?php
$db_host="localhost";
$db_user="root";
$db_psw="root";
$db_name="sunyang";
$mysqli=new mysqli($db_host,$db_user,$db_psw,$db_name)  ;
$query="select * from employee";
$result=$mysqli->prepare($query);// ����Ԥ׼������ѯ
$result->execute();//ִ��Ԥ׼�����
$result->bind_result($id,$number,$name,$age);//�󶨽��
while ($result->fetch()) {
	 echo $id;
echo $number;
	 echo $name;
	 echo $age;
}
$result->close();//�ر�Ԥ׼�����
$mysqli->close();//�ر�����
?>
