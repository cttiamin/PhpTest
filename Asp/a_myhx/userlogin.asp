<script type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
<link href="css.css" rel="stylesheet" type="text/css">


<table width="480" height="30" border="0" cellpadding="0" cellspacing="0">
  <form id="form1" name="form1" method="post" action="user_checklogin.asp">
    <tr>
      <td width="86" align="right" valign="middle"><span class="font02">登录用户名:</span></td>
      <td width="54" align="left" valign="middle"><input name="username" type="text" class="font01" id="username" size="11" /></td>
      <td width="32" align="center" valign="middle" class="font02">密码:</td>
      <td width="54" align="left" valign="middle"><input name="pwd" type="text" class="font01" id="pwd" size="11" /></td>
      <td width="55" align="center" valign="middle" class="font01"><input name="Submit" type="submit" class="font02" value="提交" /></td>
      <td width="52" align="center" valign="middle"><span class="font02"><a href="user_reg.asp" class="font02">免费注册</a></span></td>
      <td width="52" align="center" valign="middle" class="font02"><a href="lookpwd1.asp" class="font02">忘记密码</a></td>
      <td width="95" align="right" valign="middle"><select name="menu1" class="table01" onchange="MM_jumpMenu('parent',this,0)">
        <option>本站快速通道</option>
        <option value="http://www.yahoo.cn">雅虎</option>
        <option value="http://www.google.com">歌谷</option>
        <option value="http://www.baidu.com">百度</option>
      </select></td>
    </tr>
  </form>
</table>

