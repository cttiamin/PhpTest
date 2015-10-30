<HTML>
<HEAD><TITLE>浏览器能力检测示例</TITLE></HEAD>
<BODY>
<%
Set MyBrow=Server.CreateObject("MSWC.BrowserType")
%>
你的浏览器有如下特性：
<P>
浏览器类型:<%=MyBrow.Browser %></br></br>
是否支持分屏:<%=MyBrow.Frames %></br></br>
Cookies:<%=MyBrow.Cookies %></br></br>
操作平台:<%=MyBrow.platform %></br></br>
VBScript:<%=MyBrow.vbscript %></br></br>
宽度：<%=MyBrow.width %></br></br>
高度<%=MyBrow.height %></br></br>
可用宽度：<%=MyBrow.availHeight %></br></br>
可用高度：<%=MyBrow.availWidth %></br></br>
缓冲深度<%=MyBrow.bufferDepth %></br></br>
色深：<%=MyBrow.colorDepth %></br></br>
系统语言：<%=MyBrow.systemLanguage %></br></br>
用户语言<%=MyBrow.userLanguage %></br></br>
支持java<%=MyBrow.javaapplets %></br></br>

</BODY>
</HTML>
