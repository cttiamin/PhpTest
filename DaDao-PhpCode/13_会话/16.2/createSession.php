<?php
session_start();	//开
$_SESSION['pages']=1; //在Sesssion中存储数据
?>
<html>
<body>
<?php
echo "currentPage=".$_SESSION['pages']; //取回Session中存储的数据
?>
</body>
</html>