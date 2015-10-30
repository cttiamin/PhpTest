var imagepath="/webimages/ads01.gif"
var imagewidth=180
var imageheight=180

var speed=3; 
var imageclick="http://www.baidu.com" //ÕâÊÇÆ¯
var hideafter=0 

var isie=0; 
if(window.navigator.appName=="Microsoft Internet Explorer"&&window.navigator.appVersion.substring(window.navigator.appVersion.indexOf("MSIE")+5,window.navigator.appVersion.indexOf("MSIE")+8)>=5.5) { 
isie=1; 
} 
else { 
isie=0; 
} 

   if(isie){ 
      var preloadit=new Image() 
      preloadit.src=imagepath 
   } 


function pop() { 
if(isie) { 
x=x+dx;y=y+dy; 
oPopup.show(x, y, imagewidth, imageheight); 
if(x+imagewidth+5>screen.width) dx=-dx; 
if(y+imageheight+5>screen.height) dy=-dy; 
if(x<0) dx=-dx; 
if(y<0) dy=-dy; 
startani=setTimeout("pop();",50); 
} 
} 

function dismisspopup(){ 
clearTimeout(startani) 
oPopup.hide() 
} 

function dowhat(){ 
if (imageclick=="dismiss") 
dismisspopup() 
else 
window.open(imageclick);
} 


if(isie) { 
var x=0,y=0,dx=speed,dy=speed; 
var oPopup = window.createPopup(); 
var oPopupBody = oPopup.document.body; 
oPopupBody.style.cursor="hand" 
oPopupBody.innerHTML = '<IMG SRC="'+preloadit.src+'">'; 
oPopup.document.body.onmouseover=new Function("clearTimeout(startani)") 
oPopup.document.body.onmouseout=pop 
oPopup.document.body.onclick=dowhat 
pop(); 

if (hideafter>0) 
setTimeout("dismisspopup()",hideafter*1000) 
} 