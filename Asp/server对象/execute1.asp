<% response.write"��ʼ����execute1.asp�ļ�<br>"
   response.write"�����ļ�1��������<br>"
   response.write"����׼����������ļ�2�Ľ��<br>"
   server.execute("execute2.asp")    'ִ��excute2.asp ���ļ�����ִ��������ļ�
   'server.Transfer("execute2.asp")		'ִ�� execute2.asp ���ļ�������ľͲ�ִ����
   response.Redirect("execute2.asp")   ' ��ת�� execute2.asp  �ļ�ȥִ��,ǰ��ĲƲ������ 
   response.write"���ڻص��ļ�1������"
   response.write"�����ļ�1 ִ�н���"

%>