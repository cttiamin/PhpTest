{config_load file="smarty.conf" }
<html>
 <head>
   <title>{#pagetitle#}</title>
   <LINK href="css/css.css" type=text/css rel=stylesheet>
 </head>
 <body>
 <div class="mainbox threadlist">
 <div class="headactions">
</div>
<h1>{#pagetitle#}</h1>
 <table class="portalbox"  cellpadding="0" cellspacing="1" >
 <thead class="separation">
  <tr>
 <td>{#title#}</td>
 <td>{#user#}</td>
  <td>{#posttime#}</td>
  <td>{#operation#}</td>
 </tr>
  </thead>
  {section name=topic loop=$article } 
 <tr>
 <td>{$article[topic].title}</td>{*帖子的标题*}
 <td>{$article[topic].user}</td>{*发帖人*}
  <td>{$article[topic].posttime|date_format:"%Y-%m-%d"}</td>{*发帖时间*}
   <td><a href="showContent.php?id={$article[topic].id}">{#operation#}</a></td>{*查看帖子内容*}
 </tr>
 {sectionelse}
 <tr>
 <td colspan="4">{#notopic#}</td>
 </tr>
 {/section} 
 </div>
 <div class="pages_btns">
 <tr>
 <td colspan="4" >
 <div class="pages">
 <form method="get" action="">
{#totaltopic#}{$total}  {*总帖子数*}
{#di#}{$currentPage}/{$totalPage}{#ye#}{*第几页*}
{$first}{*首页*}
{$back}{*上一页*}
{$links}{*所有页的链接*}
{$next}{*下一页*}
{$last}{*尾页*}
<input name="page" type="text" size="1" value="{$currentPage}" >
<input type="submit" value="{#btnValue#}" >
</form> 
</div>
</div>
 </td>
 </tr> 
 </table>
 </body>
</html>