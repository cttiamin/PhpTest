<html>
<head>
<title></title>
</head>
<body>
{if $scope gte 90}
�ɼ�����<br>
{elseif $scope gte 70}
�ɼ�����<br>
{elseif $scope gte 60}
�ɼ�����<br>
{else}
�ɼ�������<br>
{/if}

{foreach from=$notfourseasons item=season key=inkey}
 {$inkey}  
 {$season} 
 <br>
 {foreachelse}
 ѭ�������鲻���ڻ�Ϊ�� <br>
{/foreach}

</body>
</html>
