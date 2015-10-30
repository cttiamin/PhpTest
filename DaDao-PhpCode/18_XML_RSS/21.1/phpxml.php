<?php
$array=array(array('deity'=>'三扬科技'),array('lv'=>array('abc'=>'你好！')));//设置文档内容
header('Content_Type:application/xml;charset=gbk');			//设置页面解析方式
$xml=records_to_xml($array,"sunyang");				//调用方法，传递文档内容参数
echo $xml;									//将文档内容输出
function records_to_xml($array,$xmlname){				//将记录转换为XML文档方法
	$xml.='<?xml version="1.0" encoding="gbk"?>'."\n";		//XML文档声明语句
	$xml.="<$xmlname>"."\n";							//XML文档根元素
	foreach($array as $key=>$value){					//遍历文档内容数组
		if(is_array($value)){						//如果数组元素的值仍为数组
			foreach($value as $k=>$v){				//再次对其循环遍历
				if(is_array($v)){					//如果数组元素的值仍为数组
					foreach($v as $kk=>$vv){			//继续对其循环遍历
							$xml.="<$k>\n<$kk>$vv</$kk>\n</$k>\n";//设置该元素
					}
				}else{
					$xml.="<$k>$v</$k>\n";			//若非数组则直接设置该元素
				}
			}
		}else{
			$xml.="<$key>$value</$key>\n";			//若非数组则直接设置该元素
		}
	}
	$xml.="</$xmlname>"."\n";							//根元素结束
	return $xml;									//返回文档内容
}	
?>
