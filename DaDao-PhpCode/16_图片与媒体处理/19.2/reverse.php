<?php
//�õ�ԭͼ��
$im = imagecreatefromjpeg('a1.jpg');

//�½���ԭͼ��ȴ�ı���ͼ��
$ri = imagecreatetruecolor(imagesx($im),imagesy($im));

//ѭ������ԭͼ����ÿ����
for($i=0;$i<imagesy($im);$i++){
	for($j=0;$j<imagesx($im);$j++){
		
		//����ǰ����ɫȡ��
		$srcColor = imagecolorat($im, $j, $i);
		
		//����ɫ���з�ɫ����
		$dstColor=(~$srcColor) & 0xFFFFFF;
		
		//ʹ�÷�ɫ�����ɫ�Ե�ǰ����ɫ
		imagesetpixel($ri,$j,$i,$dstColor);
	}
}

//��������ͼƬ�����ҳ��
header('Content-type: image/jpeg');
imagejpeg($ri);

//���ͼ����Դ
imagedestroy($ri);
imagedestroy($im);
?>
