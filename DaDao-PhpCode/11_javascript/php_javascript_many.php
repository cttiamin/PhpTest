<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GBK" />
<title>PHP中使用JavaScript</title>
<?php
echo <<<js
<script type="text/javascript">
function testThis() {
	alert(this.button.ele1);
	return false;
}
</script>
js;
?>
</head>
<body>
<div align="center">
<input type="button" value="点击这里给出提示" name="button" onclick="testThis()" ele1="三扬科技"/>
</div>
</body>
</html>