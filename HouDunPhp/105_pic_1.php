<?php
//echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />";
include '088_pic.php';

$img = new image();

/* 105 - 106 测试代码
$img->pct = 60;
$img->text_size = 22;
$img->color = '#ff0000';
//$a = $img->watermark('pic/a.jpg', 'pic/a-2.jpg', 'pic/logoa.png', 2);
//$img, $out_img='', $water_img='', $pos='', $text='', $pct=''

$img->watermark('pic/a.jpg', 'pic/a-3.jpg' );
 */

echo $img->thumb('pic/a.jpg');


exit();


?>
