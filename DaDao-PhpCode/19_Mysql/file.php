<?php
$db= sqlite_open("phpsqlite.db");
$sql="create table test (id int,content text,time datetime)";
$result = sqlite_query($db,$sql);


?>
