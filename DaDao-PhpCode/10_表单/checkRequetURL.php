<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
	$requetURL=$_SERVER["HTTP_REFERER"];//�����url��ַ
	$serName=$_SERVER["SERVER_NAME"];//������
	$path=$_SERVER["PHP_SELF"];//��ǰ�ű��ڷ������е�·��
	$serAddress="http://".$serName.$path;//�����������ַ����"http://"+������+��ǰ�ű������·		����ɣ�
	echo "������Դ��".$requetURL."<br>";
	echo "������ַ��".$serAddress."<br>";
		if(strcmp($requetURL,$serAddress)==0){
		echo "������Դ�Ϸ�"."<br>";
		}else{
		echo "������Դ�Ƿ�";
		}
}
 ?>
<form action="" method="POST">
<input type="submit" name="submit" value="submit">
</form>
