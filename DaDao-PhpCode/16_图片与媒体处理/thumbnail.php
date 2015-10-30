<?php
function ImageResize($srcFile,$dstW,$dstH){
	//�õ�ͼ����Ϣ
	$image= getimagesize($srcFile);
	//�ж�ͼ������
	switch($image[2]){
		case 1:
			$im=imagecreatefromgif($srcFile);
			break;
		case 2:
			$im=imagecreatefromjpeg($srcFile);
			break;
		case 3:
			$im=imagecreatefrompng($srcFile);
			break;
	}
	//�õ�ͼ���С
	$srcW=imagesx($im);
	$srcH=imagesy($im);
	//�����±���ͼ��
	$tn=imagecreatetruecolor($dstW,$dstH);
	//����ԭͼ�񲢸ı��С
	imagecopyresampled($tn,$im,0,0,0,0,$dstW,$dstH,$srcW,$srcH);
	//��ͼ�����
	header("Content-type:image/jpeg");	
	imagejpeg($tn);
	
	//���ͼ����Դ
	imagedestroy($tn);
	imagedestroy($im);
}
imageResize("phpzjm.jpg",220,220);
?>