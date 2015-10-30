<html>
<head>
<title></title>
</head>
<body>
{if $scope gte 90}
成绩优秀<br>
{elseif $scope gte 70}
成绩良好<br>
{elseif $scope gte 60}
成绩及格<br>
{else}
成绩不及格<br>
{/if}

{foreach from=$notfourseasons item=season key=inkey}
 {$inkey}  
 {$season} 
 <br>
 {foreachelse}
 循环的数组不存在或为空 <br>
{/foreach}

</body>
</html>
