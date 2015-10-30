<?php
if(isset($_POST['email'])){
$rege="^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*$";
	if (ereg($rege,$_POST['email'])){
		echo "正确";
	}else{
		echo "Email 格式填写错误";
	}
}


?>
<form action="" name="checkform" method="post">
<input name="email" type="text"><br>
<input name="" type="submit"  value="提交">
</form>