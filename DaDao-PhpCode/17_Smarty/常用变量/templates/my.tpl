<html>
<head>
<title>{$title}</title>
</head>
<body>
hello,{$name}{*����ע�͵Ĳ���*}</br>

{*�ⲿ���Ƕ���ģ�����*}
{assign var="message" value="��ӭ�����й�"}
{$message}</br>

{*�ⲿ���Ƕ��屣������*}
{$smarty.get.username}</br>

{*�ⲿ���Ǳ����������ʳ���*}
{$smarty.const.ME};</br>

{*�ⲿ���Ǳ�����������smarty�еı�����smarty�İ汾�� *}
{$smarty.version};</br>
{*smarty�����ҷָ���*}
{$smarty.rdelim};</br>

</body>
</html>