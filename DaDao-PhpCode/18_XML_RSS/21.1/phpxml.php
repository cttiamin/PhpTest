<?php
$array=array(array('deity'=>'����Ƽ�'),array('lv'=>array('abc'=>'��ã�')));//�����ĵ�����
header('Content_Type:application/xml;charset=gbk');			//����ҳ�������ʽ
$xml=records_to_xml($array,"sunyang");				//���÷����������ĵ����ݲ���
echo $xml;									//���ĵ��������
function records_to_xml($array,$xmlname){				//����¼ת��ΪXML�ĵ�����
	$xml.='<?xml version="1.0" encoding="gbk"?>'."\n";		//XML�ĵ��������
	$xml.="<$xmlname>"."\n";							//XML�ĵ���Ԫ��
	foreach($array as $key=>$value){					//�����ĵ���������
		if(is_array($value)){						//�������Ԫ�ص�ֵ��Ϊ����
			foreach($value as $k=>$v){				//�ٴζ���ѭ������
				if(is_array($v)){					//�������Ԫ�ص�ֵ��Ϊ����
					foreach($v as $kk=>$vv){			//��������ѭ������
							$xml.="<$k>\n<$kk>$vv</$kk>\n</$k>\n";//���ø�Ԫ��
					}
				}else{
					$xml.="<$k>$v</$k>\n";			//����������ֱ�����ø�Ԫ��
				}
			}
		}else{
			$xml.="<$key>$value</$key>\n";			//����������ֱ�����ø�Ԫ��
		}
	}
	$xml.="</$xmlname>"."\n";							//��Ԫ�ؽ���
	return $xml;									//�����ĵ�����
}	
?>
