<%@LANGUAGE="VBSCRIPT"%>
<%
Response.Buffer = true
'���û���
Response.Expires = -10000
Response.AddHeader "pragma", "no-cache"
Response.AddHeader "cache-control", "private"
Response.CacheControl = "no-cache"

if Session("userqx")>="1" and Session("userqx")<="9" then
else
	Response.Redirect "warn.asp"
end if
%>
<!--#include file="conn.asp" -->


<%
classcode=Request.QueryString("classcode")
pageno=Request.QueryString("pageno")
delkeyno=Request.QueryString("delkeyno")
ordername=Request.QueryString("ordername")
byasc=Request.QueryString("byasc")
miscellno=Request.QueryString("miscellno")
yiyou=Request.QueryString("yiyou")
if miscellno="" then
 miscellno="0"
end if
if yiyou="" then
  yiyou="0"
end if
addno=Request.QueryString("addno")
if addno="" then
  addno="0"
 end if

set rs=server.CreateObject("ADODB.Recordset")
set rs2=server.CreateObject("ADODB.Recordset")

tablename="miscell"

if classcode="" then
	sqltext="select top 1 * from miscell_class order by classcode"
	rs.Open sqltext,cn,1,1
	if not rs.EOF then
		classcode=rs("classcode")
		classname=trim(rs("classname"))
		baseclass=trim(rs("baseclass"))
		qxflag=trim(rs("qxflag"))
		listcount=rs("listcount")
		sortby=trim(rs("sortby"))
	else
		Response.End
	end if
	rs.Close
else
	sqltext="select * from miscell_class where classcode='"+classcode+"'"
	rs.Open sqltext,cn,1,1
	if not rs.EOF then
		classcode=rs("classcode")
		classname=trim(rs("classname"))
		baseclass=trim(rs("baseclass"))
		qxflag=trim(rs("qxflag"))
		listcount=rs("listcount")
		sortby=trim(rs("sortby"))
	else
		Response.End	
	end if	
	rs.Close
end if

if sortby="0" then sortby="desc" else sortby="asc"

if ordername="" then ordername="sortnum"
if byasc="" then byasc=sortby
ordertxt=" order by "+ordername+" "+byasc

htmlname="miscell_admin.asp?classcode="+classcode+"&ordername="+ordername+"&miscellno="+miscellno+"&byasc="+byasc
htmlname2="miscell_admin.asp?classcode="+classcode
addhtml="miscell_edit.asp?classcode="+classcode+"&miscellno="+miscellno+"&ordername="+ordername+"&byasc="+byasc

htmltitle="��վ����"
if miscellno<>"0" and yiyou="0" then

	wheretxt=" where classcode='"+classcode+"' and miscellno="+miscellno 
elseif addno<>"0" then
	wheretxt=" where classcode='"+classcode+"' and miscellno<>"+addno 
else
	wheretxt=" where classcode='"+classcode+"'"
end if
if mid(qxflag,6,1)="0" then piczs=1    'ÿ��λ��ʼ���ĵ�һλ��
if mid(qxflag,7,1)="1" then piczs=piczs+1

if Request.ServerVariables("REQUEST_METHOD")="POST" then
	rectot=Request.Form("rectot")
	for i=1 to rectot
		checksele=Request.Form("checksele"&i)
		if checksele<>"" then
			seleitem=Request.Form("seleitem"&i)
			cn.BeginTrans
			sqltext="delete from picfiles where tablename='"+tablename+"' and keyno="&seleitem
			cn.Execute(sqltext)
			
			sqltext="select keyno from miscell_info where miscellno="&seleitem
			rs.Open sqltext,cn,1,1
			do while not rs.EOF
				sqltext="delete from picfiles where tablename='miscell_info' and keyno="&rs(0)
				cn.Execute sqltext
				rs.MoveNext	
			loop
			rs.Close
			
			sqltext="delete from miscell_info where miscellno="&seleitem
			cn.Execute(sqltext)
			sqltext="delete from miscell where keyno="&seleitem
			cn.Execute sqltext
			cn.CommitTrans
			
		end if
	next
end if

