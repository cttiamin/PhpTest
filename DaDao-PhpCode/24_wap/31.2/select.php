<?php
header("Content-type:text/vnd.wap.wml");
header("Cache-Control:no-cache,must-revalidate");
header("Pragma:no-cache");
header("Content-type:text/vnd.wap.wml;charset=gb2312");
echo("<?xml version=\"1.0\" encoding=\"gb2312\"?>");
?>
<!DOCTYPE wml PUBLIC "-//WAPFORUM//DTD WML 1.1//EN"
"http://www.wapforum.org/DTD/wml_1.1.xml">
<wml>
<card id="card1" title="音乐世界">
<p>请选择音乐类型：
<select name="choice" value="1" title="Research">
<option value="rock">摇滚乐</option>
<option value="pop">流行乐</option>
<option value="jazz">爵士乐</option>
<option value="nation">民族乐</option>
</select>
<do type="text" label="确定">
<go method="get" href="result.php#card2"><postfield name="choice" value="$(choice)"/>
</go>
</do>
</p>
</card>
</wml>
