lastScrollY = 0;
function heartBeat(){
var diffY;
if (document.documentElement && document.documentElement.scrollTop)
diffY = document.documentElement.scrollTop;
else if (document.body)
diffY = document.body.scrollTop
else
{/*Netscape stuff*/}
//alert(diffY);
percent=.1*(diffY-lastScrollY);
if(percent>0)percent=Math.ceil(percent);
else percent=Math.floor(percent);
document.getElementById("leftDiv").style.top = parseInt(document.getElementById("leftDiv").style.top)+percent+"px";
document.getElementById("rightDiv").style.top = parseInt(document.getElementById("rightDiv").style.top)+percent+"px";
lastScrollY=lastScrollY+percent;
//alert(lastScrollY);
}
//�������ɾ���󣬶�������������Ļ���ƶ���
window.setInterval("heartBeat()",1);
//-->
//�رհ�ť
function close_left1(){
    left1.style.visibility='hidden';
}
function close_left2(){
    left2.style.visibility='hidden';
}
function close_right1(){
    right1.style.visibility='hidden';
}
function close_right2(){
    right2.style.visibility='hidden';
}
//��ʾ��ʽ
document.writeln("<style type=\"text\/css\">");
document.writeln("#leftDiv,#rightDiv{width:auto;height:auto;background-color:#fff;position:absolute;}");
document.writeln(".itemFloat{width:auto;height:auto;line-height:5px}");
document.writeln("<\/style>");
//����Ϊ��Ҫ����
document.writeln("<div id=\"leftDiv\" style=\"top:40px;left:5px\">");
//------�����鿪ʼ
//---L1
document.writeln("<div id=\"left1\" class=\"itemFloat\">");
//document.writeln("<embed src=flash/100x300-left.swf width=100 height=300></embed>");
document.writeln("<img src='webimages/left.png'>");
document.writeln("<br><a href=\"javascript:close_left1();\" title=\"�ر�����Ĺ��\">��<\/a><br><br><br><br>");
document.writeln("<\/div>");
//---L2
document.writeln("<div id=\"left2\" class=\"itemFloat\">");
document.writeln("<a target=_blank href=http://www.jz123.cn/><img border=0 src=images/100x100-left.gif></a>");
document.writeln("<br><a href=\"javascript:close_left2();\" title=\"�ر�����Ĺ��\">��<\/a>");
document.writeln("<\/div>");
//------���������
document.writeln("<\/div>");
document.writeln("<div id=\"rightDiv\" style=\"top:40px;right:5px\">");
//------�Ҳ�������
//---R1
document.writeln("<div id=\"right1\" class=\"itemFloat\">");
document.writeln("<img src='webimages/right.png'>");
document.writeln("<br><a href=\"javascript:close_right1();\" title=\"�ر�����Ĺ��\">��<\/a><br><br><br><br>");
document.writeln("<\/div>");
//---R2
document.writeln("<div id=\"right2\" class=\"itemFloat\">");
document.writeln("<a target=_blank href=http://www.jz123.cn/><img border=0 src=images/100x100-right.gif></a>");
document.writeln("<br><a href=\"javascript:close_right2();\" title=\"�ر�����Ĺ��\">��<\/a>");
document.writeln("<\/div>");
//------�Ҳ�������
document.writeln("<\/div>");