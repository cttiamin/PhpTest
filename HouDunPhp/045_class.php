<?php
//session_start();
//include('global.php');
echo "<br/>";
//$chanel= new JmMysql($mydbhost,$mydbuser,$mydbpw,$mydbname,'Null',$mydbcharset);
/*
class Channel extends API{
    function __construct(){
        parent::__construct();
        $access = $_GET['access'];
        if($access=='admin'){
            $method = $_GET['a'];
            $this->_display();
        }else{
            $this->display("你没有权限");
        }
    }
    function _edit(){
        echo "编缉栏目";
    }
    function _del(){
        echo "删除栏目";
    }
    function _display(){
        echo "显示栏目";
    }
}

$channel = new Channel();

class API{
	function __construct(){
		//date_default_timezone_set('PRC');   
        //setlocale(LC_TIME, 'chs');
        self::_config();
        self::_include();       
	}
	static function _config(){
        echo "<br/>配置环境成功";
        //die("配置环境不成功");
	}
	static function  _include(){
        echo "<br/>载入文件成功";
       // die("载入文件不成功");
    }
    function display($content){
        echo "<h1 style='color:#333 1px solid;'>$content</h1>";
    }
    public function dump($content){
        echo "<pre>";
        print_r($content);
    }
}
 */
/*
class dongwu{
    function yundong(){
        echo "动物在跑";
    }
}
class yu extends dongwu{
    function yundong(){
        echo "鱼在游";
    }
}
class niao extends dongwu{
    function yundong(){
        echo "飞";
    }
}
class chongwu{
    private $congwu;
    function __construct($type){
        $this->congwu = new $type();
    }
    function yundong(){
        $this->congwu->yundong();
    }
}
$congwu = new chongwu('niao');
$congwu->yundong();

abstract class jiaotonggongju{
    private $mingcheng;
    private $jiaget;
    private $pinpai;
    private $zaihuoliang;
    abstract function yundong();
}
class moto extends jiaotonggongju{
    function yundong(){    
    return "2个轮子在路上";
    }
}
class car extends jiaotonggongju{
    function yundong(){    
        return "4个轮子在路上跑";
    }
}
class plane extends jiaotonggongju{
    function yundong(){    
        return "在天空上飞";
    }
}
class luocuan extends jiaotonggongju{
    function yundong(){    
        return "在水上航行";
    }
}
 
abstract class dongwu{
    private $tiji;
    private $yiansi;
    abstract function fanzhi();
}
class ji extends dongwu{
    function fanzhi(){
        return "产蛋！";
    }
}
class zhu extends dongwu{
    function fanzhi(){
        return "产仔";
    }
}
class yu extends dongwu{
    function fanzhi(){
        return "产鱼！";
    }
}

class yangsha{
    function __construct($type){
        $zai=new $type();
    }
    function fan(){
        
    }
}
$yang = new yu();
echo $yang->fanzhi();



abstract class a {
    function _a(){
        echo 111;
    }
}
class b extends a{
}
$aa= new b();
$aa->_a();

interface bing{
    function shengao();
    function shili();
    function zhengzhi();
    function ganyian();
}

class bubing implements bing{
    function shengao(){}
    function shili(){}
    function zhengzhi(){}
    function ganyian(){}
}

class kongjun implements bing{
    function shengao(){}
    function shili(){}
    function zhengzhi(){}
    function ganyian(){}

}

class haijun implements bing{
    function shengao(){}
    function shili(){}
    function zhengzhi(){}  
    function ganyian(){}
}
 */

/*
interface usb{
    function connect();
    function quit();
}
interface chaxianban{
    const DIANYA = '220V';
    public function caru();
    public function bacu();
}

class souji  implements usb,chaxianban
{ 

    function connect(){
    echo "手机在充电，显示手机内容";
    }
    function quit(){
    echo "手机停止充电，退出！";
      }   
    function caru(){
        echo "手机通过".self::DIANYA."插线板充电";
        
    }   
    function bacu(){
    echo "手机断电拔出！";
    }
}
class xiangji implements usb,chaxianban{
    function connect(){
    echo "像机插到USB上，显示图片";
    }
    function quit(){
    echo "像机退出！";
      }   
    function caru(){
    echo "像机通过插线板充电";
    }   
    function bacu(){
    echo "像机断电拔出！";
    }
}

class cxb{
    function caru($obj){
        $obj = new $obj();
        $obj->caru();
    }
    function bacu($obj){
        $obj = new $obj();
        $obj->bacu();
    }
}
$cxb = new cxb();
$cxb->caru('souji');




class Cellphone implements usb{
    function connect(){}
    function quit(){}

}

class CellphoneScreen extends Cellphone{
    function connect(){}
    function quit(){}
}
abstract class CellphoneKeyboard extends CellphoneScreen{
    function __construct(){}
    function connect(){}
    function quit(){}
}
class CellphoneShutdown extends CellphoneKeyboard{
    function connect(){}
    function quit(){}

}
class CellphoneBoot extends CellphoneShutdown{
    function connect(){}
}

 */

