<?php
// mysqli 删除
$db_host='localhost';
$db_user='root';
$db_pws='123456';
$db_name='test';
$mysqli=new mysqli($db_host,$db_user,$db_pws,$db_name);
$query="delete from users where id=2";
$result=$mysqli->query($query);
if($result){
	echo "删除操作执行成功";
}else{
	echo "删除执行失败";
}
$mysqli->close();

?>