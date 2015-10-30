<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
	
</style>
<script type="text/javascript">

</script>
<title>无标题文档</title>
</head>
<body>
<?php 
/**********************************************
	29 师大后主楼916， 2011-12-11 14：28
*/
	//$arr = array('李海','PHP视频教程','29','1982-05-08');print_r($arr);
	//$arr1 = array("uname"=>"江梅","uclass"=>"DIV+CSS","age"=>"44","birth"=>"1958-08-11");
	//print_r($arr1);
/*	$arr3["网站名称"] = "后盾网";
	$arr3["课程"] = "php教程";
	$arr3["课时"] = "300课时";
	print_r($arr3);
*/

/**********************************************
	30 师大后主楼916， 2011-12-11 14：28
	
		implode() 把数组组合成字符串
		explode() 把字符串分割成数组
		in_array() 检测内容是否在数组中
		each()把数组元素拆分成新的数组
		list() 把数组元素赋值给变量
*/

/*	$arr = array("PHP课程","DIVCSS课程","JQUERY","JAVASCRIPT");
	$str = implode(":",$arr);
	//echo $str;
	echo "<pre>";
	$file=array('/uploads/a1.jpg','/uploads/a2.jpg','/uploads/a3.jpg');
	print_r($file);
	$files = implode(',',$file); //分割成字符
	echo $files."<br/>";
	$arr2 = explode(',',$files); //转数组
	print_r($arr2);

*/

/*	$arr3 = array(1,2,3,4,5);
	var_dump(in_array('1',$arr3)); //检测

*/
/*	$arr4 = array("url"=>"bbs.houdunwang.com","webname"=>"后盾网论坛");
	$arr4_1 = each($arr4);
	print_r($arr4_1);
	$arr4_1 = each($arr4);
	echo "<br/>";
	print_r($arr4_1);
	echo "<br>";
*/
/*	print_r($arr4_1);
	//var_dump(each($arr4));
*/

/*	$arr5 = array("url"=>"bbs.houdunwang.com","webname"=>"后盾网视频教程","class1"=>"PHP","class2"=>"DIVCSS");
//类似于 foreach 循环
	while(list($k,$v) = each($arr5)){
		echo $k."=>".$v;
		echo "<br/>";
	}*/

/**********************************************
	31 师大后主楼916， 2011-12-11 15：34
	
		count() 统计数组中元素的个数
		reset() 把数组内部指针移动到数组第一个元素，并返回元素值
		end()   把数组内部指针移动到数组最后一个元素，并返回元素值
		prev()  把数组指针向上移动一位，并返回当前针，如果到结尾返回FALSE,如果当前元素的值为空，或者0，返回FALSE
		next() 把数组指针向下移动一位，并返回当前针，如果到结尾返回FALSE,如果当前元素的值为空，或者0，返回FALSE
		current() 返回当前指针指向的数组元素,如果当前元素为空返回false
		key() 返回当前指针指向元素的键名
*/

//echo "<pre>";

/*$arr = array("houdunwang.com", "后盾网PHP视频", array("php课程","css课程","thinkphp课程") );
echo count($arr,1);
*/
/*
$arr2 = array("houdunwang.com","后盾网PHP视频",0,"mysql视频");
do{
	echo current($arr2)."<br/>";
}while(next($arr2));

while(list($k,$v)=each($arr2)){
		echo $v.'<br/>';
}
*/
/*$arr3 = array("weburl"=>"houdunwang.com","webname"=>"后盾网PHP视频");
echo key($arr3)."<br/>";
next($arr3);
echo key($arr3);
*/



/**********************************************
	34 师大后主楼916， 2011-12-11 15：34
	
		array_fill():(开始键号,生成个数,生成内容),通过指定的索引顺序及个数生成数组
		array_filter()数组过滤函数，通过回调函数的方式返回新数组，如果回调函数返回TRUE，数组元素返回到新数组当中
		array_flip()把数组中的键名与键值进行交换
		array_key_exists()判断内容是否是数组的键名
		array_keys()返回数组中键名,是否有数组中的键值
*/

