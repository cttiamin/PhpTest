<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>break����Ӧ��</title>
</head>

<body>
<?php 
	//��һ��˫��ѭ�����
		for($a=1;$a<=5;$a++){ 	// ���ѭ����ʼ
			for($b=1;$b<=5;$b++){	//�ڲ�ѭ����ʼ
				echo $a.$b."<br>";	
				break;				//ֻ��ֹ�ڲ�ѭ��
			}
		}
		echo "<br>";
	//�ڶ���˫��ѭ�����
		for($a=1;$a<=5;$a++){		//���ѭ����ʼ
			for($b=1;$b<=5;$b++){	//�ڲ�ѭ����ʼ	
				echo $a.$b."<br>";	
				break 2;			//��ֹ˫��ѭ��
			}
		}

?>
</body>
</html>
