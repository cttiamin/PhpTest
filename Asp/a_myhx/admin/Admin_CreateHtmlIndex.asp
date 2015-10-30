
<%
if Application("MaxShangpinlist")="" then
 Application.Lock
	Application("MaxSpecialList")="20"
 Application.UnLock
end if

MaxSpecialList=Application("MaxSpecialList")

myurl8d="http://www.glooce.com/"
URL="http://www.glooce.com/index1.asp"

Update=GetURL(URL)
overdate=bytes2bstr2(Update)
Set fso = Server.CreateObject("Scripting.FileSystemObject")
Set fout = fso.CreateTextFile(server.mappath("../index.html"))
fout.WriteLine overdate
fout.close

Const adTypeText = 2

Function GetURL(URL)
    Set Retrieval = CreateObject("Microsoft.XMLHTTP") 
    With Retrieval
        .Open "GET", url, False
        .Send
        GetURL = .responsebody
    End With 
    Set Retrieval = Nothing 
End Function

Function Bytes2bStr2(vin)
 Dim BytesStream,StringReturn

 Set BytesStream = Server.CreateObject("ADODB.Stream")
 With BytesStream
  .Type = adTypeText   
  .Open               
  .WriteText vin           

  .Position = 0            
                           
  .Charset = "GB2312"       
  .Position = 2             
  StringReturn = .ReadText 
  .close                    
 End With
 Set BytesStream = Nothing  
 Bytes2bStr2 = StringReturn
End Function

response.write"<script>alert('首页生成完成 ！^_^');history.back();</script>"
Response.End 
%>