/*	function dump($arr){
		echo "<pre>";
		print_r($arr);
	}
	
	$arr0 = array_fill(30,2,"后盾网");
	//print_r($arr0);
	$arr1 = array("class1"=>"PHP课程","class2"=>"mysql课程", "webname"=>"后盾网","weburl"=>"bbs.houdunwang.com");
*/ 	
/* 过滤留言敏感字  
	$user1 = array("uname枪支"=>"李海","msg"=>"购买联系电话xxxxx，很高兴认识大家");
	if(array_filter($user1,a)){
		echo "包含非法信息";
	}else{
		echo "留言成功";
	}
	function a($v){
	//查找字符串首次出现的位置
        if( strpos($v,"枪支") )
        {
			return true;
		}
	}
	var_dump($arr0);
 */
/*
	$arr1 = array("class1"=>"1", "class2"=>1, "class3"=>"smarty", "class4"=>"photoshop cs5");
	$arr0 =array_flip($arr1); //键名和值倒换
	//print_r($arr0);
	
	if(array_key_exists("classf2", $arr1)){ //是否是数组中的键名
		echo "是数组的键名";
	}
	$arr0 = array_keys($arr1, "1", false); //是否有数组中的键值
	dump($arr0);
*/


/**********************************************
	35 师大后主楼916， 2011-12-11 15:34
	
 * 34 通过回调函数得到数组交集或差集
 * array_udiff  通过回调函数，比较2个或多个数组的差值，只比较值，不进行键名的比较
 * array_udiff_assoc  通过回调函数，比较2个或多个数组的键名或键值的差值
 *                   ( 带索引检查计算数组的差集，用回调函数比较数据 )
 * array_udiff_uassoc 通过回调函数，比较多个数组的键名和键值，要定义2个回调函数来处理键名和键值的比较
 * array_uintersect        得到多个数组的中键值的交集，通过回函数
 * array_uintersect_assoc  得到多个数组的中键值的交集，通过回函数,键名也参与比较
 * array_uintersect_uassoc 通过2个回函数,对多个数组的键名与键值进行比较，得到多个数组的交集元素
 *
*/
/*
class cr {
    private $priv_member;
    function cr($val){
        $this->priv_member = $val;
    }

    function comp_func_cr($a, $b){
        if($a->priv_member == $b->priv_member) return 0;
        return ( $a->priv_member > $b->priv_member ) ? 1 : -1;
    }
    function comp_func_key($a, $b)
    {
        if ($a === $b) return 0;
        return ($a > $b)? 1:-1;
    } 
}

$a = array('0.1' => new cr(9), '0.5' => new cr(12), 0 => new cr(23), 1=> new cr(4), 2=> new cr(-15)  );
$b = array('0.2' => new cr(9), '0.5'=>new cr(22), 0 => new cr(3), 1=>new cr(4), 2 =>new cr(-15)  );

//$result = array_udiff( $a, $b, array('cr', 'comp_func_cr') ); //不带键名
//$result = array_udiff_assoc( $a, $b, array('cr', 'comp_func_cr') ); //带键名
$result = array_udiff_uassoc($a, $b, array("cr", "comp_func_cr"), array("cr", "comp_func_key"));//键名键值

print_r($result);
*/
/*
$array1 = array('a'=>'green', 'b'=>'brown', 'c'=>'blue', 'red');
$array2 = array('a' =>'GREEN', 'B'=>'brown', 'yellow', 'red');

print_r(array_uintersect($array1, $array2, "strcasecmp"));
*/

/*  ***********************************************************
 *  36_四季青_2012/6/9 17:04
	array_unique  清除数组中的重复项
	array_unshift 向数组的顶部追加数据元素(返回布尔)
	array_shift 删除数组第一个元素，如果删除失败返回null
	array_pop 删除数组的最后一个元素
	array_keys   得到数组的键名，以数组形式返回
	array_values 得到数组的键值 ，以数组的形式返回
*/
/*删除复的数组
$array = array(1, 3, 5, 7, 1, 3);
$array = array_unique($array);
print_r($array);
 */
/*添加一个在第一个
$array = array(1, 3, 5, 7);
if( array_unshift($array, 9) ){
    print_r($array);
}
 */
/* 删除第一个元素 
$array= array(1, 3, 5, 7, 9);
if( !is_null( @array_shift($array) ) )print_r($array);
*/
/* 删除最后一个元素
$array = array(1, 3, 5, 7);
var_dump( @array_pop($array) );
*/
/*
$array2 = array("uname"=>"李飞","age"=>"22","sex"=>"男","qq"=>"2423143","msn"=>"dsfds@hotmail.com");
//$keys = array_keys($array2);  //键名
$keys = array_values($array2);  //键值
print_r( $keys );
 */

