<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GBK" />
<title>Ajax Hello sunyang</title>
<script language="JavaScript" type="text/javascript">
//����XMLHttpRequest�ĺ���
function createXMLHttp(){

	var request;
	//�õ���ǰ�����
	var browser=navigator.appName;
	//�����IE�����
	if(browser=="Microsoft Internet Explorer"){
		request=new ActiveXObject("Microsoft.XMLHttp");
		return request;
	}
	//��IE�����
	else{		
		request=new XMLHttpRequest();
		return request;
	}
}

//����XMLHttpRequest����
var xhr=createXMLHttp();

function HelloSunyang(){
	//��ת·��
	var url="hello.php?name=" + document.forms[0].name.value;
	//��ת
	xhr.open("GET",url,true);
	//���ûص�����ΪgetHello
	xhr.onreadystatechange=getHello;
	//��������
	xhr.send();
}

function getHello(){
	//�ж�XmlHttpRequest״̬
	if(xhr.readyState==4){
		//ȡֵ 	����
		//0		����һ��"δ��ʼ��"״̬����ʱ���Ѿ�����һ��XMLHttpRequest���󣬵��ǻ�û�г�ʼ����
		//1		����һ��"����"״̬����ʱ�������Ѿ�������XMLHttpRequest open()��������XMLHttpRequest�Ѿ�׼���ð�һ�������͵���������
		//2		����һ��"����"״̬����ʱ���Ѿ�ͨ��send()������һ�������͵��������ˣ����ǻ�û���յ�һ����Ӧ��
		//3		����һ��"���ڽ���"״̬����ʱ���Ѿ����յ�Http��Ӧͷ����Ϣ��������Ϣ�岿�ֻ�û����ȫ���ս�����
		//4		����һ��"�Ѽ���"״̬����ʱ����Ӧ�Ѿ�����ȫ���ա�
		//���ñ���helloStr��ֵΪ��Ӧ����ֵ
		var helloStr = xhr.responseText;
		//����Ӧ����ֵ��ʾ����Ϊhello��div��ǩ��
		document.getElementById("hello").innerHTML=helloStr;
	}
}

</script>
</head>
<body>
<table>
	<tr>
		<td>hello sunyang</td>
	</tr>
	<tr>
		<td>
		<form>
			your name: <input type="text" name="name" value=""/>
		</form>
		</td>
	</tr>
	<tr>
		<td>
		<!--���尴ť�������õ���˰�ť����HelloSunyang����-->
		<input type="button" name="" value="hello" onclick="HelloSunyang()">
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
