<?php
session_start();
if(!isset($_SESSION['u_name'])){
?>

<script language="javascript">
//alert("非法操作");
location='login.php';
</script>
<?php
}
?>
<!--
★☆★☆★☆★☆★☆★☆★☆★☆★☆★☆★☆★☆★☆★☆★☆★☆★☆★
★                                                                  ★
☆ （请保留此处版权信息，这些内容并不会对您的网站运行有任何影响）   ☆
★                                                                  ★
☆               九九久联工作室                                     ☆
★                                                                  ★
☆  版权所有: www.idc999.com                                        ☆
★                                                                  ★
☆  程序制作: idc999开发团队                                        ☆
★            email:xc_huang5849@sina.com                           ★
☆            QQ:59125994 （同电话）                                ☆
★                                                                  ★
☆  相关网址: http://www.idc999.com                                 ☆
★                                                                  ★
☆★☆★☆★☆★☆★☆★☆★☆★☆★☆★☆★☆★☆★☆★☆★☆★☆★☆
-->