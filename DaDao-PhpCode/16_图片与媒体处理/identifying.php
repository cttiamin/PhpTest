<?php
session_start();   //��ʼ�Ự
$width=40;
$height=16;
header("Content-type:image/gif");	//��������gifͼ��

$randval=randStr(4); //���ú���
$im=imagecreatetruecolor($width,$height); //����һ�����ɫ��ͼƬ

$r=array(255,215,235,195,175);	//����ֱ���������������
$g=array(255,215,235,195,175);
$b=array(255,215,235,195,175);

$key=rand(0,4);	//����0-4���������
$backColor=imagecolorallocate($im,$r[$key],$g[$key],$b[$key]);	//�ֱ���$r,$g,$b ��ѡȡ���,ѡȡ��ɫ
$pointColor=imagecolorallocate($im,255,170,255); //����ɫ

imagefill($im,0,0,$backColor);  //������֤�뱳����ɫ
$stringColor=imagecolorallocate($im,255,61,153);	//�����ı���ɫ

for($i=0;$i<=100;$i++){		//���������£Ч��
	$pointX=rand(2,$width-2);
	$pointY=rand(2,$height-2);
	imagesetpixel($im,pointX,$pointY,$pointColor);
}

imagestring($im,3,5,1,$randval,$stringColor); //������֤���ı�
$ImageFun='Imagegif';
$ImageFun($im);		//��ͼ����Դ���

imagedestroy($im);
$_SESSION['identifying']=$randval	//ѡ����ı����浽session��

function randStr($len=10){		//�������������֤��ĺ���
	$chars='ABCDEFGHRJKLMNOPQRSTUVWXYZasdfghjklqwertyuiopzxcvbnm01234456789';
	$string="";
	
	while(strlen($string)<$len){
		$string.=substr($chars,(rand()%strlen($chars)),1);
	}
	return $string;	
}

?>