%>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
<style type="text/css">
<!--
body {
	font-size: 12px;
	color: #000000;
	font-family: ����;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #33FFFF;
}
td {font-size: 12px; color: #000000; font-family: ����;}
.t1 {font:12px ����;color=000000} 
.t2 {font:12px ����;color:ffffff} 

.bt1 {font:14px ����;color=000000} 
.bt2 {font:14px ����;color:ffffff} 

A:link {color: #000066}
A:visited {color: #000066}
A:hover {color: #ff0000}

A.r1:link {font-size:12px;text-decoration:underline;color:#000000;}
A.r1:visited {font-size:12px;text-decoration:underline;color:#000000;}
A.r1:hover {font-size:12px;text-decoration:underline;color:#ff6600;}

A.r2:link {font-size:12px;text-decoration:underline;color:#000000;}
A.r2:visited {font-size:12px;text-decoration:underline;color:#ffffff;}
A.r2:hover {font-size:12px;text-decoration:underline;color:#ff6600;}
-->
</style>
</head>

<body>
<table width="980" height="150" border="1" align="center" cellpadding="0" cellspacing="0">
 <form name="form1" method="post" action="<%=htmlname%>"> <tr>
    <td height="28" colspan="9">&nbsp;<%=htmltitle%>&nbsp;| &nbsp;<%=classname%> | &nbsp;
	<a href="<%=htmlname%>&pageno=<%=pageno%>">ˢ���б�</a>&nbsp;|  
	&nbsp;<%if mid(qxflag,4,1)="0" or (Session("username")="xc_huang" and Session("userqx")="9") then%>
			<a href="<%=addhtml%>">����</a>
			<%end if%></td>
  </tr>
  <%
		sqltext="select * from miscell "+wheretxt+ordertxt
		rs.Open sqltext,cn,1,1
	
		rs.PageSize=listcount
		if pageno="" then pageno=1 else pageno=cint(pageno)	
		if rs.PageCount>0 then rs.AbsolutePage=pageno

	%>
  
  <tr>
  <%if mid(qxflag,4,1)="0" or (Session("username")="jm_zhang" and Session("userqx")="9") then%>
    <td width="49" height="31" align="center"></td>
	<%end if%>
    <td width="149" align="center">���</td>
    <td width="97" align="center">���</td>
    <td width="350" align="center" nowrap bgcolor="#33FFFF" class=t2>
		<a class=r2 href="<%=htmlname2%>&ordername=title&byasc=<%=selectxh("title",ordername,byasc,"asc")%>">��������</a></td>
	<%if mid(qxflag,2,1)="1" then%>
    <td width="76" align="center">
	<a class=r2 href="<%=htmlname2%>&ordername=state&byasc=<%=selectxh("state",ordername,byasc,"desc")%>">״̬</a></td>
	<%end if%>
	<%if mid(qxflag,3,1)="1" then%>
    <td width="80" align="center">
	<a class=r2 href="<%=htmlname2%>&ordername=nomflag&byasc=<%=selectxh("nomflag",ordername,byasc,"desc")%>">�Ƽ�</a></td>
	<%end if%>
	<%if mid(qxflag,1,1)="1" then%>
    <td width="60" align="center">
	<a class=r2 href="<%=htmlname2%>&ordername=querycount&byasc=<%=selectxh("querycount",ordername,byasc,"desc")%>">���</a></td>
	<%end if
				if mid(qxflag,6,1)="0" then%>
    <td width="52" align="center"><a class=r2 href="<%=htmlname2%>&ordername=picflag&byasc=<%=selectxh("picflag",ordername,byasc,"desc")%>">ͼƬ</a></td>
		<%end if%>
	<%if mid(qxflag,7,1)="1" then%>
        <td width="78" align="center" class=t2><a class=r2 href="<%=htmlname2%>&ordername=picflag2&byasc=<%=selectxh("picflag2",ordername,byasc,"desc")%>">ͼƬ</a></td>
        <%end if%>
  </tr>
  <%
		i=1
		do while not rs.EOF and i<=listcount
			if (i mod 2)=0 then
				Response.Write("<tr bgcolor=fefefe>")
			else
				Response.Write("<tr bgcolor=efefef>")
			end if	
		%>
  <tr>
  
	 <%if mid(qxflag,4,1)="0" or (Session("username")="jm_zhang" and Session("userqx")="9") then%>
    <td align="center"><input type=hidden name="seleitem<%=i%>" value="<%=rs("keyno")%>">
            <input type=checkbox name="checksele<%=i%>" value="0"></td>
		<%end if%>
    <td align="center"><%if rs("miscellno")<>"0" then
		response.write("С")
		else
		response.write("��")
		end if
		%></td>
    <td align="center"><%=rs("sortnum")%></td>
    <td align="center"><a href="<%=addhtml%>&keyno=<%=rs("keyno")%>&pageno=<%=pageno%>">
          <%Response.Write Server.HTMLEncode(trim(rs("title")))%>
        </a></td>
		<%if mid(qxflag,2,1)="1" then%>
    <td align="center"><%Select Case trim(rs("state"))
					case "0"
						Response.Write("<font color=ff0000>����ʾ</font>")
					case "1"
						Response.Write("<font color=000000>����</font>")
				 end select		
				%>        </td><%end if%>
				<%if mid(qxflag,3,1)="1" then%>
    <td align="center"><%Select Case trim(rs("nomflag"))
					case "0"
						Response.Write("<font color=000000>���Ƽ�</font>")
					case "1"
						Response.Write("<font color=ff4500>�Ƽ�</font>")
					case "2"
						Response.Write("<font color=ff4500>�ص��Ƽ�</font>")
				 end select		
				%></td><%end if%>
				<%if mid(qxflag,1,1)="1" then%>
    <td align="center"><%=rs("querycount")%></td><%end if%>
	<%if mid(qxflag,6,1)="0" then%>
    <td align="center"><a href="Javascript:editimage('<%=rs("keyno")%>')">ͼƬ</a>
	<%if rs("picflag")="1" then Response.Write("<font color=red style='font-size:12px'>(��)</font>") else Response.Write("<font color=navy style='font-size:12px'>(��)</font>")%></td>
	<%end if%>
        <%if mid(qxflag,7,1)="1" then%>
    <td align="center"><a href="Javascript:editimage2('<%=rs("keyno")%>')">ͼƬ</a>
          <%if rs("picflag2")="1" then Response.Write("<font color=red style='font-size:12px'>(��)</font>") else Response.Write("<font color=navy style='font-size:12px'>(��)</font>")%></td>
		   <%end if
				 if mid(qxflag,9,1)="1" then
				%>
        

        <%end if%>
  </tr>
   		<%	
			i=i+1
			rs.MoveNext
		loop
		%>
		<input type=hidden value="<%=i-1%>" name=rectot>
  
  <tr>
    <td colspan="9"><input type="checkbox" name="seleall" onClick="checkall(this.form)" > ȫѡ
<%if addno<>"0" then %>
<input type="submit" value="ȷ��" name="mydele" onClick="delmsg(this.form);' style="cursor: hand;" />
<%else%><input type="button" name="mydele" value="ɾ��" style="width:60px;height:20px" onClick="delmsg(this.form)">
<%end if%></td>
    </tr>
  <tr>
    <td colspan="9" align="right">[��<font color=ff6600><b><%=pageno%></font>ҳ, ��<b><font color=ff6600><%=rs.PageCount%></font></b>ҳ<b><font color=ff6600><%=rs.RecordCount%></font></b>����¼]			
			<%if pageno>1 then%>
				<a class=r1 href="<%=htmlname%>&pageno=1">[��ҳ]</a>              
				<a class=r1 href="<%=htmlname%>&pageno=<%=pageno-1%>">[��ҳ]</a>              
			<%end if              
			if pageno<rs.PageCount then%>              
				<a class=r1 href="<%=htmlname%>&pageno=<%=pageno+1%>">[��ҳ]</a>              
				<a class=r1 href="<%=htmlname%>&pageno=<%=rs.PageCount%>">[ĩҳ]</a>              
			<%end if%>			</td></tr>  
			
			</td>
  </tr>
  <tr>
    <td height="28" colspan="9">&nbsp;</td>
  </tr></form>
</table>


</body>
</html>
<!--#include file="sysfunc.inc.asp" -->
<script language="Javascript">

	function checkall(form)
	 {
		  for (var i=0;i<form.elements.length;i++)
		    {
			    var obj = form.elements[i];
			    var objname=obj.name;
			   
			    if(objname.substring(0,9)=="checksele")
					{
					 obj.checked=form.seleall.checked	
					}
		    }
	  }

	function delmsg(form)
	{
		var flag=false;
		var i,rectot,obj1
		rectot=form.rectot.value;
		for(i=1;i<=rectot;i++)				
		{
			obj1=eval("form.checksele"+i);
			if (obj1.checked) flag=true;	
		}

		if (flag){
			if (confirm('ȷ��ɾ��ѡ��ļ�¼��')==true) form.submit();
		}else alert("����ѡ��Ҫɾ���ļ�¼!");	
	}

	function editfile(keyno)
	{
		var str
		str="../files/file_upload.asp?" ;
		str=str+"keyno="+keyno+"&tablename=miscell&keyword=keyno&strflag=0"
		window.open(str,"mywin","toolbar=no,location=no,directories=no,status=no,resizable=no,menubar=no,scrollbars=yes,width=550,height=400,left=120,top=70")
	}

	function editfile2(keyno)
	{
		var str
		str="../files/file_upload.asp?" ;
		str=str+"keyno="+keyno+"&tablename=miscell&keyword=keyno&strflag=0&code=miscellb&flagfield=picflag2&filefield=picfile2"
		window.open(str,"mywin","toolbar=no,location=no,directories=no,status=no,resizable=no,menubar=no,scrollbars=yes,width=550,height=400,left=120,top=70")
	}

	function editimage(keyno)
	{
		var str
		str="pic_upload.asp?keyno="+keyno+"&tablename=miscell&keyword=keyno&strflag=0"
		window.open(str,"mywin","toolbar=no,location=no,directories=no,status=no,resizable=no,menubar=no,scrollbars=yes,width=550,height=400,left=120,top=70")
	}

	function editimage2(keyno)
	{
		var str
		str="miscell_photo.asp?keyno="+keyno+""
		window.open(str,"mywin","toolbar=no,location=no,directories=no,status=no,resizable=no,menubar=no,scrollbars=yes,width=550,height=400,left=120,top=70")		
	}

</script>
