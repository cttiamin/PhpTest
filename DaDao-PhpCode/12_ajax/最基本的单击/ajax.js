//Xmlhttp = new XmlHTTPRequest();//��XHR�������ʵ������������Ϊ�����֮����IEռ��������λ�ֲ�֧�֣�������Ҫ����һ��ѡ���Ե���䣬���ж�ʲô������������ȥʵ�������ǲ�ͬ�Ķ�����˴˾仹��ע�ͣ�

var xmlHttp;	//��������һ���ֲ�����
function S_XMLHttpRequest() {//�趨����
	if(window.ActiveXObject) {//�����ж�������Ƿ�֧�ֿؼ���ʽ���о�˵����IE���ĵ������
		xmlHttp = new ActiveXObject('Microsoft.XMLHTTP');//��ʵ������ĵ�SHR�Ĺ���
	} else if(window.XMLHttpRequest) {			//�����ʹ������������SHR��ʵ����SHR����
		xmlHttp = new XMLHttpRequest();
	}
}

function funphp100(url){
		S_XMLHttpRequest();		//������ķ������ý���
		xmlHttp.open("GET","for.php?id="+url,true);	//�ȴ����ӣ�
		xmlHttp.onreadystatechange= byphp;//׼��������Ҫִ�У���Ϊ����Ǻܸ��ӵģ�������ǿ��Զ���һ����������������ͽ���byphp�ɣ�
		xmlHttp.send(null);//���ͣ�����ʹ��null�ǲ���������
	}


function byphp(){
	var byphp100 = xmlHttp.responseText;
	document.getElementById('php100').innerHTML = byphp100;
	//"getElementById"��������һ��DOM������ģ�ͨ��������������ǵ����ݷ��͵���������е�һ��ָ����λ��,��HTML����ʽ��Ҳ����text����ʽ���ͣ�����byphp100�������
}
