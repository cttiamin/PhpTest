<?php

if(!isset($_COOKIE['message'])){//�ж�Cookie�Ƿ����
	setcookie("message", "Cookie����ɹ�", time()+3600);//����Cookie�����ù���ʱ��Ϊһ��Сʱ
	echo "��ˢ��ҳ�棬��Cookie����";
}else{
	echo $_COOKIE['message'];//���Cookie�е���Ϣ
	echo"<a href='logout.php'>ɾ��Cookie</a>";
}
?>
