<?php
session_start();
unset($_SESSION['u_name']);
echo "<script language='javascript'>";
echo "location='index.php';";
echo "</script>";
?>
