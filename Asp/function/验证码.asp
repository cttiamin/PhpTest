                    09 ������	 
`  
���紵�����ҵĹ�ͷ ��	 
<%
dim str,str1,i,a
abc=""
str="abcdefghijklmnopqrstuvwxyz0123456789"
randomize()  '����ʼ�������������

for i=1 to 6
a=(rnd()*100) mod len(str)+1
 str1=str1&mid(str,a,1)
next
response.Write(str1)
%> 