<?php
//��xajax�ĺ������ļ������ڽű���
require_once('./include/xajax_core/xajax.inc.php');
//����xajax���ʵ������
$xajax = new xajax();

//����xajax��javascript·��
$xajax->configure('javascript URI', './include/');//configure()��ָ����������xajax��js��·��,javascript URI:Ϊָ�������������,/include/Ϊ·����

//����xajax����
function helloWorld($user)
{
	$text = "Hello ".$user;
	//����xajax��Ӧ
	$objResponse = new xajaxResponse();
	//������Ӧ����λ��
	$objResponse->assign('hello', 'innerHTML', $text);
	//����Ӧ����
	return $objResponse;
}
//��helloWorld��������ע��
$xajax->registerFunction("helloWorld");
//����xajax����ͬʱ�õ���Ӧ
$xajax->processRequest();
echo '<?xml version="1.0" encoding="UTF-8"?>';	 //�������Ҫ�İ汾��Ϣ
?>
<html>
<head>
	<title>xajax hello world</title>
<?php
//��ʼ��xajax
$xajax->printJavascript();	//����ǰ����ajax���ɵ�javascript����,����printJavasecipt()����ת��javascript����
?>
<script type="text/javascript">
//���ڵ���xajax������JavaScript
function sayhello()
{
	//�õ�����username�ı����ֵ
	var u=document.forms[0].username.value;
	//����xajax����helloWorld��ע�⣬��������ˡ�xajax_��ǰ׺
	xajax_helloWorld(u);
	return false;
}
</script>
</head>
<body>
<div id="hello"></div>
<br/>
<form>
<input type="text" name="username"/>
<button onclick="sayhello()">Hello</button>
</form>
</body>
</html>