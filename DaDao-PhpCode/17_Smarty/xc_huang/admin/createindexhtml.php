<?php
$url="http://localhost/default.php";
//echo $url;
//exit();
$fp=fopen($url,"r");//��ֻ����ʽ����Զ��ҳ��
$str=file_get_contents($url);//��ȡҳ�����ݲ��Ҹ�ֵ������$str;
fclose($fp);

//echo $str;
//exit();
$abc=fopen("../index.html","w");//�ÿ�д��ķ�ʽ��һ���ļ�(����ļ�����,���һ�����ļ�)
fwrite($abc,$str);//�ѸղŶ�ȡ��������д���ļ�
fclose($abc);
echo "<script language='javascript'>";
echo "document.write('��ҳ���ɳɹ�');";
echo "</script>";
?>