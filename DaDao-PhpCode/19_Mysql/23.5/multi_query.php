<?php
$db_host="localhost";//服务器
$db_user="root";//用户名
$db_psw="root";//密码
$db_name="sunyang";//数据库名
$mysqli=new mysqli($db_host,$db_user,$db_psw,$db_name) ;
$query = "select emp_name from employee ;";
$query .= "select dep_name from depment ";
/* 执行多个查询 */
if ($mysqli->multi_query($query)) {
    do {
        if ($result = $mysqli->store_result()) {
            while ($row = $result->fetch_row()) {
                echo $row[0];
                echo "<br>";
            }
            $result->close();
        }
        /* 连个查询之间的分割线 */
        if ($mysqli->more_results()) {
            echo ("-----------------<br>");
        }
    } while ($mysqli->next_result());
}

$mysqli->close();//关闭连接
?>
