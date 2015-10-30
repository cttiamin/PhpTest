<?php
/*  */
include '088_pic.php';
$code = new checkcode();
$code->bg_color = "#CCE8CF";
$code->font_color = "#305887";
$code->getimage();
//验证码存入session['code']
session_start();
$_SESSION['code'] = $code->getcode();
echo $_SESSION['code'];

?>

<?php
/* HTML 提交页面*/
$p_code  = strtoupper($_POST['code']);
session_start();
if($p_code == $_SESSION['code']){
	echo "验证码输入成功";
}else{
	echo "<script>alert('验证码错误');history.go(-1);</script>";
	exit();
}

echo "<div style='border:solid 2px #dcdcdc;background:yellow;position:absolute;left:80px;left:200px;'>登录成功</div>";
?>
