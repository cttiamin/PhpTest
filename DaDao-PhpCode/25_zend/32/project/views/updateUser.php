<?php
require_once("../models/UserInfo.php");
session_start();
$user=new UserInfo();
$user=$_SESSION['oneUser'];

?>
<HTML>

<HEAD>
<TITLE>
update
</TITLE>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=gb2312">
<link rel="stylesheet" href="images/CSS.CSS" type="text/css">
<style type="text/css">
<!--
.STYLE8 {font-size: 16px; color: #FFFFFF; }
.STYLE9 {font-size: 24px}
.STYLE10 {font-size: 16}
.STYLE12 {font-size: 16; color: #FFFFFF; }
-->
</style>
<SCRIPT ID=clientEventHandlersJS LANGUAGE=javascript>

}

//-->
</SCRIPT>
</HEAD>
<BODY BGCOLOR=#FFFFFF leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="778" border="0" cellspacing="0" cellpadding="0" align="center" height="150">
  <tr> 
    <td colspan="3" height="22"><img src="images/index_top1.gif" width="778" height="22"></td>
  </tr>
  <tr> 
    <td height="160" width="573" background="images/index_top3.gif"> 
      <table border="0" cellspacing="0" cellpadding="0" align="center">
        <tr> 
          <td height="20"> 
            <div align="center"><font color="#FFFFFF"> <b></b></font></div>
          </td>
        </tr>
        <tr> 
          <td> 
            <div align="center"><font color="#FFFFFF"><b><font size="5">
三扬科技
              </font></b></font></div>
          </td>
        </tr>
        <tr> 
          <td><font color="#FFFFFF"><b><font size="4">

SUN YANG KE JI
		  </font></b></font></td>
        </tr>
      </table>
    </td>
    <td height="160" width="160" background="images/01.gif"><img src="images/index_pic.gif" width="160" height="160"></td>
    <td height="160" width="45" valign="top"><img src="images/index_top2.gif" width="45" height="160"></td>
  </tr>
</table>
<table width="778" border="0" cellspacing="0" cellpadding="0" align="center" bgcolor="#FFFFFF" background="images/index_bg.gif">
  <tr> 
    <td width="30" height="687" valign="top"> 
      <p>&nbsp;</p>
    </td>
    <td valign="top">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td><table width="90%" border="0" cellspacing="0" cellpadding="0" align="center">
            <tr>
              <td >
			
                <div align="center">
                  <!--SubButton1-->  
                  <span class="STYLE8">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="STYLE9"> 注册信息			    </span></span>                  </div>
			</td>
            </tr>
            <tr>
              <td bgcolor="#000000"><img src="images/Spacer.gif" width="1" height="1"></td>
            </tr>
            <tr>
              <td><div align="right"> </div></td>
            </tr>
            <tr>
              <td align="center"><p><form action="../controllers/UserInfoController.php" method="post">
<table width="262" height="186">
<input type="hidden" name="action" value="updateUser">
<input type="hidden" name="id" value="<?php echo $user->getId();?>">

<tr>
<td width="216">用户编号：
  <input type="text" name="userno" value="<?php echo $user->getUserNo();?>" ></td>
</tr>
<tr>
<td width="216">用户名称：
  <input type="text" name="username" value="<?php echo $user->getUserName();?>" ></td>
</tr>
<tr>
<td width="216">用户密码： <input type="text" name="password" value=<?php echo $user->getPassword();?>></td>
</tr>

<tr>
<tr>
<td><input type="submit" name="submit" value="提交更新"></td>
</tr>
</table>
</form>	

                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p><br>
                  
                  <b><font size="3"> <a href="buy.html" target="_blank"> </a><br>
                      </font></b>
                  </p>
                </p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p></td>
            </tr>
          </table></td>
        </tr>
        <tr> 
          <td height="213"><table width="90%" border="0" cellspacing="0" cellpadding="0" align="center" class="englishfont" height="1">
            <tr>
              <td bgcolor="#000000"></td>
            </tr>
          </table>
          <?php
include_once("../common/foot.php");
?>
          
                </td>
        </tr>
      </table>
    </td>
    <td width="190" valign="top">
            <table width="190" border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td height="36" align="center" valign="bottom" background="images/index_lmtop.gif">
<!--Language-->
<!--Something Here-->
		  </td>
        </tr>
        <tr> 
          <td> 
<?php
include_once("../common/right.php");
?>
</td>
        </tr>
        <tr>
          <td><img src="images/index_lmbottom.gif" width="190" height="42"></td>
        </tr>
      </table>

    </td>
  </tr>
</table>

</BODY>

</HTML>

