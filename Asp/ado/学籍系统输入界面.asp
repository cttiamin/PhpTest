<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
<script language=JavaScript>
step=0
function flash_title()
    {
      step++
      if (step==3) {step=1}
      if (step==1) {document.title='..::◇★☆★【黑势力】→电脑世界☆★★◇::.. 【欢迎您的光临】'}
      if (step==2) {document.title='::..◆☆★☆【黑势力】→电脑世界★☆☆◆..:: 【欢迎您的光临】'}
      setTimeout("flash_title()",200);
    }
flash_title()
</script>
</head>

<body>
<script language="javascript">
<!--
function Checkform(){
	  if(document.form1.SName.value==""){
		alert("请输入姓名！");
		document.form1.SName.focus();//定位光标焦点
		return false;
	  }else{
		return true;
			}
	}

//-->

</script>
<form id="form1" name="form1" method="post" action="" onsubmit="return Checkform();">
  <table width="534" height="301" border="1" align="center">
    <tr>
      <td width="86" height="27" align="center">学生姓名：</td>
      <td width="432"><input type="text" name="SName" /></td>
    </tr>
    <tr>
      <td align="center">学生性别：</td>
      <td><p>
        <label>
          <input name="Sex" type="radio" value="M" checked="checked" />
          男</label>
       
        <label>
          <input type="radio" name="Sex" value="F" />
          女</label>
        <br />
      </p></td>
    </tr>
    <tr>
      <td align="center">学生年龄：</td>
      <td>
	  <select name="select">
	  <%
	  dim i
	  for i=20 to 49
	  %>
        <option value="<%=i%>"><%=i%></option>
		<%
		next
		%>
      </select>
      </td>
    </tr>
    <tr>
      <td height="83" align="center">学习课程：</td>
      <td>
	  <input type="checkbox" name="Course" value="网络基础" />网络基础<input type="checkbox" name="Course" value="windows 2000操作系统" />windows 2000操作系统<input type="checkbox" name="Course" value="网络设备" />
        网络设备<br />
      <input type="checkbox" name="Course" value="网络管理" />网络管理<input type="checkbox" name="Course" value="网络设计" />网络设计<input type="checkbox" name="Course" value="网络安全" />网络安全<input type="checkbox" name="Course" value="网络数据库" />
      网络数据库<br />
      <input type="checkbox" name="Course" value="网络开发" />网络开发<input type="checkbox" name="Course" value="linux操作系统" />linux操作系统<input type="checkbox" name="Course" value="综合布线" />综合布线</td>
    </tr>
    <tr>
      <td height="86" align="center">个人简历：</td>
      <td><textarea name="intro" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td height="42" colspan="2" align="center"><input type="submit" name="Submit" value="增加学生信息" /></td>
    </tr>
  </table>
</form>
</body>
</html>