/*
interface channel{
    function edit();
    function del();
}
class arcChannel implements channel{
    function edit(){
        echo "文章栏目管理";
    }
    function del(){
        echo "文章栏目删除";
    }
}
class infoChannel implements channel{
    function edit(){
        echo "分类信息栏目管理";
    }
    function del(){
        echo "分类信息栏目删除";
    }
}
class admin{
    function channel($type,$action){
        $channel = new $type();
        $channel->$action();
    }
}
$type = $_GET['m'];
$action = $_GET['a'];
$admin = new admin();
$admin->channel($type,$action);
 */
/*
class houdunwang{
    function _hdw(){
        //return __CLASS__;   //得到类名
        //return __METHOD__;  //得到类名,方法名   
        return __FUNCTION__;  //得到方法名   
    }
}

$a=new houdunwang();
echo $a->_hdw();
function a(){
    echo __FUNCTION__;
}
//echo a();

$path = str_replace('\\','/',dirname(__FILE__));
define('WEBDIR',$path);
define('TEMPLATE',WEBDIR.'/template');
//echo $path;
//echo DIRECTORY_SEPARATOR; //自适应斜扛(路径分隔符)

 */
/*
class a{
    public $uname;
    public $num=1;
    function _a(){
        echo "后盾网免费视频";
    }
    function b(){
        echo "php视频教程";
    }
    function __clone(){
       $this->num++;
    }

}

$c = new a();
//$d = $c;
//$c->uname=100;
$e = clone $c;
echo $e->num;
//echo intval($c===$e);   //纯等，还要比较引用
 */

/*
class db{
    private $host;
    private $user;
    private $pwd;
    private $dbname;
    
    function __construct($host,$user,$pwd,$dbname){
        $this->host = $host;
        $this->user = $user;
        $this->pwd = $pwd;
        $this->dbname = $dbname;
    }
    function _conn(){
        $mysqli= new mysqli($this->host,$this->user,$this->pwd,$this->dbname);
    }
    function _gettable(){
        echo "获得表名";
    }
    function _getFields(){
        echo "获取字段列表";
    }
    function _inster(){
        echo "插入数据";
    }
    function _update(){
        echo "更新数据";
    }

    function __toString(){  //输出对象
        //return '33333';
        $method=  implode("<br/>", get_class_methods(__CLASS__));
        //return $method;

        $vars = get_object_vars($this);
        $str ='';

        foreach ( $vars as $k=>$v){
            $str .= $k .'=>'.$v."<br/>";
        }

        return "类名是:".__CLASS__."<h4>属性是:</h4>{$str} <h4>方法是:</h4>{$method}";
         
        //return $vars;
    }
}


$arc = new db('127.0.0.1','root','123456','jm088_m');

echo $arc;
*/

/*
class f{
    function _f(){
        echo "3333333333333";
    }
    function __call($methodName,$args){
        print_r($methodName."不存在");
    }
}
$d= new f();
$d->f1();

*/
/*
class hdw{
    private $name;
    private $age;
    private $money; 
    public $c;
    function __construct($name,$age='',$money){
        $this->name = $name;
        $this->age = $age;
        $this->money = $money;
    }
    function __isset($var){
        $array = array('name','age');

        if(in_array ( $var, $array )){
            echo $var . "属性存在,他的值是：" . $this->$var;
        }elseif(in_array($var,array_keys(get_object_vars($this)))){
            
            echo "不充许检查私有的属性！";
            return;
        }else{
            echo "属性不存在！";
        }
    }
    function __unset($c){
        unset ($this->$c);
    }
    function get_money(){
        echo @$this->money;
    }

}


$lisi = new hdw('李四','22','5500');
//isset($lisi->age);
//echo isset($_GET['page'])?$_GET['page']:1;
//$lisi->c=200;
//echo $lisi->c;
//unset($lisi->c);
//echo @$lisi->c;
//unset($lisi->money);
echo $lisi->get_money();

*/

/*
$array = array("后盾网","bbs.jm088.com","mysql","php","jquery","divcss");
//$str = serialize($array);
//echo $str."<br/>";
//$arr = unserialize($str);
//print_r($arr);
$_SESSION['array1'] = serialize($array);
 */
