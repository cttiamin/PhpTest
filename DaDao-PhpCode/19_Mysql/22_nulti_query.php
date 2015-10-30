<?php
//多个查询

$mysqli=new mysqli('localhost','root','123456','sanyang');
$query="select mp_name from employee ;";
$query.="select dep_name from depment";

//执行多个查询
if($mysqli->multi_query($query)){	//调用multi_query这个方法
	do{
		if($result = $mysqli->store_result()){	//store_result:用于获得一个缓冲的结果集,如果存在则循环
			while($row = $result->fetch_row()){		//得到一个数组
				echo $row[0];
				echo "<br>";
			}
			$result->close();		//关闭结果集对象
		}
		//连个查询之间的分割线
		if($mysqli->more_results()){	//more_results();从一个查询中检查是否有更多的查询结果,如果还有更多结果集的话
			echo ("--------------<br>");
		}
	}while($mysqli->next_result());		//循环的条件是 next_result()这个方法,该方法用于多查询中准备下一个查询结果
}
$mysqli->close(); //关闭连接



?>
