
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--#include file="include/adminconn.asp" -->
<%
dim rs,sqlstr
set rs=server.CreateObject("adodb.recordset")
%>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
<link href="css.css" rel="stylesheet" type="text/css" />
</head>

<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<!--#include file="top.asp" -->
<table width="1002" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="8" bgcolor="#BCC9D1"></td>
  </tr>
  <tr>
    <td height="10"></td>
  </tr>
</table>
<table width="1002" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="236" height="189" valign="top" class="s_line"><table width="97%" border="0" cellspacing="0" cellpadding="5">
      <tr>
        <td><img src="images2/index_17.jpg" width="83" height="31" alt="" /></td>
        <td align="right"><img src="images2/index_24.jpg" width="47" height="13" alt="" /></td>
      </tr>
      <tr>
        <td height="84" colspan="2" class="d_line">&nbsp;&nbsp;&nbsp;&nbsp;<span class="font01">授课专家对运营策略规划的娓娓道来促使我重新思考企业管理的体系化问题。能站在
战略的高度审视日常工作,这对我推进变革大有裨益</span>。…[更多..]</td>
        </tr>
    </table>
      <table width="97%" border="0" cellspacing="0" cellpadding="5">
        <tr>
          <td><img src="images2/index_33.jpg" width="83" height="39" alt="" /></td>
          <td align="right"><img src="images2/index_24.jpg" width="47" height="13" alt="" /></td>
        </tr>
        <tr>
          <td height="42" colspan="2" valign="top">&nbsp;&nbsp;&nbsp;
            <table width="100%" border="0" cellspacing="0" cellpadding="4">
              <tr>
                <td width="26%" height="35"><img name="" src="" width="50" height="60" alt="" /></td>
                <td width="74%"><div class="font01">台湾东海大学工业工程系毕业，具有20余年台资企业生产管理经验, 中国企业</div></td>
              </tr>
            </table>
            <table width="100%" border="0" cellspacing="0" cellpadding="4">
              <tr>
                <td width="26%" height="35"><img name="" src="" width="50" height="60" alt="" /></td>
                <td width="74%"><div class="font01">台湾东海大学工业工程系毕业，具有20余年台资企业生产管理经验, 中国企业</div></td>
              </tr>
            </table></td>
        </tr>
        <tr>
          <td height="42" colspan="2" valign="top"><img src="images2/index_42.jpg" width="218" height="66" alt="" /></td>
        </tr>
      </table></td>
    <td width="493" valign="top" class="s_line"><table width="97%" border="0" align="center" cellpadding="5" cellspacing="0">
      <tr>
        <td align="left" class="d_line"><img src="images2/index_19.jpg" width="128" height="23" alt="" /></td>
        <td align="right" class="d_line"><img src="images2/index_24.jpg" width="47" height="13" alt="" /></td>
      </tr>
      <tr>
        <td colspan="2" class="d_line"><img src="images2/index_31.jpg" alt="" width="228" height="163" hspace="5" vspace="5" align="left" /><span class="font01">
<%
sqlstr="select * from article where id=61"
rs.open sqlstr,conn,0,1
if len(rs("a_content2"))>200 then
response.write(left(rs("a_content2"),200))
else
response.write(rs("a_content2"))
end if
rs.close
%>	
    ……</span></td>
        </tr>
    </table>
      <table width="97%" border="0" align="center" cellpadding="5" cellspacing="0">
        <tr>
          <td><img src="images2/index_38.jpg" width="133" height="26" alt="" /></td>
          <td align="right"><span class="d_line"><img src="images2/index_24.jpg" width="47" height="13" alt="" /></span></td>
        </tr>
        <tr>
          <td height="109" colspan="2">&nbsp;</td>
        </tr>
      </table></td>
    <td width="273" valign="top"><table width="97%" border="0" cellspacing="0" cellpadding="5">
      <tr>
        <td><img src="images2/index_21.jpg" width="88" height="31" alt="" /></td>
        <td align="right"><img src="images2/index_24.jpg" width="47" height="13" alt="" /></td>
      </tr>
      <tr>
        <td height="84" colspan="2" class="d_line"><p>·&nbsp;<span class="font01"><a href="#" class="a12_1">授课专家对运营策略规划的娓娓道来</a><br />
          ·&nbsp;能站在
          战略的高度审视日常工作</span><br />
          ·<span class="font01">常工作,这对我推进变革大有裨益<br />
          ·&nbsp;授课专家对运营策略规划的娓娓道来<br />
·&nbsp;能站在
          战略的高度审视日常工作<br />
·常工作,这对我推进变革大有裨益</span><br />
·&nbsp;<span class="font01">授课专家对运营策略规划的娓娓道来
</span></p>
          </td>
      </tr>
    </table>
      <table width="97%" border="0" cellspacing="0" cellpadding="5">
        <tr>
          <td><img src="images2/index_34.jpg" width="88" height="37" alt="" /></td>
          <td align="right"><img src="images2/index_24.jpg" width="47" height="13" alt="" /></td>
        </tr>
        <tr>
          <td height="42" colspan="2" class="d_line">·&nbsp;<span class="font01">授课专家对运营策略规划的娓娓道来<br />
·&nbsp;能站在
          战略的高度审视日常工作</span><br />
·<span class="font01">常工作,这对我推进变革大有裨益<br />
·&nbsp;授课专家对运营策略规划的娓娓道来<br />
·&nbsp;能站在
          战略的高度审视日常工作</span></td>
        </tr>
        <tr>
          <td height="42" colspan="2" align="center"><img src="images2/index_44.jpg" width="256" height="61" alt="" /></td>
        </tr>
      </table></td>
  </tr>
</table>
<table width="1002" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td class="d_line">&nbsp;</td>
  </tr>
  <tr>
    <td height="2"></td>
  </tr>
  <tr>
    <td height="32" align="center" background="images2/index_49.jpg"><a href="#" class="daohang">关于我们</a> <span class="daohang">| </span><a href="#" class="daohang">新闻动态</a> <span class="daohang">| </span><a href="#" class="daohang">咨询项目</a> <span class="daohang">|</span> <a href="#" class="daohang">内训流程</a> <span class="daohang">| </span><a href="#" class="daohang">专家队伍</a> <span class="daohang">| </span><a href="#" class="daohang">客户服务</a></td>
  </tr>
  <tr>
    <td height="77" align="center" bgcolor="#E7ECF0" class="font01">版权所有：华夏良栋(北京)管理咨询有限公司<br />
      联系电话：010-110119122转120 传真： 010-110119122 Email:coni@abc.com<br />
      公司地址：北京市海淀区永丰中路54号 邮编： 100094 <br />
      京ICP备110120号</td>
  </tr>
</table>
</body>
</html>
<!--#include file="include/connclose.asp" -->

