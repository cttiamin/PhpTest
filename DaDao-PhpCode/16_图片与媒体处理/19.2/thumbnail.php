<?php
function ImageResize($srcFile,$dstW,$dstH){
	//�õ�ͼ����Ϣ
	$image = GetImageSize($srcFile);
	//�ж�ͼ������
	switch ($image[2]) {
		case 1:
			$im = ImageCreateFromGIF($srcFile);
			break;
		case 2:
			$im = ImageCreateFromJpeg($srcFile);
			break;
		case 3:
			$im = ImageCreateFromPNG($srcFile);
			break;
	}
	//�õ�ͼ���С
	$srcW=ImageSX($im);
	$srcH=ImageSY($im);

	//�����±���ͼ��
	$tn = ImageCreateTrueColor($dstW,$dstH);
	//����ԭͼ�񲢸ı��С
	ImageCopyResampled($tn,$im,0,0,0,0,$dstW,$dstH,$srcW,$srcH);
	//��ͼ�����
	header("Content-type:image/jpeg");
	ImageJpeg($tn);

	//���ͼ����Դ
	ImageDestroy($tn);
	ImageDestroy($im);
}
ImageResize("sunyang42.gif",60,40);
?>

