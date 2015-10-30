<?php
function converter($pic,$toType){
	// �õ�ԭ�ļ�����
	$type=strrchr($pic,'.');
	// ��ԭ�ļ����ͽ����жϣ�ͬʱ��������ͼ�����$im
	switch ($type){
		// �Ƿ���JPEG����
		case '.jpeg':
		case '.jpg':
			$im=imagecreatefromjpeg($pic);
			break;
		// �Ƿ���GIF����
		case '.gif':
			$im=imagecreatefromgif($pic);
			break;
		// �Ƿ���PNG����
		case '.png':
			$im=imagecreatefrompng($pic);
			break;
		// �������������ͣ���ʾ������ʾ
		default:
			$im=false;
			echo "file can not loaded<BR>";
			exit;
	}
	// ��Ŀ�����ͽ����жϣ�ͬʱ��ԭͼ���������ת��
	switch ($toType){
		// �Ƿ���JPEG����
		case 'jpeg':
		case 'jpg':
			imagejpeg($im,$pic.'.jpeg');
			break;
		// �Ƿ���GIF����
		case 'gif':
			imagejpeg($im,$pic.'.gif');
			break;
		// �Ƿ���PNG����
		case 'png':
			imagejpeg($im,$pic.'.png');
			break;
		// �������������ͣ�����������ʾ
		default:
			echo "toType error<BR>";
			exit;
	}
	// ����ת���ɹ���ʾ
	echo "convert successfully<BR>";
}
//converter("a1.aaa","png");
//converter("sunyang42.gif","ddd");
converter("sunyang42.gif","jpeg");
?>