<script language="vbscript" runat="Server">
sub Application_Onstart
application.Lock
Application("all")=0
Application("online")=0
Application.unlock
end sub

</script>

<script language="vbscript" runat="Server">
sub Application_Onend
end sub
</script>

<script language="vbscript" runat="server">
sub session_onstart
	application.Lock()
	application.("all")=application("all")+1
	application("online")=application("online")+1
	application.UnLock()
</script>

<script language="vbscript" runat="server">
sub session_onend
application("online")=application("online")-1
end sub
</script>