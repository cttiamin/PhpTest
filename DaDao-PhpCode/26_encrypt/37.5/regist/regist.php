<?php
//�Ի���ʼ
session_start();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>�û�ע��ҳ��</title>
</head>
<body>
<!--���ύ���ű�����-->
<form action="" method="POST">
<table>
	<tr>
		<td>�û�����</td><td><input type="text" name="username" value='<?php echo $_POST['username']?>'/></td>
	</tr>
	<tr>
		<td>�û����룺</td><td><input type="password" name="password" value='<?php echo $_POST['password']?>'/></td>
	</tr>
</table>
<input type="submit" value="ע��"/>
</form>
<?php
if (isset($_POST['username'])&&isset($_POST['password'])) {
	$username=$_POST['username'];
	$password=$_POST['password'];
	//���ݿ�����
	$db_con=new mysqli('localhost','root','root','regist');
	//������ݿ�����ʧ�ܣ�����������ʾ
	if (mysqli_connect_errno()) {
		echo 'connect failed'.mysqli_connect_error();
		exit();
	}
	//ʹ���û��������ݿ��в���
	$query="select * from userinfo where username='$username'";
	$result=$db_con->query($query);
	//�ж��û����Ƿ��Ѿ������ݱ��д���
	if ($result->num_rows>0) {
		//�û����Ѿ����ڣ��޷�ע��
		echo "�û����Ѿ����ڣ�������ע��";
	}else {
		//���������Կ
		function randStr($len=10){
			$chars='abcdefghijklmnopqrstuvwxyz0123456789';
			$string="";

			while (strlen($string)<$len) {
				$string.=substr($chars,(rand()%strlen($chars)),1);
			}
			return $string;
		}
		do {
			$userkey=randStr(6);
			$queryRand="select * from userinfo where userkey=$userkey";
			$resultRand=$db_con->query($queryRand);
		}while ($resultRand->num_rows>0);
		//���û���Ϣ���������ݿ��У���ʹ��md5�㷨����������м���
		$insert="insert into userinfo (username,password ,userkey) values ('$username',md5('$password'),'$userkey')";
		if ($result=$db_con->query($insert)) {
			//��֪�û���Կ
			echo "�û�ע��ɹ�,�����ԿΪ:<BR>$userkey<BR>�����Ʊ���";?>
			<!--��¼ҳ������-->
			<a href="login.php">���������е�¼</a>
		<?php
		}else {
			echo "ע��ʧ��";
		}
	}
	//�ر����ݿ�����
	$db_con->close();
}
?>
</body>
</html>