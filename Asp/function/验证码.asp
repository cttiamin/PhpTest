                    09 新青年	 
`  
春风吹乱了我的光头 啊	 
<%
dim str,str1,i,a
abc=""
str="abcdefghijklmnopqrstuvwxyz0123456789"
randomize()  '语句初始化随机数生成器

for i=1 to 6
a=(rnd()*100) mod len(str)+1
 str1=str1&mid(str,a,1)
next
response.Write(str1)
%> 