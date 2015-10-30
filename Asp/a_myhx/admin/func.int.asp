<%
'字符串过虑，使用固定的替换规则
'str 原始字符串
'length 字符串允许的最大长度，为 0 则不限制字符串长度
Function fixedReplaceStr(str, length)
	str = trim(str)
	if str = "" then fixedReplaceStr = str

	str = replace(str, "'", "‘")
	str = replace(str, ";", "；")
	str = replace(str, "--", "- -")
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


function checkstr(str,lx)
	if lx="" then lx="1" 
	if len(str)=0 or isnull(str) then str=""

	dim re, str1, str2, xx, xx1, xx2, newstr

    Set re = new RegExp
    re.IgnoreCase = true
    re.Global = True

    re.Pattern="(>"+chr(13)+")"
    str=re.Replace(str,">")
    re.Pattern="(> "+chr(13)+")"
    str=re.Replace(str,">")
    re.Pattern="(>  "+chr(13)+")"
    str=re.Replace(str,">")

	str1=""
	str2=str
	
	xx1=1
	xx=inStr(xx1,str,"<table")
	do while xx>0
		str1=mid(str,xx1,xx - xx1)

		xx2=inStr(xx+6,str,"table>")
		if xx2>0 then		
			ystr=mid(str,xx,xx2 + 6 - xx)
	    else
			xx2=len(str)
			ystr=mid(str,xx)
		end if	
		newstr=newstr+addline(str1,lx)+ystr
		
		xx1=xx2+6
		xx=inStr(xx1,str,"<table")
	loop
	if xx1<len(str) then
		str1=mid(str,xx1)
		newstr=newstr+addline(str1,lx)
	end if
	if left(lcase(newstr),6)<>"<table" then
		if lx="1" then
			newstr="&nbsp;&nbsp;&nbsp;&nbsp;"+newstr
		end if			
	end if	
	checkstr=newstr
end function	

function addline(str,lx)
	if lx<>"1" then lx = "2" 
	if len(str)=0 then	str=""
	
    dim re

	Set re=new RegExp
    re.IgnoreCase =true
    re.Global=True

    re.Pattern="(script)"
    str=re.Replace(str,"sc ript")

    re.Pattern="("+chr(13)+")"
	if lx="2" then
		str=re.Replace(str,"<br>")
	else	
	    str=re.Replace(str,"<br>&nbsp;&nbsp;&nbsp;")
	end if

	addline=str
end function	

function mydate(dd)
	if dd="" then
		mydate=""
	else
		mydate=year(dd)&"-"&month(dd)&"-"&day(dd)&" "&formatdatetime(dd,4)
	end if	
end function

function subss(ss,sublen)
	dim i,tot,sstot
	ss=trim(ss)
	sstot=len(ss)
	tot=0
	i=0
	do while tot<sublen and i<sstot
		i=i+1
		if asc(mid(ss,i,1))>0 then
			tot=tot+1
		else
			tot=tot+2		
		end if
	loop
	subss=left(ss,i)
end function

function newtemp()
	newtemp=""
	for i=1 to 4
		Randomize
		if i mod 2=1 then
			newtemp=newtemp&chr(int(rnd*26)+97)
		else
			newtemp=newtemp&chr(int(rnd*10)+48)
		end if	 
	next
end function

function getPageStr(baseURL, baseclass, classcode, page, pageCount)
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
	if page > pageCount then page = pageCount

	dim str
	str = ""
	
	if page > 1 then
		str = str & "<td><a href="&baseURL&"baseclass="&baseclass&"&classcode="&classcode&"&pageno="&(page-1)&">上一页</td>"
	else
		str = str & "<td ></td>"
	end if

	str = str & "<td  align='center' class='font1'>" & page & "/" & pageCount & "</td>"

	if page < pageCount then
		'str = str & "<td width='82%'><a href="&baseURL&"pageno="&(page+1)&"><img src='images/news/bt_2.gif' border='0'></a></td>"
		str = str & "<td ><a href="&baseURL&"baseclass="&baseclass&"&classcode="&classcode&"&pageno="&(page+1)&">下一页</a></td>"
	else
		str = str & "<td ></td>"
	end if

	getPageStr = str
end function


function getApplicationStr(ext)
	select case ext
		case "gif":getApplicationStr = "image/gif"
		case "jpg":getApplicationStr = "image/jpeg"
		case "jpeg":getApplicationStr = "image/jpeg"
		case "bmp":getApplicationStr = "image/bmp"
		case "png":getApplicationStr = "image/png"
		
		case "swf":getApplicationStr = "application/x-shockwave-flash"
		case "zip":getApplicationStr = "application/zip"
		case "rar":getApplicationStr = "application/x-rar-compressed"
		case "exe":getApplicationStr = "application/x-msdownload"

		case "pdf":getApplicationStr = "application/pdf"
		
		case "doc":getApplicationStr = "application/msword"
		case "xls":getApplicationStr = "application/vnd.ms-excel"
		case "mht":getApplicationStr = "message/rfc822"
		case else:getApplicationStr = "text/html"
	end select
end function
%>