/*	***********************************************************
 *	37_四季青_2012/6/9 21:40 
	each 返回数组中的键名和键值生成为新数组，如果指针结束，返回布尔假FALSE
	list 将索引数组的值赋给变量
	array_map 数组的每一个元素，都经过回调函数处理 返回值是处理过的元素组成的新数组
	array_walk 数组中的每一个元素，应用回调函数，成功返回真TRUE 失败返回假
	array_walk_recursive 递归的操作数组，使数组中的元素应用回调函数
 */
/*
$array1 = array(1, 3, 5, 7, 9);
$array_new = each($array1);
print_r($array_new);
 */
/* 
$array1 = array(1, 3, 5, 7, 9);
while (list($k, $v) = each($array1) )
{
    echo "键名:".$k.'=> 键值'.$v.'<br/>';
}
 */
/*
$info = array('coffee', 'brown', 'caffeine');
list($drink, $color, $power) = $info;
//echo '1:'.$drink.'2:'.$color.'3:'.$power;

list($drink, , $power) = $info;
echo '1:'.$drink.'3:'.$power;
*/
/*
$array = array(1, 'PHP测试', 5, '<h1>PHP数组测试!</h1>');
function func_map($v)
{
    return htmlspecialchars($v);
}
$new_array = array_map('func_map', $array);
print_r($new_array);
 */
/*
$array3 = array("李明"=>2244,"王五"=>900,"张三"=>3214,"马四"=>3334);

function func_walk(&$v, $k, $c)
{
    if($v<1000){
        $v += $c;
    }
}
if( array_walk ( $array3, func_walk, 1000) )
{
    echo "加工资成功!<br/>";
    print_r($array3);
}
 */
/* 两个数组合并成一个二维数组
$array = array(1, 3, 5, 7, 9);
$array2 = array('a', 'b', 'c', 'd', 'e');

function func4($array, $array2){
    return array ($array => $array2);
}

$array3 = array_map(func4, $array, $array2);
echo "<pre>";
print_r($array3);
 */

/* 函数处理数组
$arr5 = array(
	array("uname"=>"李四", "money"=>"100"),
	array("uname"=>"张三", "money"=>"200"),
	array("uname"=>"五王", "money"=>"300"),
	array("uname"=>"赵六", "money"=>"400")
);
function func5(&$v, $k){
    if($k== 'money'&& $v<300)
        $v +=1000;
}
array_walk_recursive($arr5, 'func5');
echo '<pre>';
print_r($arr5);
 */

/*	***********************************************************
 *	38_2012/6/11_四季青, 14:38
	compact 将多个变量转化为数组，变量名为数组键名 变量值为数组的键值
	extract 将数组转化为变量  键名做为变量名  键值为变量值 
	in_array 判断元素是否存在于数组中，如果加参数TRUE，同时进行数据类型的判断，返回BOOL类型值	
*/
/*多个变量合并成数组
$webname = '健民网';
$weburl = 'www.jm088.com';
$jm088 = array('webname', 'weburl');
$arr = compact($jm088);
print_r($arr);
 */

/*数组转为多个变量
$webname = '健民网山货品质保证!!';
$jmGlobal = array(
    'webname' => '健民网',
    'weburl' => 'www.jm088.com',
    );

var_dump( extract($jmGlobal, EXTR_REFS) );
echo $weburl;
 */

/************************************************************
 *  39_2012-6-11 15:14	
	array_merge 将多个数组合并，生成新数组
	array_merge_recursive 将多个数组进行合并，如果键名相同，生成二维数组
	array_change_key_case 将数组的键名进行大小写转换
*/
/*
$arr1 = array('weburl' => 'www.jm088.com', 'webname' => '健民网');
$arr2 = array('db_hot' => 'localhost', 'db_user'=>'root', 'db_name' => 'jm088');
$config = array_merge($arr1, $arr2);
print_r($config);
 */
/*生成二维
$arr1 = array('webname'=>'美司网', 'weburl'=>'www.meisi.org');
$arr2 = array('webname'=>'健民网', 'weburl' => 'www.jm088.com');
echo '<pre>';
print_r(array_merge_recursive($arr1, $arr2));
 */
/*
$config = array('WEBNAME' => '健民网', 'weburl' => 'www.jm088.com');
$arr = array('a' => 1);
array_change_key_case($config, CASE_LOWR);
print_r($config);
 */

