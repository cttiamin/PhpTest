<html>
<head>
<title>面向对象基础</title>
</head>
<body>
<?php
class MyClass{
static $staticvariable =0;
}
MyClass::$staticvariable++;
echo "\$staticvariable的值为：".MyClass::$staticvariable;
?>
</body>
</html>
