<?php
	//ÅÐ¶Ïä¯ÀÀÆ÷ÊÇ·ñÖ§³ÖCookie
$test="";
if(isset($_GET['test'])){
	$test=$_GET['test'];
}
if ($test!="test") {
	setcookie('iscookie','checkCookie',time()+60);//ÉèÖÃCookie
	$url='http://';
	$url.=$_SERVER['SERVER_NAME'];
        $url.=$_SERVER['PHP_SELF'];
        $url.='?test=test';
        header('Location:'.$url);
}else {
	if (!empty($_COOKIE['iscookie'])){
		echo "ä¯ÀÀÆ÷Ö§³ÖCookie";
	}else {
		echo "ä¯ÀÀÆ÷½ûÓÃÁËCookie";
	}
}
?>