/* ***********************************************************
 *  40 2012/6/11 四季青 15:36
	range 生成包含指定范围的数组，第三个参数是步长值
	array_count_values 统计数组中值出现的次数，返回统计的数组
	array_pad 对数组进行填充，第2个参数如果是负数，从左侧添加，正数为右侧，第3个参数为填充内容
	array_product 对数组中的键值进行乘积的运算，返加数值类型
*/

/*任意生成指定范围
$trArr = range(1, 20);
$tdArr = range(1, 8);
echo '<table border=1 style="width:800px" cellspacing=1 cellpadding=2>';
foreach($trArr as $tr)
{
    echo "<tr>";
    foreach($tdArr as $td)
    {
        echo "<td style='border:solid 1px #333;'>{$td}</td>";
    }
    echo '</tr>';
}
echo '</table>';
*/
/*
$arr = array('健民网', '新浪网', '健民网', 'QQ网', 'facebok', 'google', 'taobao', 'xuelei', 'taobao', 'yahoo', '新浪');

$count_values = array_count_values($arr);
print_r($count_values);
 */
/* 
$arr2 = array(1, 2, 3);
$newArr = array_pad($arr2, 5, 0);
print_r($newArr);
*/
/*
$arr3 = array(2, 3, 2, 2, 3, 3, 3, 4, 4, 2, 2 );
var_dump(array_product($arr3));
 */

/***********************************************************
	41 2012/6/11 16:45 四季青
	array_push 在数组的末端 增加一个或多个元素，入栈
	array_pop  删除数组末端元素 出栈
	array_rand 随机取得数组元素，如果是取得多个元素返回一元素索引的数组，单个只返回这个元素的元素
	array_reverse 返转数组的内容，如果第2个参数指定为TRUE，保留元素的键名 	
*/

//echo '<pre>';
/*
$arr = array(1, 3, 5);
array_push( $arr, 7 );
print_r($arr);
 */

/*
$kaoti = array 
(
    array (
        "name" => "后盾网都开了哪些课", 
        "type" => "input" 
    ), 
    array (
        "name" => "奥运会是哪年召开的", 
        "type" => "radio", 
        "select" => "1788,1988,2008,1999" 
    ), 
    array (
        "name" => "请写出一个遍历目录的函数", 
        "type" => "textarea" 
    ) 
);
timu ( $kaoti, 2 );
function timu($arr, $num=''){
    $num = empty( $num) ? 1 : $num;
    if( !empty( $arr ) ){
        $tArr = array_rand ( $arr, $num ); //随机取出的题
        //print_r( $tArr ); exit();
		$i = 0;
		while ( $i < $num ) {
			$key = is_array ( $tArr ) ? $tArr [$i] : $tArr;
			switch ($arr [$key] ['type']) {
				case 'input' :
					echo "{$arr[$key]['name']}:<input type='text' name='dn'><br/>";
					break;
				case 'radio' :
					echo $arr [$key] ['name'] . ":";
					$select = explode ( ",", $arr [$key] ['select'] );
					foreach ( $select as $k => $v ) {
						echo "<input type='radio' name='dn'>{$v}&nbsp;&nbsp;&nbsp;<br/>";
					}
					break;
				case 'textarea' :
					echo "{$arr[$key]['name']}<br/><textarea row=40 col=50 name='dn'></textarea><br/>";
					break;
			}
			$i++;
		}
		echo "<br/><input type='submit' value='提交答案'>";        
    }
}
*/
/*
$array3 = array('webname' => '后盾网', 'weburl'=>'houdunwang.com' );
$array4 = array('a', 'b', 'c');
print_r( array_reverse($array4, true) );
 */

/*******************************************************************
    42 2012/6/11 四季青 17:42
	array_reduce 用回调函数迭代的对数组元素进行处理，返回处理后值
	array_slice 截取指定范围的数组元素，第2个参数截取开始位置,第3个截取长度,第4个参数是否保留数字索引值
	array_splice 删除指定范围的数组元素,如果指定第4个参数，则在删除元素位置放入第四个参数的值
	array_sum 对数组中的值进行求合运算
	array_product 对数组中的值进行乘积运算
 */
/*
$array = array(2, 3, 4, 5);
function func($c, $i){
    $c = $c.'==='.$i;
    return $c;
}
echo array_reduce($array, 'func', 1);
*/


?>
</body>
</html>

