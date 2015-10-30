<%@ Language=VBScript %>
<%
' 注意绝对路径: C:\Inetpub\home\asp\wuf23.asp  主页路径: C:\Inetpub\home
'使用 CreateObject 方法创建 FileSystemObject 对象 FSO
Set FSO = Server.CreateObject("Scripting.FileSystemObject") 
Path = Server.MapPath("test")         '返回test的物理目录(绝对路径)
'就本例而言, 下面这句与上面这句返回的Path完全一样
'Path = Server.MapPath("\asp\test\") 
Response.Write Path & "<Br>"
If FSO.FolderExists(Path) = false then    '判断该文件夹是否存在
	FSO.CreateFolder(Path)                '新建文件夹
End If 
File = Path & "\asptest.txt"
' 写文件操作
If FSO.FileExists(File) = True Then                '判断该文件是否存在
	'建立 TextStream 对象 CTF
  Set CTF = FSO.OpenTextFile(File, 8, False, 0)    '打开文件, 详见说明
Else
  Set CTF = FSO.CreateTextFile(File,False, False)  '新建文件
End If
CTF.Write "第一个字符串; "              '写字符串
CTF.WriteLine "第二个字符串; "             '写字符串, 并加上一个换行符
CTF.Write "第三个字符串; "
CTF.Close                                  '注意要关闭文件 
' 读文件操作
Set CTF = FSO.OpenTextFile(File, 1,,0)
Do While CTF.AtEndOfStream <> True         '判别是否文件结尾（循环语句）
  Str = CTF.ReadLine                       '（每次）读取一行
  StrNoHTML = StrNoHTML & Str & "<BR>" & VbCrLf  
  StrHTML = StrHTML & Server.HTMLEncode(Str) & "<BR>" & VbCrLf  '将换行转成<br>
Loop
Response.Write StrNoHTML
Response.Write StrHTML
CTF.Close
Set CTF = Nothing   '释放对象
Set FSO = Nothing
%>