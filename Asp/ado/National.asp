<!--#include file="../include/conn.asp" -->
<!--#include file="../include/function.asp" -->
<script language=javascript>

function searchcheck()
{
	//alert("");
	document.all("SearchTxtDiv").style.visibility="hidden";
	if(strangecode(search.SearchText.value)==false)
	{
		document.all("SearchTxtDiv").style.visibility="";
		document.all("SearchTxtDiv").innerHTML="<font color=red><strong>�����ı����������ַ�!</strong></font>";
		//("");
		sfrm.SearchText.focus();
		return false;
	}
}
function test()
{
  if(!confirm('ȷ��ɾ����')) return false;
}
function checkall()
{
   var a = document.getElementsByTagName("input");
   //alert(document.getElementsByName("checkALL").checked);
   if(frm.checkALL.checked)
   {
       for (var i=0; i<a.length; i++)
       if (a[i].type == "checkbox") a[i].checked = true;
   }
   else
   {
      for (var i=0; i<a.length; i++)
       if (a[i].type == "checkbox") a[i].checked = false;
   }
}
</script>

<%
dim rs_NT,tstr,Rs_Zoucode,rscode
set rs_NT=server.CREATEOBJECT("adodb.recordset")
dim ZOU_ID,NT_strname,NT_strENname,NT_txtpic,NT_strcode
    ZOU_ID=request("ZOU_ID")
	NT_strname=request("NT_strname")
	NT_strENname=request("NT_strENname")	
	NT_txtpic=request("NT_txtpic")

		if NT_strname<>""  then
		
				Set Rs_Zoucode=CreateObject("adodb.recordset")
				Rs_Zoucode.open"select ZOU_strcode from LS_ZOU where ZOU_ID="&ZOU_ID,conn,1,1
					set rscode=server.CREATEOBJECT("adodb.recordset")
					 rscode.open "select max(NT_strcode) from LS_National where left(NT_strcode,2)='"&Rs_Zoucode("ZOU_strcode")&"'",conn,1,1
						if not isnull(rscode(0)) then
							code=rscode(0)
							acode=right(code,2)+1
							 if len(acode)=1 then
							 NT_strcode=Rs_Zoucode("ZOU_strcode")&"0"&acode
							 elseif len(acode)=2 then
							 NT_strcode=Rs_Zoucode("ZOU_strcode")&acode
							 end if
					   else 
						  NT_strcode=Rs_Zoucode("ZOU_strcode")&"01"
					   end if
					rscode.Close
				Rs_Zoucode.Close
			   rs_NT.open "select * from LS_National where NT_strname='" & NT_strname & "'",conn,1,3
			if not rs_NT.eof then
			   response.Write "<script>alert('�ù������Ѵ��ڣ���������������ԣ�')</script>"
			else
				rs_NT.addnew
				rs_NT("ZOU_ID")=ZOU_ID
				rs_NT("NT_strname")=NT_strname
				rs_NT("NT_strENname")=NT_strENname
				rs_NT("NT_txtpic")=NT_txtpic
				rs_NT("NT_strcode")=NT_strcode
				rs_NT.update
				response.Write "<script>alert('�����ɹ����������������������')</script>"
				rs_NT.close
				response.Redirect "National.asp"
			end if
		end if
%>
<html>
<head>
<link href="../css/normal.css" rel="stylesheet" type="text/css" />

