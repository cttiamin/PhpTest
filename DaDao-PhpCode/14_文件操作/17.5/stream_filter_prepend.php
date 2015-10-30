<?php
$f=fopen("PHP://output","w");
stream_filter_prepend($f,"string.rot13");
fwrite($f,"hello sunyang");
?>