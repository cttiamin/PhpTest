<?php
$str="0123456789";
$a=substr($str,rand(0,9),1);
$b=substr($str,rand(0,9),1);
$c=substr($str,rand(0,9),1);
$d=substr($str,rand(0,9),1);
$yzm=$a.$b.$c.$d;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
<style type="text/css">
<!--
.STYLE1 {
	font-size: 16px;
	color: #FFFFFF;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<script language="javascript">
 function chklogin(){
	 if(document.form1.u_name.value.length<2){
		 alert("用户名不能为空");
		 document.form1.u_name.focus();
		 return false;
	 }
	 if(document.form1.u_pwd.value.length<2){
		 alert("密码不能为空");
		 document.form1.u_pwd.focus();
		 return false;
	 }
	 if(document.form1.yzm.value!=<?php echo $yzm;?>){
		 alert("验证码不对");
		 document.form1.yzm.focus();
		 return false;
	 }
 }

</script>
  <p>&nbsp;</p>
  <table width="53%" height="231" border="1" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td height="39" colspan="2" align="center" bgcolor="#3366FF"><span class="STYLE1">管理员登录入口</span></td>
    </tr>
    <tr>
      <td colspan="2">
	  <table width="90%" border="0" cellspacing="0" cellpadding="5">
	  <form id="form1" name="form1" method="post" action="checklogin.php" onsubmit="return chklogin();">

        <tr>
          <td width="26%" align="right">用户名:</td>
          <td width="74%"><input name="u_name" type="text" id="u_name" /></td>
        </tr>
        <tr>
          <td align="right">密&nbsp;&nbsp;码:</td>
          <td><input name="u_pwd" type="password" id="u_pwd" /></td>
        </tr>
        <tr>
          <td align="right">验证码:</td>
          <td><input name="yzm" type="text" id="yzm" size="6" />
            <img src="images/yzm/3/<?php echo $a;?>.GIF" /><img src="images/yzm/3/<?php echo $b;?>.GIF" /><img src="images/yzm/3/<?php echo $c;?>.GIF" /><img src="images/yzm/3/<?php echo $d;?>.GIF" /></td>
        </tr>
        <tr>
          <td align="right">&nbsp;</td>
          <td><input type="submit" name="Submit" value=" 登 录 " />
            &nbsp;
            <input type="reset" name="Submit2" value="重置" /></td>
        </tr>
		</form>

      </table></td>
    </tr>
  </table>
</body>
</html>
