<?php
//�Ի���ʼ
session_start();
//����Ϊuserinfo��SESSION��ֵ��$oldUser
$oldUser=$_SESSION['userinfo'];

//�رնԻ�
session_destroy();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>�ǳ�</title>
</head>
<body>
<?php
//�ж��Ƿ��û��Ѿ���¼��������ʾ
if (!empty($oldUser)) {
	//���û�SESSION���
	unset($_SESSION['userinfo']);
	unset($_SESSION['sd']);
	echo "�ǳ�<br/>";
}else echo "�û���δ��¼�޷����еǳ�����<br/>";
?>
<a href="login.php">�ص���¼ҳ��</a><br/>
<a href="regist.php">�ص�ע��ҳ��</a> 
</body>
</html>