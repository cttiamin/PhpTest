<?php
session_start();	//��
$_SESSION['pages']=1; //��Sesssion�д洢����
?>
<html>
<body>
<?php
echo "currentPage=".$_SESSION['pages']; //ȡ��Session�д洢������
?>
</body>
</html>