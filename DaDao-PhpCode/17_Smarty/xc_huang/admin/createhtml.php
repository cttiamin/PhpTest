<?php
$url="http://localhost/about.php";
$fp=fopen($url,"r");
$str=file_get_contents($url);
fclose($fp);
//echo $str;

$abc=fopen('../html/about.html',"w");//��д��ķ�ʽ��Ҫ���ɵ��ļ�(��ǰ����ļ��ǿյ�),�����wΪСд��ĸ
fwrite($abc,$str);//�Ѹղ��滻������д���ļ�
fclose($abc);
?>