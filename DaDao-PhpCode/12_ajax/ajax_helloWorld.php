<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>helloWorld ajax</title>
<script language="javascript" type="text/javascript">
//����XMLHttpRequest�ĺ���
	function createXMLHttp(){
	var request; 
	var browser=navigator.appName; //�õ������
	//�����IE�����
	if(browser=="Microsoft Internet Explorer"){
		request=new ActiveXObject("Microsoft.XMLHTTP");
		return.request;
	}//��IE����� 
	else{
	request=new XMLHttpRequest();
	return request;
	}
}
	
	//����XMLHttpRequest
	var xhr=createXMLHttp();
	function HelloSunyang(){
	//��ת·��
	var url="hello.php?name="+document.forms[0].name.value;  //�ı����е�ֵ
	//��ת
	xhr.open("GET",url,ture);	//��������ʽΪget,true���Ƿ�Ϊ�첽����
	//���ûص��ûغ���ΪgetHello
	xhr.onreadystatechange=getHello;
	//��������
	xhr.send();
}
	function getHello(){
		//�ж�XmlHttpRequest״̬
		if(xhr.readyState==4){
//ȡֵ  ����
//0 ����һ�֡�δ��ʼ����״̬����ʱ���Ѿ�����һ��XMLHttpRequest���󣬵��ǻ�û�г�ʼ��
//1 ����һ�֡����͡�״̬����ʱ�������Ѿ�������XMLHttpRequest open()��������XMLHttpRequest�Ѿ�׼����һ�������͵�
//2 ����һ�֡����͡�״̬����ʱ���Ѿ�ͨ��send()������һ�������ͷ������˵��ǻ�û���յ�һ����Ӧ
//3 ����һ�֡����ڽ��ա�״̬����ʱ���Ѿ����յ�Http��Ӧͷ����Ϣ��������Ϣ���ֻ�û����ȫ���ս��
//4 ����һ��"�Ѽ���"״̬����ʱ����Ӧ�Ѿ�����ȫ����
		//���ñ���htlloStr��ֵΪ��Ӧ����ֵ
		var helloStr=xhr.responseText;
		//����Ӧ����ֵ��ʾ����Ϊhello��div��ǩ��
		document.getElement("hello").innerHTML=helloStr;
		}
	}
</script>
</head>
<body>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td>hello ajax</td>
  </tr>
  <tr>
    <td>
	<form method="get">
	your name:
	<input type="text" name="name" value=""/>
	</form>
	</td>
  </tr>
  <tr>
    <td>
	<!--���Ȱ�Ť,�����õ����ť����HelloSunyang����-->
	<input name="" value="hello" type="button" onclick="HelloSunyang()"/>
	</td>
  </tr>
  <tr>
    <td>
	<!--���շ������ݵ�div��ǩ-->
	<div id="hello"></div>
	</td>
  </tr>
</table>

	
</body>
</html>
