<?php
include("conn.php");
$query="CREATE TABLE item ( item_id INTEGER NOT NULL PRIMARY KEY , item_number 	VARCHAR ( 25 ) NOT NULL ,
item_name VARCHAR ( 25 ) NOT NULL,item_price FLOAT NOT NULL,item_type VARCHAR( 25 ) NOT NULL)";
@$conn ->query($query);
$query="INSERT INTO item (item_number,item_name,item_price,item_type) 
VALUES ('b200132','PHP5',55.5,'Êé¼®')";
@$conn ->query($query);
?>
