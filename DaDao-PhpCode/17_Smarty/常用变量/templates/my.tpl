<html>
<head>
<title>{$title}</title>
</head>
<body>
hello,{$name}{*这是注释的部分*}</br>

{*这部分是定义模板变量*}
{assign var="message" value="欢迎来到中国"}
{$message}</br>

{*这部分是定义保留变量*}
{$smarty.get.username}</br>

{*这部分是保留变量访问常量*}
{$smarty.const.ME};</br>

{*这部分是保留变量访问smarty中的变量：smarty的版本号 *}
{$smarty.version};</br>
{*smarty的左右分隔符*}
{$smarty.rdelim};</br>

</body>
</html>