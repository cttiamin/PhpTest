<?php
$content=file_get_contents("file://C:/sunyang.txt");	//��ȡ�ļ�
if(strlen($content)>0){	//�����Ϊ��
	$file="C:/qq.txt";	
	$f=fopen("$file",'w');	//��
	fwrite($f,$content);	//д��
	fclose($f);	
	echo "�ɹ���ȡ�ļ�".filesize($file)."�ֽ�<br><br>";
//ʹ�ù�����ȥ����ҳ�е�HTML��ǩ
	$array=file("php://filter/read=string.tolower/resource=$file");
	foreach ($array as $num=>$content){
		if(strlen(trim($content))==0){
			continue;
		}
		printf('%s%d%s : %s<br>',"��",$num+1,"��",$content);
	}
}
?>