<style type="text/css">
<!--
.STYLE1 {color: #FFFFFF}
.STYLE2 {color: #FFFFFF; font-weight: bold; }
-->
</style>
</head>
<body>
<!--#include file="../include/head.asp" --> 

<%
if request.Form("action")="del" then
   set drs=server.CreateObject("adodb.recordset")
   for each del in request.Form("del")
	   drs.open "select * from LS_Rank where NT_ID="&del,conn,1,1
	   if not drs.eof and not drs.bof then
	      response.Write "<script>alert('�ù����»��м��𣬲���ɾ����')</script>"
		  exit for
	   end if
	   drs.close
	   conn.execute "delete from LS_National where NT_ID="&del
   next
   set drs=nothing
end if
  stxt=trim(request("SearchText"))
  sname=trim(request("searchname"))
   page=request("page")
   if page="" then page=1
  if request.Form("searchstatus")=1 then
      stxt=trim(request("SearchText"))
 	  sname=trim(request("searchname"))
	  page=1
  end if

%>
<form method="get"  name="search"  action="">
<table cellpadding="4" cellspacing="1" class="t_border" width="90%" align="center">
   <tr class="t_header">
      <td colspan="6" height="30" align="left">
	        ���ҹ���	  &nbsp;<a href="ZOU.asp"> <!--#include file="menu.asp" --></a></td>
   </tr>

   <tr class="t_middle">
     <td height="25" width="10%">������</td>
	 <td><input type="text" name="SearchText" value="<%=request("SearchText")%>" size="30">
	 
	   <select name="searchname">
         <option value="0" selected>��ѡ�����</option>
         <%
      set rs=server.CreateObject("adodb.recordset")
	  rs.open "select * from LS_ZOU ORDER BY ZOU_strcode ASC",conn,1,1
	  do while not rs.EOF
   %>
         <option value="<%=rs("ZOU_ID")%>"><%=rs("ZOU_nvarname")%></option>
         <%
	 rs.MoveNext
	 loop
	 rs.Close
    %>
       </select>
	   <input type="submit" value=" �� �� ">
	 <div id="SearchTxtDiv" style="visibility:hidden; position:absolute"></div>	 </td>
   </tr>
</table>
</form>
<form action="" method="post" name="frm">
<input type="hidden" name="action" value="del">
	<table width="90%" height="92" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#698CC3">
	
     <tr>
       <td height="22" align="center" bgcolor="#698CC3"><span class="STYLE1">���Ҵ���</span></td>
       <td align="center" bgcolor="#698CC3"><span class="STYLE1">��������</span></td>
       <td align="center" bgcolor="#698CC3"><span class="STYLE1">����������</span></td>
       <td align="center" bgcolor="#698CC3"><span class="STYLE1">����</span></td>
     </tr>
   <%
   if stxt<>""and sname<>"" then
      sql=" where NT_strname like '%"&stxt&"%' and ZOU_ID='"&sname&"'"
   elseif stxt=""and sname<>"" then
       sql="where ZOU_ID='"&sname&"'"
   elseif stxt<>""and sname="" then
      sql=" where NT_strname like '%"&stxt&"%'"
   else
      sql=""
   end if
	  searchstr="&SearchText="&request("SearchText")&"&searchname="&request("searchname")
   set rs=server.CreateObject("adodb.recordset")
   rs.open "select * from LS_National "&sql&" order by NT_strcode asc",conn,1,1
   rs.pagesize=10
   pagecounts=rs.pagecount
   recordcounts=rs.recordcount
   if rs.eof and rs.bof then
   %> 
 <tr class="t_middle">
       <td height="25" colspan="5" align="center" bgcolor="#FFFFFF">
	       ��û�������Ϣ	   </td>
   </tr>
   <%
   else
     rs.AbsolutePage=page
     for i=1 to rs.pagesize
       if rs.eof then exit for
   %>       <tr>

       <td align="center" bgcolor="#FFFFFF"><%=rs("NT_strcode")%></td>
       <td align="center" bgcolor="#FFFFFF"><%=rs("NT_strname")%></td>
       <td align="center" bgcolor="#FFFFFF">
              <%
				Set Rs_Zou=CreateObject("adodb.recordset")
				sql="select ZOU_nvarname from LS_ZOU where ZOU_ID="&rs("ZOU_ID")
				Rs_Zou.open sql,conn,1,1
			    Response.Write(Rs_Zou("ZOU_nvarname"))
				Rs_Zou.Close
		        %>	   
	   </td>
       <td align="center" bgcolor="#FFFFFF"><a href="edit_National.asp?NT_ID=<%=rs("NT_ID")%>">�޸�</a>
         <input type="checkbox" name="del" value="<%=rs("NT_ID")%>"></td>
     </tr>
     <%
      rs.movenext
     next
	 %>	
	 <tr><td colspan="12" align="right" bgcolor="#FFFFFF">ȫѡ
			<input type="checkbox" name="checkALL"  id="checkALL"value="Check All" onClick="checkall()">
			<input type="submit" name="Submit" class=go-wenbenkuang value="ɾ ��" onClick="return test();">
		</td>
	 </tr>
	 <%
   end if
   rs.close
   set rs=nothing
   %>	 
</table>
</form>
<%
if pagecounts>1 then
%>
<table align="center" width="90%" cellpadding="4" cellspacing="1" class="t_border">
<tr align="center" class="t_middle"><td height="30">����<%=recordcounts%>����Ϣ ��<font class="orangebold"><%=page%></font>/<%=pagecounts%>ҳ 
<%
if cint(page)<=1 then
%>
��ҳ ��һҳ
<%
else
response.Write "<a href='?page=1"&searchstr&"'>��ҳ</a> <a href='?page="&page-1&SearchText&"'>��һҳ</a> "
end if
if cint(page)>=pagecounts then
%>
  ��һҳ ���
<%
else
  response.Write "<a href='?page="&page+1&searchstr&"'>��һҳ</a> <a href='?page="&pagecounts&searchstr&"'>���</a> "
end if
%>
   ��ǰ
<select onChange="window.location.href='?page='+this.options[this.selectedIndex].value+'<%=searchstr%>'">
<%
for y=1 to pagecounts
 if cint(page)=y then
    response.Write "<option value="&y&" selected>"&y&"</option>"
 else
    response.Write "<option value="&y&">"&y&"</option>"
 end if
next
%>
</select>ҳ</td></tr>
</table>
<%end if%>
<script language="javascript">
<!--
function isok(theform)
{
if (theform.ZOU_ID.value==0)

  {
    alert("��ѡ����ޣ�");
    theform.ZOU_ID.focus();
    return (false);
  }

if (theform.NT_strname.value.length<2)

  {
    alert("�������Ʋ���Ϊ�գ�");
    theform.NT_strname.focus();
    return (false);
  }

return (true);
}
-->
</script>
   <form id=frm01 name=frm01 method="post" action="National.asp" onSubmit="return isok(this)" >
     <table width="90%" border="0" align="center" cellpadding="0" cellspacing="2" bgcolor="#698CC3">
    <tr>
      <td height="30" align="center" class="STYLE2">��ӹ���</td>
    </tr>
    <tr>
      <td height="159" bgcolor="#F8F8F8"><table width="55%" height="114" border="0" align="center" cellpadding="0" cellspacing="5">
        <tr>
          <td width="27%">����������</td>
          <td width="73%"><select name="ZOU_ID">
              <option value="0" selected>��ѡ�����</option>
              <%
      set rs=server.CreateObject("adodb.recordset")
	  rs.open "select * from LS_ZOU ORDER BY ZOU_strcode ASC",conn,1,1
	  do while not rs.EOF
   %>
              <option value="<%=rs("ZOU_ID")%>"><%=rs("ZOU_nvarname")%></option>
              <%
	 rs.MoveNext
	 loop
	 rs.Close
    %>
            </select>          </td>
        </tr>
        <tr>
          <td>��������</td>
          <td><input type="text" name="NT_strname" /></td>
        </tr>
        <tr>
          <td>����Ӣ������</td>
          <td><input type="text" name="NT_strENname" /></td>
        </tr>
        <tr>
          <td>ͼƬ�ϴ�:</td>
          <td><input type="text" name="NT_txtpic" />
              <input type="button" name="Button" value="ѡ��ͼƬ" 
		      onClick="javascript:window.open('../include/PhotoSelect.asp?PhotoUrlID=0', 'selupfile', 'width=800, height=600, toolbar=no,              menubar=no, scrollbars=yes, resizable=no, location=no, status=yes');">
              <iframe style="top:2px" id="UploadFiles" src="../include/Upload_Photo.asp?PhotoUrlID=0" frameborder="0" scrolling="No" width="320" height="25"> </iframe></td>
        </tr>
        
        <tr>
          <td>&nbsp;</td>
          <td><input type="submit" name="Submit2" value="�ύ" />
            &nbsp;
            <input type="reset" name="Submit2" value="����" />
&nbsp;
<input name="button" TYPE="button" onCLICK="history.back(-1)" value="����"></td>
        </tr>
      </table></td>
    </tr>
  </table>
   </form>

<!--#include file="../include/foot.asp" --> 
</body>
</html>