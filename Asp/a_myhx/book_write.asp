<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!--#include file="include/conn.asp" -->

<%
dim rs,sqlstr,title,email,contnet,bookuser
	set rs=server.CreateObject("adodb.recordset")
	title=request.form("title")
	bookuser=request.form("bookuser")
	content=request.form("content")
	email=request.form("email")
	if title<>"" then
		sqlstr="select * from [book]"
		rs.open sqlstr,conn,3,3
		rs.addnew
			rs("title")=title
			rs("content")=content
			rs("email")=email
			rs("bookuser")=bookuser
		rs.update
		rs.close
	response.write("<script language='javascript'>")
	response.write("alert('留言成功');")
	response.write("location='book.asp';")
	response.write("</script>")
	

	
end if	
%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/my.dwt.asp" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>留言</title>
<!-- InstanceEndEditable -->

<link href="css.css" rel="stylesheet" type="text/css" />
<!-- InstanceBeginEditable name="head" --><!-- InstanceEndEditable -->
</head>

<body>
<table width="1002" height="875" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="27" height="170" background="images1/bbb_05.gif"></td>
    <td width="958" align="left" valign="top"><table width="100%" height="93" border="0" cellpadding="0" cellspacing="0" bgcolor="#FEFEFE">
      <tr>
        <td width="16%" height="30"></td>
        <td width="28%"></td>
        <td colspan="3" align="right" background="#"><span class="font02"><a href="#" class="font02">设为首页</a></span><span class="a01">&nbsp;</span><span class="font02">|</span>&nbsp;<span class="font02"><a href="#" class="font02">加为收藏</a></span>&nbsp;&nbsp;</td>
      </tr>
      <tr>
        <td align="center" valign="top"><img src="images1/bbb_07.jpg" width="115" height="36" alt="" /></td>
        <td align="left" valign="top"><img src="images1/bbb_09.jpg" width="266" height="59" alt="" /></td>
        <td colspan="3" align="right" valign="baseline"><!-- InstanceBeginEditable name="user" -->
          <table width="96%" border="0" cellpadding="0" cellspacing="0">
            <form id="form1" name="form1" method="post" action="">
              <tr>
                <td width="164" align="right" valign="baseline"><span class="font02">登录用户名:</span></td>
                <td width="50" align="left" valign="baseline"><input name="username" type="text" class="font02" id="username" size="11" /></td>
                <td width="38" align="right" valign="baseline" class="font02">密码:</td>
                <td width="50" align="left" valign="baseline"><input name="textfield" type="text" class="font01" size="11" /></td>
                <td width="50" valign="baseline" class="font01"><input name="Submit" type="submit" class="font02" value="提交" /></td>
                <td width="51" valign="baseline"><span class="font02"><a href="#" class="font02">免费注册</a></span></td>
                <td width="107" align="right" valign="baseline"><select name="select" class="table01">
                    <option selected="selected">本站快速通道</option>
                    <option value="http://www.baidu.com">百度</option>
                    <option value="http://www.google.com">歌谷</option>
                  </select>
                </td>
              </tr>
            </form>
          </table>
        <!-- InstanceEndEditable --></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td width="27%"></td>
        <td width="11%"></td>
        <td width="18%"></td>
      </tr>
    </table>
        <table width="100%" height="160" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td height="29" background="images1/bbb_19.jpg">&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" class="a01">首页</a> &nbsp;<span class="STYLE1">|</span> &nbsp;&nbsp;<a href="#" class="a01">关于我们</a> &nbsp;<span class="STYLE1">|</span> &nbsp;<a href="#" class="a01">新闻动态</a>&nbsp; <span class="STYLE1">|</span> &nbsp;<a href="#" class="a01">咨询项目</a>&nbsp; <span class="STYLE1">|</span>&nbsp;<a href="#" class="a01"> 内训流程</a> &nbsp;<span class="STYLE1">|</span>&nbsp; <a href="#" class="a01">专家队伍</a>&nbsp; <span class="STYLE1">|</span> &nbsp;<a href="#" class="a01">客户服务</a> &nbsp;<span class="STYLE1">|</span> &nbsp;<a href="#" class="a01">留言反馈</a> &nbsp;<span class="STYLE1">|</span> &nbsp;<a href="#" class="a01">联系方式</a> </td>
          </tr>
          <tr>
            <td height="3"></td>
          </tr>
          <tr>
            <td align="center"><img src="images1/bbb_25.jpg" width="956" height="256" alt="" /></td>
          </tr>
        </table>
      <table width="958" height="502" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td height="5" colspan="2"></td>
          </tr>
          <tr>
            <td width="277" height="400" align="left" valign="top" bgcolor="#F4F8FB"><!-- InstanceBeginEditable name="left" -->
              <table width="266" height="428" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="11" colspan="2" align="left" valign="top" bgcolor="#F4F8FB"></td>
                </tr>
                <tr>
                  <td height="22" colspan="2" align="left" valign="top" bgcolor="#FEFEFE">aaaaaaaaaaaaaa<img src="images1/bbb_43.jpg" alt="" width="38" height="12" align="right" /></td>
                </tr>
                <tr>
                  <td width="134" height="105" align="left" valign="top" bgcolor="#FEFEFE"><img src="images1/bbb_47.gif" alt="" width="134" height="79" align="left" /></td>
                  <td width="132" align="left" valign="top" bgcolor="#FEFEFE">&nbsp;<img src="images1/bbb_49.gif" width="5" height="8" alt="" /><span class="font01">aaaaaaaaaaaaaaaaaaaa  &nbsp;<img src="images1/bbb_49.gif" width="5" height="8" alt="" />aaaaaaaaaaaaaaaaaaaa
                    &nbsp;aaaaaaaaaaaaaaaaaaaa
                    aaaaaaaaaaaaaaaaaaaa
                    aaaaaaaaaaaaaaaaaaaa
                    aaaaaaaaaaaaaaaaaaaa </span>
                  <p><span class="font01"><img src="images1/bbb_36.gif" width="10" height="10" alt="" /></span></p></td>
                </tr>
                <tr>
                  <td height="6" colspan="2"></td>
                </tr>
                <tr>
                  <td height="28" colspan="2" bgcolor="#FEFEFE">bbb<img src="images1/bbb_43.jpg" alt="" width="38" height="12" align="right" /></td>
                </tr>
                <tr>
                  <td height="106" bgcolor="#FEFEFE"><img src="" alt="" name="aaa" width="131" height="91" id="aaa" /></td>
                  <td height="106" align="left" valign="top" bgcolor="#FEFEFE"><span class="font01">aaaaaaaaaaaaaaaaaaaa  &nbsp;<img src="images1/bbb_49.gif" width="5" height="8" alt="" /><img src="images1/bbb_49.gif" width="5" height="8" alt="" />aaaaaaaaaaaaaaaaaaaa
                    &nbsp;aaaaaaaaaaaaaaaaaaaa
                    aaaaaaaaaaaaaaaaaaaa
                    aaaaaaaaaaaaaaaaaaaa
                    aaaaaaaaaaaaaaaaaaaa </span></td>
                </tr>
                <tr>
                  <td height="7" colspan="2"></td>
                </tr>
                <tr>
                  <td height="28" colspan="2" bgcolor="#FEFEFE">cccc<img src="images1/bbb_43.jpg" alt="" width="38" height="12" align="right" /></td>
                </tr>
                <tr>
                  <td height="63" bgcolor="#FEFEFE"><img src="" alt="" name="aaa" width="131" height="91" id="aaa" /></td>
                  <td height="63" align="left" valign="top" bgcolor="#FEFEFE"><span class="font01">aaaaaaaaaaaa
                    &nbsp;aaaaaaaaaaaaaaaaaaaa
                    aaaaaaaaaaaaaaaaaaaa <img src="images1/bbb_49.gif" width="5" height="8" alt="" />aaaaaaaaaaaaaaaaaaaa
                    aaaaaaaaaaaaaaaaaaaa </span><span class="font01">aaaaaaaaaaaa
                      &nbsp;aaaaaaaaaaaaaaaaaaaa
                      aaaaaaaaaaaaaaaaaaaa </span></td>
                </tr>
                <tr>
                  <td height="4" colspan="2"></td>
                </tr>
            </table>
            <!-- InstanceEndEditable --></td>
            <td width="681" align="left" valign="top" bgcolor="#F4F8FB"><!-- InstanceBeginEditable name="right" -->
              <p>&nbsp;</p>
              <table width="440" height="158" border="0" align="center" cellpadding="0" cellspacing="0">
                <form action="" method="post" name="form2" id="form2">
                  <tr>
                    <td width="113" align="right">输入标题目：</td>
                    <td width="327"><input name="title" type="text" id="title" /></td>
                  </tr>
                  <tr>
                    <td align="right">输入姓名：</td>
                    <td><input name="bookuser" type="text" id="bookuser" /></td>
                  </tr>
                  <tr>
                    <td align="right">输入信箱：</td>
                    <td><input name="email" type="text" id="email" size="31" /></td>
                  </tr>
                  <tr>
                    <td align="right">输入内容：</td>
                    <td><textarea name="content" cols="31" rows="12" id="content"></textarea></td>
                  </tr>
                  <tr>
                    <td align="right">&nbsp;</td>
                    <td><input type="submit" name="Submit2" value="提交" />
                      &nbsp;
                      <input type="submit" name="Submit3" value="重置" /></td>
                  </tr>
                </form>
              </table>
            <!-- InstanceEndEditable --></td>
          </tr>
         
      </table>
      <!-- InstanceBeginEditable name="end" -->
      <table width="100%" border="0">
        <tr>
          <td height="95" colspan="2" align="center" valign="middle" bgcolor="#DCE7ED"><span class="font02">版权所有：华夏良栋(北京)管理咨询有限公司<br />
            联系电话：010-110119122转120 传真： 010-110119122 Email:coni@abc.com<br />
            公司地址：北京市海淀区永丰中路54号 邮编： 100094 <br />
            京ICP备110120号</span></td>
        </tr>
      </table>
      <!-- InstanceEndEditable --></td>
    <td width="17" background="images1/bbb_13.jpg"></td>
  </tr>
</table>
</body>
<!-- InstanceEnd --></html>
