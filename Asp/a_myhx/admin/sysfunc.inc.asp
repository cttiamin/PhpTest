<%
'字符串过虑，使用固定的替换规则
'str 原始字符串
'length 字符串允许的最大长度，为 0 则不限制字符串长度
Function fixedReplaceStr(str, length)
	str = trim(str)
	if str = "" then fixedReplaceStr = str

	str = replace(str, "'", "")
	str = replace(str, ";", "")
	str = replace(str, "--", "")
	str = replace(str, "char", "ch ar")
	str = replace(str, "script", "sc ript")
	
	if length <> "" and Len(str) > length then
		fixedReplaceStr = Left(str, length)
	else
		fixedReplaceStr = str
	end if
End Function


'转换为整型数据
'integer  准备转换的原始数据
'min  允许的最小值，为空则不限制
'max  允许的最大值，为空则不限制
Function toInt(s, min, max)
	if isNumeric(s) and s <> "" then
		s = cLng(s)
	else
		s = min
	end if

	if min <> "" then
		if s < min then s = min
	end if

	if max <> "" then
		if s > max then s = max
	end if

	toInt = s
End Function


function selectxh(fieldname, ordername, byasc, defaultasc)
	if defaultasc <> "asc" then defaultasc = "desc"

	if fieldname = ordername then
		if byasc = "desc" then
			selectxh = "asc"
		else
			selectxh = "desc"
		end if
	else
		selectxh = defaultasc
	end if
end function

function syskeyno(tablename,fieldname)
	set rsa=server.CreateObject("ADODB.Recordset")
	set rsb=server.CreateObject("ADODB.Recordset")

	sqltext="select * from sys_keyno where tablename='"+tablename+"' and fieldname='"+fieldname+"' "
	rsa.Open sqltext,cn,1,3
	if not rsa.EOF then
		rsa("currvalue")=rsa("currvalue")+1
		syskeyno=rsa("currvalue")+1
	else
		sqltext="select "+fieldname+" from "+tablename+" order by "+fieldname+" desc"
		rsb.Open sqltext,cn,1,1
		if rsb.EOF then
			currvalue=0
		else
			currvalue=rsb(0)
		end if					
		rsb.Close
		rsa.AddNew
		rsa("tablename")=tablename
		rsa("fieldname")=fieldname
		rsa("currvalue")=currvalue+1
		syskeyno=currvalue+1
	end if
	rsa.Update
	rsa.Close
    set rsa=nothing
    set rsb=nothing
end function

function mydate(dd)
	if dd="" then
		mydate=""
	else
		mydate=year(dd)&"-"&month(dd)&"-"&day(dd)&" "&formatdatetime(dd,4)
	end if	
end function


function getPageStr(Byval baseURL, Byval page, Byval pageCount)
	if baseURL = "" or isNull(baseURL) then exit function
	if inStr(baseURL, "?") and right(baseURL, 1) <> "?" and right(baseURL, 1) <> "&" then
		baseURL = baseURL & "&"
	else
		baseURL = baseURL & "?"
	end if

	if not isnumeric(page) then page = 1 else page = cint(page)
	if not isnumeric(pageCount) then pageCount = 1 else pageCount = cint(pageCount)
	if page < 1 then page = 1
	if pageCount < 1 then pageCount = 1
	if page < pageCount then page = pageCount

	dim str
	str = "[第&nbsp;<b>" & page & "</b>&nbsp;页 共&nbsp;<b>" & pageCount & "</b>&nbsp;页]&nbsp;&nbsp;"
	
	if page > 1 then
		str = str & "<a href='"&baseURL&"'page=1>[首页]</a>&nbsp;&nbsp;"
		str = str & "<a href='"&baseURL&"'page="&(page-1)&">[上页]</a>&nbsp;&nbsp;"
	end if
	if page < pageCount then
		str = str & "<a href='"&baseURL&"'page="&(page+1)&">[下页]</a>&nbsp;&nbsp;"
		str = str & "<a href='"&baseURL&"'page="&pageCount&">[末页]</a>&nbsp;&nbsp;"
	end if

	getPageStr = str
end function
%>