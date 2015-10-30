<!--#include file="conn.asp" -->
<% dim rs,rs1
set rs = Server.CreateObject("ADODB.Recordset")
set rs1=server.CreateObject("adodb.recordset")

'用户等级和权限字符串
userqx = Session("userqx")
qxflag = Session("qxflag")
%>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>栏目管理</title>
<style>
body,table,tr
{
	font-size:12px;
	font-family:宋体;
	line-height:16px;
	background-color: #00CCFF;
}

A.parent:link {font:13px;text-decoration:none;color: #000000}
A.parent:visited {font-size:13px;text-decoration:none;color: #000000}
A.parent:hover {font-size:13px;text-decoration:underline;color: #ff6600}

A:link {color: #000066}
A:visited {color: #000066}
A:hover {color: #ff3300}
body {
	background-color: #00CCFF;
}
</style>
<script language="javascript">
	var imgOpen = new Image();
	var imgClose = new Image();
	imgOpen.src = "images/open.gif"
	imgClose.src = "images/close.gif"

	function expand(el)
	{
		childObj = document.getElementById("child" + el);
		imgObj = document.getElementById("img" + el);

		if (childObj.style.display == 'none')
		{
			childObj.style.display = 'block';
			imgObj.src = imgOpen.src;
		}
		else
		{
			childObj.style.display = 'none';
			imgObj.src = imgClose.src;
		}
	}
</script>

</head>

<body topmargin="0" leftmargin="0" style="background:url('') left bottom no-repeat;">
<table width="175" height="253" border="1" align="center" cellpadding="0" cellspacing="0" bgcolor="#00CCFF">
 
  <tr>
    <td width="17">&nbsp;</td>
    <td width="158">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td valign="top">
			<%
			if userqx = "9" or mid(qxflag, 1, 1) = "1" then
				i = i + 1
			%>
			<div id="parent<%=i%>" >
					<table width="100%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#99FF00">
						<tr height="20">
							<td width="15">
							<a href="#" onClick="expand(<%=i%>)"><img id="img<%=i%>" src="images/close.gif" border="0"></a>
							</td>
							<td><a href="#" class="parent" onClick="expand(<%=i%>)">栏目管理中心</a></td>
						</tr>
			  </table>
	  </div>
			<div id="child<%=i%>" style="display:none;">
					<table width="100%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#99FF00">
						<%
						sql = "select classcode,classname from miscell_class where baseclass='1' order by sortnurm"
						rs.open sql,conn,0,1,1
						do while not rs.EOF
						%>
							<tr>
								<td width="20"></td>
								<td>
								<a href="miscell_admin.asp?classcode=<%=rs("classcode")%>" target="mainFrame">
								<%=rs("classname")%>
								</a>								
								</td>
							</tr>
						<%
							rs.MoveNext
						loop						
						rs.close
						%>
							<tr>
								<td width="20"></td>
								<td><a href="user_admin.asp" target="mainFrame">会员管理</a></td>
							</tr>
			  </table>
	  </div>
			<%
			end if
			%>	
			
	</td>
  </tr>
  						<%
						sql = "select classcode,classname from miscell_class where flag='1' order by sortnurm"
						rs1.open sql, conn, 0, 1, 1
						do while not rs1.EOF
						%>
  		
  <tr>
    <td>&nbsp;</td>
    <td valign="top">
			<%
			if userqx = "9" or mid(qxflag, 2, 1) = "1" then
				i = i + 1
			%>
			
			<div id="parent<%=i%>">
					<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
						<tr height="20">
							<td width="15"><a href="#" onClick="expand(<%=i%>)"><img id="img<%=i%>" src="images/close.gif" border="0"></a></td>
							<td><a href="#" class="parent" onClick="expand(<%=i%>)"><%=rs1("classname")%></a></td>
						</tr>
					</table>
				</div>
				<div id="child<%=i%>" style="display:none;">
					<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
						<%
						sql = "select classcode,classname from miscell_class where baseclass='"& rs1("classcode") &"' and flag='0' order by sortnurm"
						rs.open sql, conn, 0, 1, 1
						do while not rs.EOF
						%>
							<tr>
								<td width="20"></td>
								<td><a href="miscell_admin.asp?classcode=<%=rs("classcode")%>" target="main"><%=rs("classname")%></td>
							</tr>
						<%
							rs.MoveNext
						loop
						rs.close
						%>

						<tr>			
			<%
			if userqx = "9" or mid(qxflag, 2, 1) = "1" then
				i = i + 1
			%>
						<tr>
							<td width="20"></td>
							<td><a href="miscell_class2.asp?baseclass=<%=rs1("classcode")%>" target="main"><%=rs1("classname")%>类别管理</a></td>
						</tr>
			<%
			end if
			%>
					</table>
				</div>
			<%
			end if
			%>	
			
	</td>
  </tr>
  						<%
							rs1.MoveNext
						loop
						rs1.close
						%>
  
  
  
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>
			<%
			if userqx = "9" then
				i = i + 1
			%>
			<div id="parent<%=i%>">
					<table width="100%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#99FF00">
						<tr height="20">
							<td width="15"><a href="#" onClick="expand(<%=i%>)"><img id="img<%=i%>" src="images/close.gif" border="0"></a></td>
							<td><a href="#" class="parent" onClick="expand(<%=i%>)">留言与评论</a></td>
						</tr>
			  </table>
	  </div>
				<div id="child<%=i%>" style="display:none;">
					<table width="100%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#99FF00">
		<tr>
							<td width="20"></td>
							<td><a href="book0.asp" target="main">留言设置</a></td>
					  </tr>
						<tr>
							<td width="20"></td>
							<td><a href="book1.asp" target="main">留言管理</a></td>
						</tr>
				  </table>
				</div>
				<%
			end if
			%>
			
			
			
	</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><%
			if userqx = "9" then
				i = i + 1
			%>
			<div id="parent<%=i%>">
					<table width="100%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#99FF00">
						<tr height="20">
							<td width="15"><a href="#" onClick="expand(<%=i%>)"><img id="img<%=i%>" src="images/close.gif" border="0"></a></td>
							<td><a href="#" class="parent" onClick="expand(<%=i%>)">系统管理</a></td>
						</tr>
			  </table>
	  </div>
				<div id="child<%=i%>" style="display:none;">
					<table width="100%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#99FF00">
			<%
			if userqx = "9"  then
				i = i + 1
			%>
						<tr>
							<td width="20"></td>
							<td><a href="sys_dept.asp" target="main">网站信息</a></td>
						</tr>
			<%
			end if
			%>						<tr>
							<td width="20"></td>
							<td><a href="count_list.asp" target="main">网站访问情况</a></td>
						</tr>
						<tr>
							<td width="20"></td>
							<td><a href="adminuser_admin.asp" target="main">操作人员管理</a></td>
						</tr>
				  </table>
				</div>
				<%
			end if
			%>
	</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td valign="top"><%
			if userqx = "9"  then
				i = i + 1
			%>
			<div id="parent<%=i%>">
					<table width="100%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#99FF00">
						<tr height="20">
							<td width="15"><a href="#" onClick="expand(<%=i%>)"><img id="img<%=i%>" src="images/close.gif" border="0"></a></td>
							<td><a href="#" class="parent" onClick="expand(<%=i%>)">栏目设置</a></td>
						</tr>
			  </table>
	  </div>
				<div id="child<%=i%>" style="display:none;">
					<table width="100%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#99FF00">
						<tr>
							<td width="20"></td>
							<td><a href="miscell_class.asp" target="main">栏目模块设置</a></td>
						</tr>
				  </table>
				</div>
				<%
			end if
			%>			
	</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td valign="top"><div id="parent<%=i%>">
				<table width="100%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#99FF00">
					<tr height="20">
						<td width="15"><a href="#" onClick="expand(<%=i%>)"><img id="img<%=i%>" src="images/close.gif" border="0"></a></td>
						<td><a href="#" class="parent" onClick="expand(<%=i%>)">个人管理</a></td>
					</tr>
		</table>
			</div>
			<div id="child<%=i%>" style="display:none;">
				<table width="100%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#99FF00">
					<tr>
						<td width="20"></td>
						<td><a href="../index.asp" target="_blank">回到首页</a></td>
					</tr>
					<tr>
						<td width="20"></td>
						<td><a href="adminuser_myedit.asp" target="main">修改口令</a></td>
					</tr>
					<tr>
						<td width="20"></td>
						<td><a href="login.asp" target="_top">换名登陆</a></td>
					</tr>
					<tr>
						<td width="20"></td>
						<td><a href="javascript:top.logout();">退出系统</a></td>
					</tr>
			  </table>
			</div>
	</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
