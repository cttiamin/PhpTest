<?php 
$conn = ftp_connect("127.0.0.1","21","30");
if ($conn) {
	$session = ftp_login($conn,"admin","admin");
	if ($session) {
		if ($session) {
			$aa = ftp_chdir($conn, "aa.txt");
			echo $aa;
		}
	}
}
ftp_quit($connection);

?>