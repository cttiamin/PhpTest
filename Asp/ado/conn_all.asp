<%
dim conn
dim connstr
dim Date_Type


Call Drive_Access					'���ݿ�ʹ��Access
'Call Drive_SQL_Server					'���ݿ�ʹ��SQL Server


set conn=Server.CreateObject("ADODB.CONNECTION")
conn.open connstr


Sub Drive_SQL_Server()					'����SQL Server
	connstr="Driver={sql server};"
	connstr=connstr & "uid=omnipotence;"		'�ʺ�
	connstr=connstr & "pwd=omnipotence;"		'����
	connstr=connstr & "database=omnipotence;"	'����
	connstr=connstr & "server=(local)"		'��ַ

	Date_Type="SQL_Server"
End Sub


Sub Drive_Access()					'����Access
	dim db
	db=Server.MapPath(Test_URL_Path & "/asp-bin")+"\_Database\Website.mdb"

	connstr="Provider=Microsoft.Jet.OLEDB.4.0;Data Source=" & db

	'�����ķ��������ý��ϰ汾Access�����������������ӷ���
	'connstr="Driver={Microsoft Access Driver (*.mdb)};dbq=" & db

	Date_Type="Access"
End Sub


Sub DisConnection()
	conn.close
	set conn=nothing
End Sub


'�Զ��ضϹ������ַ�
Function ShowField(strFieldName,FieldMaxLen)
	'strFieldName�ǲ�������FieldMaxLen��������ʾ�ĳ���

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
