<?php
$str = '0123456789abcdefghijklmnopqrstuvwxyz';
$strlen = strlen($str);
function makeDir($param)
{
   if(!file_exists($param)) {
       echo "dir ".$param."\n";
       exec("dir ".$param);
   }
}
for($i = 0; $i < $strlen; $i++) {
   for($j = 0; $j < $strlen; $j++) {
       makeDir('/mysession/tmp /'.$str[$i].'/'.$str[$j]);
   }
}
?>
