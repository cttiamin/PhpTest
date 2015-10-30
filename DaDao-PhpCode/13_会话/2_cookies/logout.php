<?php
setcookie("message","", time()+3600);//将Cookie的值设置为空
echo $_COOKIE['message'];//刷新页面，若没有输出信息，说明删除成功
echo "Cookie已成功删除";	
?>
