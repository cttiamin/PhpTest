<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GBK" />
<title>PHP��ʹ��JavaScript</title>
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
<input type="button" value="������������ʾ" name="button" onclick="testThis()" ele1="����Ƽ�"/>
</div>
</body>
</html>