<?php
// mysqli ɾ��
$db_host='localhost';
$db_user='root';
$db_pws='123456';
$db_name='test';
$mysqli=new mysqli($db_host,$db_user,$db_pws,$db_name);
$query="delete from users where id=2";
$result=$mysqli->query($query);
if($result){
	echo "ɾ������ִ�гɹ�";
}else{
	echo "ɾ��ִ��ʧ��";
}
$mysqli->close();

?>