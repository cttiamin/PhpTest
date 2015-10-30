<?php require_once('mysqlclass.php'); ?>

<?php
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

?>
