{config_load file="smarty.conf" section="showtopic" }
<html>
 <head>
   <title>{$article.title}</title>
   <LINK href="css/css.css" type=text/css rel=stylesheet>
 </head>
 <body> 
<div class="mainbox viewthread">		
<h1>{$article.title}</h1>
<table id="pid1059839" cellpadding="0" cellspacing="0">
<tr>
<td class="postauthor">								
<div class="postinfo">
{*发帖人和发帖日期*}
<h2>{$article.user}</h2>{#posttime#}{$article.posttime|date_format:"%Y-%m-%d"}
</div>
<hr>			
<div class="postmessage defaultpost">
{*发帖的内容*}
{$article.content} 													
</div>
</div>
</td>
</tr>
</table>
<ul>									
<li>
<a href="{#indexpage#}">{#goindex#}</a>								
</li>
</ul>
</div>
 </body>
</html>




