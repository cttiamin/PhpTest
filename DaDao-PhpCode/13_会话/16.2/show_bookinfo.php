<?php

include_once("book.class.php");
session_start();
$bookinfo=$_SESSION['bookinfo'];
?>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td>�鼮���</td>
    <td>�鼮��</td>
    <td>�鼮�۸�</td>
    <td>�鼮����</td>
  </tr>
  <tr>
    <td><?php echo $bookinfo->getbook_number();?></td>
    <td><?php echo $bookinfo->getbook_name();?></td>
    <td><?php echo $bookinfo->getbook_price();?></td>
    <td><?php echo $bookinfo->getbook_author();?></td>
  </tr>
</table>
