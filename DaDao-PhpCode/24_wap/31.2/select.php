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
<card id="card1" title="��������">
<p>��ѡ���������ͣ�
<select name="choice" value="1" title="Research">
<option value="rock">ҡ����</option>
<option value="pop">������</option>
<option value="jazz">��ʿ��</option>
<option value="nation">������</option>
</select>
<do type="text" label="ȷ��">
<go method="get" href="result.php#card2"><postfield name="choice" value="$(choice)"/>
</go>
</do>
</p>
</card>
</wml>
