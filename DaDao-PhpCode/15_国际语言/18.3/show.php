<?php
$lang="";
switch ($_SERVER['HTTP_ACCEPT_LANGUAGE']){
	case "zh-cn":
		$lang="ch";
		break;
	default:
		$lang="us";
		break;
}
include("$lang.php");
?>
<html>
<head>
	<title><?php echo $title;?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $charset;?>">
</head>
<body>
	<form action="" method="POST">
		<?php echo $username;?>: <input type="text" name="username"/><br>
		<?php echo $password;?>: <input type="password" name="password"/><br>
		<input type="submit" value="<?php echo $submit;?>"/>
	</form>
</body>
</html>