/*
class db{
    private $host;
    private $user;
    private $pwd;
    private $dbname;
    private $mysqli;

    function __construct($host,$user,$pwd,$dbname){
        $this->host = $host;
        $this->user = $user;
        $this->pwd = $pwd;
        $this->dbname = $dbname;
        $this->db();
    }
    function db(){
        $this->mysqli = new mysqli($this->host,$this->user,$this->pwd,$this->dbname);
    }

    function select() { 
        $this->mysqli->query('SET CHARSET UTF8');
		$sql = "SELECT p_id,p_title FROM pro_base";
		$result = $this->mysqli
			->query ( $sql );
		$rows = array ();
		while ( $row = $result->fetch_assoc () ) {
			$rows [] = $row;
		}
		ECHO "<PRE>";
		print_r ( $rows );
    }
    function __wakeup(){//反序列化调用函数
        $this->db();
    }

}
//session_start();
$channel = new db('localhost','root','123456','jm088_m');
//$_SESSION['channel_obj'] = serialize($chanel); //序列化,其它页面可用
//$channel_obj = unserialize($_SESSION['channel_obj']); //获取
//var_dump($channel_obj);



//$channel->select();
*/
/*
class ren{
    private $name;
    private $age;
    function __construct($name,$age){
        $this->name = $name;
        $this->age = $age;
    }
    function show()
    {
        echo "姓名是：{$this->name} 年龄是：{$this->age}";
    }
    function __sleep(){
        return array('name','age');//指定内容序列化
        //return array_keys(get_object_vars($this));//指定全部
    }
}
$zao = new ren('赵六',44);
echo serialize($zao);
//$zao->show();
*/

/**
 * 关于对象的函数 get_object_vars($obj)
 * is_subclass_of($obj,$class);
 * interface_exists 检测接口是否已经定义
 **/
/*
class study
{   public $name;
    public $age;
    public $city;
    
    function __construct($name,$age,$city)
    {
        $this->name = $name;
        $this->age = $age;
        $this->city = $city;
    }
    public function say(){
        echo "学生{$this->name}的年龄是{$this->age},他来自{$this->city}市";
    }
}

class HdwStudy extends study
{   public $number;
    function video(){
    echo "{$this->name}在收看后盾网视频";
    }
    
   /// function __construct(argument){    
   // }
}


//$lisi = new study('李四','31','南京'); 
//$lisi->say();
//print_r(get_object_vars($lisi));
//print_r(get_object_vars($lisi));

//$lisi = new HdwStudy('李四','31','南京'); 
//echo get_parent_class('HdwStudy');

//echo is_subclass_of($lisi,'study');// 检测$lisi是否属于study 的子类

interface channel{
    function edit();
    function add();
}
class arc implements channel{
    function edit(){
        echo '修改文章栏目';
    }
    function add()
    {
        echo "添加文章栏目";
    }
}

if(interface_exists('channel')){
    echo "channel接口已经定义";
}else{
    echo "channel没有此接口";
}
 */

/*get_class 获得对象名，区分大小写
 *get_declared_classes() 以数据形式返回当前脚本定义的类
 get_declared_interfaces() 以数据形式返回当前脚本定义的接口
 */
/*
class Ren{
    function _getClass()
    {
        echo get_class();
    }
}


$lisi = new ren();
//echo get_class($lisi);
$lisi->_getClass();

class teacher{  }
class study{}
echo "<pre>";
//print_r(get_declared_classes());

interface usb{
    function conn();
    function quit();
}
interface tv{}
interface car{}
print_r(get_declared_interfaces());
 */


/*method_exists 判断方法是否存在,第一个参数是类名，第二
 * 个为方法
 *property_exists($arc,'id')判断属性是否存在类中,第一个参数是类名或对象，第二为属性名
 $obj instanceof arc 判断一个对象是否属于这个类,is_a php不建议使用
 * */
/*
class index{
    function index(){
        echo "后台登录首页";
    }
}

class ArcChannel{
    public $name;
    public $id;
    function del(){
        echo "删除栏目";
    }
    function add(){
        echo "追加栏目";
    }
}
class arc{
    public $name;
    public $id;
    function index(){
        echo "显示文章列表";
    }
    function del(){
        echo "删除文章";
    }
    function add(){
        echo '追加文章';
    }
}
*/
/*
$action = isset($_GET['a'])?$_GET['a']:'index';
$nethod = isset($_GET['m'])?$_GET['m']:'index';
$obj = new $action();
if(method_exists($obj,$method)){
    $obj->method();
}else{
    die('非法调用方法不存在');
}
 */
/*
$arc = new arc();
//echo property_exists($arc,'id2');

$obj = new arc();
echo $obj instanceof arc;
 */
?>
