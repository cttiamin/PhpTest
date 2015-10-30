<%
dim conn
dim connstr
dim Date_Type


Call Drive_Access					'数据库使用Access
'Call Drive_SQL_Server					'数据库使用SQL Server


set conn=Server.CreateObject("ADODB.CONNECTION")
conn.open connstr


Sub Drive_SQL_Server()					'驱动SQL Server
	connstr="Driver={sql server};"
	connstr=connstr & "uid=omnipotence;"		'帐号
	connstr=connstr & "pwd=omnipotence;"		'密码
	connstr=connstr & "database=omnipotence;"	'库名
	connstr=connstr & "server=(local)"		'地址

	Date_Type="SQL_Server"
End Sub


Sub Drive_Access()					'驱动Access
	dim db
	db=Server.MapPath(Test_URL_Path & "/asp-bin")+"\_Database\Website.mdb"

	connstr="Provider=Microsoft.Jet.OLEDB.4.0;Data Source=" & db

	'如果你的服务器采用较老版本Access驱动，请用下面连接方法
	'connstr="Driver={Microsoft Access Driver (*.mdb)};dbq=" & db

	Date_Type="Access"
End Sub


Sub DisConnection()
	conn.close
	set conn=nothing
End Sub


'自动截断过长的字符
Function ShowField(strFieldName,FieldMaxLen)
	'strFieldName是操作对象，FieldMaxLen是允许显示的长度

	dim strShow

	if IsNull(strFieldName) or strFieldName="" then
		Exit Function
	end if

	if len(strFieldName)<=FieldMaxLen then
		strShow=strFieldName
	else
		strShow=left(strFieldName,FieldMaxLen) + "..."
	end if

	ShowField=strShow
End Function


Function changetime(str)
	if IsNULL(str) then
		changetime=""
		Exit Function
	end if

	dim mytime
	mytime=month(str) & "/" & day(str) & "/" & year(str)
	changetime=mytime
end Function
%>
