<%
'Option Explicit

Response.Buffer = True
Dim Conn
Dim Startime
Startime = Timer()

Const SqlDatabaseName = "student"
Const SqlUsername = "sa"
Const SqlPassword = "sa"
Const SqlLocalName = "(local)"
Sub ConnectionDataBase
	On Error Resume Next
	Dim ConnStr
	ConnStr = "Provider = Sqloledb; User ID = " & SqlUsername & "; Password = " & SqlPassword & "; Initial Catalog = " & SqlDatabaseName & "; Data Source = " & SqlLocalName & ";"
	'response.write connstr
	'response.end
	Set Conn = Server.CreateObject("ADODB.Connection")
	Conn.open ConnStr
	If Err Then
		Err.Clear
		Set Conn = Nothing
		Response.Write "数据库连接出错，请检查连接字串。"
		Response.End
	End If
	
End Sub

If Not IsObject(Conn) Then
	Call ConnectionDataBase()
End If

Sub CLoseDB
	If IsObject(Conn) Then
		Conn.CLose()
	End If

	Dim EndTime
	EndTime=timer()
	Response.Write "<br>"
	Response.Write "<center>页面执行时间："&FormatNumber((endtime-startime)*1000,3)&"毫秒</center>"
End Sub
%>

