<?php
//�Ի���ʼ
session_start();
if (isset($_POST['username'])&&isset($_POST['password'])) {
	$username=$_POST['username'];
	$password=$_POST['password'];
	//���ݿ�����
	$db_con=new mysqli('localhost','root','root','regist');
	//���ݿ�����ʧ�ܣ����ش�����ʾ
	if (mysqli_connect_errno()) {
		echo 'connect failed'.mysqli_connect_error();
		exit();
	}
	//ͨ���û����;���md5�㷨���ܲ���������������ݿ��н��в�ѯ
	$query="select * from userinfo where username='$username' and password=md5('$password')";
	$result=$db_con->query($query);
	//�����ѯ�����������0�Ļ�˵����¼�ɹ�������ǰ�û���Ϣ�����ڶԻ�SESSION��
	if ($result->num_rows>0) {
		$_SESSION['userinfo']=$result->fetch_array();
	}
	//�ر����ݿ�����
	$db_con->close();
}

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>�û���¼</title>
</head>
<body>
<?php
//���ܺ���
function encrypt($encrypt,$key){
	//��ʼ������
	$iv=mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_DES,MCRYPT_MODE_ECB),MCRYPT_RAND);
	//����Ϣ���м���
	$passcrypt=mcrypt_encrypt(MCRYPT_DES,$key,$encrypt,MCRYPT_MODE_ECB,$iv);
	//�Լ�����Ϣ���б���
	$encode=base64_encode($passcrypt);
	return $encode;
}
//�ж��û���¼�ɹ�
if (isset($_SESSION['userinfo'])) {
	echo "�û��Ѿ���¼<br>";
	//����Ϣ���м��ܲ���,����������ϵ���Ϣ������Ϊsd��SESSION��
	$content="����Ƽ�������������ʵ����רҵ����Ի�";
	$_SESSION['sd']=encrypt($content,$_SESSION['userinfo']["userkey"]);
	echo '<a href="logout.php">�ǳ�</a>';
}
//��¼ʧ��
elseif (isset($username)) {
	echo "�û�����������󣬵�¼ʧ��";
}
//û�е�¼
else echo 'û�е�¼��';
?>
<form action="login.php" method="POST">
<table>
	<tr>
		<td>�û���</td><td><input type="text" name="username"/></td>
	</tr>
	<tr>
		<td>����</td><td><input type="password" name="password"/></td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit" value="��¼"/></td>
	</tr>
</table>
</form>
<!--�����û�������-->
<a href="member.php">�û���</a>
</body>
</html>