<?php
//�Ի���ʼ
session_start();
echo "�û�ר��ҳ��<br>";
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>�û�ҳ��</title>
</head>
<body>

<?php
//���ܺ���
function decrypt($decrypt,$key){
	//�Լ�����Ϣ���н���
	$decoded=base64_decode($decrypt);
	//��ʼ������
	$iv=mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_DES,MCRYPT_MODE_ECB),MCRYPT_RAND);
	//����Ϣ���н���
	$decrypted=mcrypt_decrypt(MCRYPT_DES,$key,$decoded,MCRYPT_MODE_ECB,$iv);
	return $decrypted;
}
//����û��Ѿ���¼
if (isset($_SESSION['userinfo'])) {
	//ȡ���û�SESSION
	$u=$_SESSION['userinfo'];
	echo "���� ".$u['username']."�������±��ı���������ע��ʱ�õ�����Կ���Ķ�����Ϊ���ṩ�Ļ����ļ�<br>";
		?>
		<form action="" method="POST">
		��Կ��<input type="password" name="userkey"/><input type="submit" value="�ύ��Կ��Ϣ"/>
		</form>
		<a href="logout.php">�ǳ�</a><br>
		<?php
		//��ʾ���ܺ���ļ�����
		if(!empty($_REQUEST['userkey'])){
			echo "�����ļ����ݣ�".decrypt($_SESSION['sd'],$_POST['userkey'])."<BR>";
		}
}
else{ echo "��ҳ��ֻΪ��¼�û��ṩ��Ϣ<br>";
?>
<a href="login.php">��¼</a><br/>
<a href="regist.php">ע��</a>
<?php
}?>
</body>
</html>