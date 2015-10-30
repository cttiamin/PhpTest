<?php
	function converter($pic,$toType){
	
	//�õ�ԭ�ļ�
	$type=strrchr($pic,'.'); 
	
	//��ԭ�ļ����ͽ����жϣ�ͬʱ��������ͼ�����$im
	switch($type){
		//�Ƿ���JPEG����
		case '.jpeg':
		case '.jpg':
			$im=imagecreatefromjpeg($pic); //�������
			break;
		case '.gif':
			$im=imagecreatefromgif($pic);
			break;
		case '.png';
			$im=imagecreatefrompng($pic);
			break;
		default:
			$im=false;
			echo "file can not loaded<br>";
			exit;
	}
	
	//Ŀ�����ͽ����жϣ�ͬʱ��ԭͼ���������ת��
	switch($toType){
	//�Ƿ���JPEG����
	case 'jpeg':
	case 'jpg':
		imagejpeg($im,$pic.'.jpeg');
		break;
	//�Ƿ���GIF����
	case 'gif':
		imagejpeg($im,$pic.'.gif');
		break;
	//�Ƿ���PNG����
	case 'png';
		imagejpeg($im,$pic.'.png');
		break;
	//�������������ͣ�����������ʾ
	default;
		echo "toType error<br>";
		exit;
		
	}
	
	//����ת���ɹ�����ʾ
	echo "convert successfully<br>";
}
	converter("phpzjm.jpg","gif");
	
?>