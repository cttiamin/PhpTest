<?php 
include('include/mysqlclass.php');
$mycon=new mysql();
function mysubstr($str,$start,$len) {   //截取gb2312中文字符函数
  $tmpstr="";
  $strlen=$start+$len;
  for($i=0;$i<$strlen;$i++) {
  if(ord(substr($str,$i,1))>0xa0) {
  $tmpstr.=substr($str,$i,2);
  $i++;
  } else
  $tmpstr.=substr($str,$i,1);
  }
  return $tmpstr;
}

//截取utf8字符串
function utf8Substr($str,$from,$len)
{
  return preg_replace('#^(?:[\x00-\x7F]|[\xC0-\xFF][\x80-\xBF]+){0,'.$from.'}'.
  '((?:[\x00-\x7F]|[\xC0-\xFF][\x80-\xBF]+){0,'.$len.'}).*#s',
  '$1',$str);
}

/*
Utf-8、gb2312都支持的汉字截取函数
cut_str(字符串, 截取长度, 开始长度, 编码);
编码默认为 utf-8
开始长度默认为 0
*/

function cut_str($string,$sublen,$start=0,$code='UTF-8')
{
  if($code=='UTF-8')
  {
  $pa="/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|\xe0[\xa0-\xbf][\x80-\xbf]|[\xe1-\xef][\x80-\xbf][\x80-\xbf]|\xf0[\x90-\xbf][\x80-\xbf][\x80-\xbf]|[\xf1-\xf7][\x80-\xbf][\x80-\xbf][\x80-\xbf]/";
  preg_match_all($pa,$string,$t_string);

  if(count($t_string[0])-$start>$sublen) return join('',array_slice($t_string[0],$start,$sublen))."...";
  return join('',array_slice($t_string[0],$start,$sublen));
  }
  else
  {
  $start=$start*2;
  $sublen=$sublen*2;
  $strlen=strlen($string);
  $tmpstr='';

  for($i=0;$i<$strlen;$i++)
  {
  if($i>=$start&&$i<($start+$sublen))
  {
  if(ord(substr($string,$i,1))>129)
  {
  $tmpstr.=substr($string,$i,2);
  }
  else
  {
  $tmpstr.=substr($string,$i,1);
  }
  }
  if(ord(substr($string,$i,1))>129) $i++;
  }
  if(strlen($tmpstr)<$strlen ) $tmpstr.="...";
  return $tmpstr;
  }
}


 ?>
