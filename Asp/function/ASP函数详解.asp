ASP�������
Array()��CInt()����

Array()
����FUNCTION: ����һ������
����SYNTAX: Array(list)
����ARGUMENTS: �ַ������־���
����EXAMPLE: <%
����Dim myArray()
����For i = 1 to 7
����Redim Preserve myArray(i)
����myArray(i) = WeekdayName(i)
����Next
����%[/IMG]
����RESULT: ������һ������7��Ԫ�ص�����myArray
����myArray("Sunday","Monday", ... ... "Saturday")

����FUNCTION: ��һ�����ʽת��Ϊ��������
����SYNTAX: CInt(expression)
����ARGUMENTS: �κ���Ч���ַ�����
����EXAMPLE: <%
����f = "234"
����response.write cINT(f) + 2
����%[/IMG]
����RESULT: 236
����ת���ַ�"234"Ϊ����"234"������ַ���Ϊ�գ��򷵻�0ֵ

CreateObject()
����FUNCTION: �����ͷ���һ����ע���ACTIVEX�����ʵ����
����SYNTAX: CreateObject(objName)
����ARGUMENTS: objName ���κ�һ����Ч����ע���ACTIVEX���������.
����EXAMPLE: <%
����Set con = Server.CreateObject("ADODB.Connection")
����%[/IMG]
����RESULT:

CStr()
����FUNCTION: ת��һ�����ʽΪ�ַ���.
����SYNTAX: CStr(expression)
����ARGUMENTS: expression ���κ���Ч�ı��ʽ��
����EXAMPLE: <%
����s = 3 + 2
����response.write "The result is: " & cStr(s)
����%[/IMG]
����RESULT: ת�����֡�5��Ϊ�ַ���5����

Date()
����FUNCTION: ���ص�ǰϵͳ����.
����SYNTAX: Date()
����ARGUMENTS: None.
����EXAMPLE: <%=Date%[/IMG]
����RESULT: 8/4/99

DateAdd()
����FUNCTION: ����һ�����ı��˵����ڡ�
����SYNTAX: DateAdd(timeinterval,number,date)
����ARGUMENTS: timeinterval is the time interval to add; number is amount of time intervals to add; and date is the starting date.
����EXAMPLE: <%
����currentDate = #8/4/99#
����newDate = DateAdd("m",3,currentDate)
����response.write newDate
����%[/IMG]

����<%
����currentDate = #12:34:45 PM#
����newDate = DateAdd("h",3,currentDate)
����response.write newDate
����%[/IMG]
����RESULT: 11/4/99
����3:34:45 PM

����"m" = "month";
����"d" = "day";

����If currentDate is in time format then,
����"h" = "hour";
����"s" = "second";

DateDiff()
����FUNCTION: ������������֮��Ĳ�ֵ ��
����SYNTAX: DateDiff(timeinterval,date1,date2 [, firstdayofweek [, firstweekofyear[/IMG][/IMG])
����ARGUMENTS: timeinterval ��ʾ���ʱ������ͣ��硰M����ʾ���¡���
����EXAMPLE: <%
����fromDate = #8/4/99#
����toDate = #1/1/2000#
����response.write "There are " & _
����DateDiff("d",fromDate,toDate) & _
����" days to millenium from 8/4/99."
����%[/IMG]
����RESULT: ��8/4/99 ��2000�껹�� 150 ��.

Day()
����FUNCTION: ����һ���µĵڼ��� .
����SYNTAX: Day(date)
����ARGUMENTS: date ���κ���Ч�����ڡ�
����EXAMPLE: <%=Day(#8/4/99#)%[/IMG]
����RESULT: 4

FormatCurrency()
����FUNCTION: ���ر��ʽ���˱��ʽ�ѱ���ʽ��Ϊ����ֵ
����SYNTAX: FormatCurrency(Expression [, Digit [, LeadingDigit [, Paren [, GroupDigit[/IMG][/IMG][/IMG][/IMG])
����ARGUMENTS: Digit ָʾС�����Ҳ���ʾλ������ֵ��Ĭ��ֵΪ -1��ָʾʹ�õ��Ǽ��������������; ����LeadingDigit ��̬������ָʾ�Ƿ���ʾС��ֵС����ǰ����㡣
����EXAMPLE: <%=FormatCurrency(34.3456)%[/IMG]
����RESULT: $34.35

FormatDateTime()
����FUNCTION: ���ر��ʽ���˱��ʽ�ѱ���ʽ��Ϊ���ڻ�ʱ��
����SYNTAX: FormatDateTime(Date, [, NamedFormat[/IMG])
����ARGUMENTS: NamedFormat ָʾ��ʹ�õ�����/ʱ���ʽ����ֵ�����ʡ�ԣ���ʹ�� vbGeneralDate.
����EXAMPLE: <%=FormatDateTime("08/4/99", vbLongDate)%[/IMG]
����RESULT: Wednesday, August 04, 1999

FormatNumber()
����FUNCTION: ���ر��ʽ���˱��ʽ�ѱ���ʽ��Ϊ��ֵ.
����SYNTAX: FormatNumber(Expression [, Digit [, LeadingDigit [, Paren [, GroupDigit[/IMG][/IMG][/IMG][/IMG])
����ARGUMENTS: Digit ָʾС�����Ҳ���ʾλ������ֵ��Ĭ��ֵΪ -1��ָʾʹ�õ��Ǽ�������������á�; LeadingDigit iָʾС�����Ҳ���ʾλ������ֵ��Ĭ��ֵΪ -1��ָʾʹ�õ��Ǽ�������������á�; Paren ָʾС�����Ҳ���ʾλ������ֵ��Ĭ��ֵΪ -1��ָʾʹ�õ��Ǽ�������������á�; GroupDigit iָʾС�����Ҳ���ʾλ������ֵ��Ĭ��ֵΪ -1��ָʾʹ�õ��Ǽ�������������á�.
����EXAMPLE: <%=FormatNumber(45.324567, 3)%[/IMG]
����RESULT: 45.325

FormatPercent()
����FUNCTION: ���ر��ʽ���˱��ʽ�ѱ���ʽ��Ϊβ���� % ���ŵİٷֱȣ����� 100 ���� (%)
����SYNTAX: FormatPercent(Expression [, Digit [, LeadingDigit [, Paren [, GroupDigit[/IMG][/IMG][/IMG][/IMG])
����ARGUMENTS: ͬ��.
����EXAMPLE: <%=FormatPercent(0.45267, 3)%[/IMG]
����RESULT: 45.267%

Hour()
����FUNCTION: ��24ʱ����Сʱ��.
����SYNTAX: Hour(time)
����ARGUMENTS:
����EXAMPLE: <%=Hour(#4:45:34 PM#)%[/IMG]
����RESULT: 16
����(Hour has been converted to 24-hour system)

Instr()
����FUNCTION: �����ַ����ַ�������һ���ַ����е�һ�γ��ֵ�λ��.
����SYNTAX: Instr([start, [/IMG] strToBeSearched, strSearchFor [, compare[/IMG])
����ARGUMENTS: StartΪ��������ʼֵ��strToBeSearched�����������ַ��� strSearchForҪ�������ַ�compare �ȽϷ�ʽ����ϸ��ASP������
����EXAMPLE: <%
����strText = "This is a test!!"
����pos = Instr(strText, "a")
����response.write pos
����%[/IMG]
����RESULT: 9

InstrRev()
����FUNCTION: ͬ�ϣ�ֻ�Ǵ��ַ��������һ��������
����SYNTAX: InstrRev([start, [/IMG] strToBeSearched, strSearchFor [, compare[/IMG])
����ARGUMENTS: ͬ��.
����EXAMPLE: <%
����strText = "This is a test!!"
����pos = InstrRev(strText, "s")
����response.write pos
����%[/IMG]
����RESULT: 13


Int()
����FUNCTION: ������ֵ����,���������롣
����SYNTAX: Int(number)
����ARGUMENTS:
����EXAMPLE: <%=INT(32.89)%[/IMG]
����RESULT: 32

IsArray()
����FUNCTION: �ж�һ�����Ƿ�Ϊ���飬���ز���ֵ .
����SYNTAX: IsArray(name)
����ARGUMENTS:
����EXAMPLE: <%
����strTest = "Test!"
����response.write IsArray(strTest)
����%[/IMG]
����RESULT: False

IsDate()
����FUNCTION: �ж�һ�����Ƿ�Ϊ���ڣ����ز���ֵ
����SYNTAX: IsDate(expression)
����ARGUMENTS: expression is any valid expression.
����EXAMPLE: <%
����strTest = "8/4/99"
����response.write IsDate(strTest)
����%[/IMG]
����RESULT: True

IsEmpty()
����FUNCTION: �ж�һ�����Ƿ��ʼ�������ز���ֵ.
����SYNTAX: IsEmpty(expression)
����ARGUMENTS:
����EXAMPLE: <%
����Dim i
����response.write IsEmpty(i)
����%[/IMG]
����RESULT: True

IsNull()
����FUNCTION: �ж�һ�����Ƿ�Ϊ�գ����ز���ֵ.
����SYNTAX: IsNull(expression)
����ARGUMENTS:
����EXAMPLE: <%
����Dim i
����response.write IsNull(i)
����%[/IMG]
����RESULT: False
����
����IsNumeric()
����FUNCTION: �ж�һ�����Ƿ�Ϊ���֣����ز���ֵ.
����SYNTAX: IsNumeric(expression)
����ARGUMENTS:
����EXAMPLE: <%
����i = "345"
����response.write IsNumeric(i)
����%[/IMG]
����RESULT: True
�����������ּ������ţ�ASP������Ϊ�������֡�

IsObject()
����FUNCTION: �ж�һ�����Ƿ�Ϊ���󣬷��ز���ֵ.
����SYNTAX: IsObject(expression)
����ARGUMENTS:
����EXAMPLE: <%
����Set con = Server.CreateObject("ADODB.Connection")
����response.write IsObject(con)
����%[/IMG]
����RESULT: True


LBound()
����FUNCTION: ����ָ������ά����С�����±�.
����SYNTAX: Lbound(arrayname [, dimension[/IMG])
����ARGUMENTS: dimension ָ��Ҫ������һά�½��������ʹ�� 1 ��ʾ��һά��2 ��ʾ�ڶ�ά���Դ��ࡡ���ơ����ʡ�� dimension ������Ĭ��ֵΪ 1.
����EXAMPLE: <%
����i = Array("Monday","Tuesday","Wednesday")
����response.write LBound(i)
����%[/IMG]
����RESULT: 0

LCase()
����FUNCTION: �����ַ�����Сд��ʽ
����SYNTAX: Lcase(string)
����ARGUMENTS: string is any valid string expression.
����EXAMPLE: <%
����strTest = "This is a test!"
����response.write LCase(strTest)
����%[/IMG]
����RESULT: this is a test!

Left()
����FUNCTION: �����ַ�����ߵ�length���ַ���ǰ���ַ�������length���ַ�).
����SYNTAX: Left(string, length)
����ARGUMENTS:
����EXAMPLE: <%
����strTest = "This is a test!"
����response.write Left(strTest, 3)
����%[/IMG]
����RESULT: Thi

Len()
����FUNCTION: �����ַ����ĳ���.
����SYNTAX: Len(string | varName)
����ARGUMENTS:
����EXAMPLE: <%
����strTest = "This is a test!"
����response.write Len(strTest)
����%[/IMG]
����RESULT: 15

LTrim()
����FUNCTION: ȥ���ַ�����ߵĿո�.
����SYNTAX: LTrim(string)
����ARGUMENTS:
����EXAMPLE: <%
����strTest = " This is a test!"
����response.write LTrim(strTest)
����%[/IMG]
����RESULT: This is a test!

Mid()
����FUNCTION: �����ض����ȵ��ַ���(��start��ʼ,����Ϊlength).
����SYNTAX: Mid(string, start [, length[/IMG])
����ARGUMENTS:
����EXAMPLE: <%
����strTest = "This is a test! Today is Monday."
����response.write Mid(strTest, 17, 5)
����%[/IMG]
����RESULT: Today

Minute()
����FUNCTION: ����ʱ��ķ���.
����SYNTAX: Minute(time)
����ARGUMENTS:
����EXAMPLE: <%=Minute(#12:45:32 PM#)%[/IMG]
����RESULT: 45

Month()
����FUNCTION: ��������.
����SYNTAX: Month(date)
����ARGUMENTS: date is any valid date expression.
����EXAMPLE: <%=Month(#08/04/99#)%[/IMG]
����RESULT: 8

MonthName()
����FUNCTION: Returns a string identifying the specified month.
����SYNTAX: MonthName(month, [, Abb[/IMG])
����ARGUMENTS: month is the numeric representation for a given month; Abb (optional) is a boolean value used to display month abbreviation. True will display the abbreviated month name and False (default) will not show the abbreviation.
����EXAMPLE: <%=MonthName(Month(#08/04/99#))%[/IMG]
����RESULT: August

Now()
����FUNCTION: Returns the current system date and time.
����SYNTAX: Now()
����ARGUMENTS: None
����EXAMPLE: <%=Now%[/IMG]
����RESULT: 8/4/99 9:30:16 AM

Replace()
����FUNCTION: Returns a string in which a specified sub-string has been replaced with another substring a specified number of times.
����SYNTAX: Replace(strToBeSearched, strSearchFor, strReplaceWith [, start [, count [, compare[/IMG][/IMG][/IMG])
����ARGUMENTS: strToBeSearched is a string expression containing a sub-string to be replaced; strSearchFor is the string expression to search for within strToBeSearched; strReplaceWith is the string expression to replace sub-string strSearchFor; start (optional) is the numeric character position to begin search; count (optional) is a value indicating the comparision constant.
����EXAMPLE: <%
����strTest = "This is an apple!"
����response.write Replace(strTest, "apple", "orange")
����%[/IMG]
����RESULT: This is an orange!

Right()
����FUNCTION: �����ַ����ұߵ�length���ַ���ǰ���ַ�������length���ַ�).
����SYNTAX: Right(string, length)
����ARGUMENTS: .
����EXAMPLE: <%
����strTest = "This is an test!"
����response.write Right(strTest, 3)
����%[/IMG]
����RESULT: st!

Rnd()
����FUNCTION: ����һ�������.
����SYNTAX: Rnd [ (number) [/IMG]
����ARGUMENTS:
����EXAMPLE: <%
����Randomize()
����response.write RND()
����%[/IMG]
����RESULT: �κ�һ����0 �� 1 ֮�����

Round()
����FUNCTION: ���ذ�ָ��λ�����������������ֵ.
����SYNTAX: Round(expression [, numRight[/IMG])
����ARGUMENTS: numRight���ֱ���С�����ұ��ж���λ�����������롣���ʡ�ԣ��� Round ������������.
����EXAMPLE: <%
����i = 32.45678
����response.write Round(i)
����%[/IMG]
����RESULT: 32

Rtrim()
����FUNCTION: ȥ���ַ����ұߵ��ַ���.
����SYNTAX: Rtrim(string)
����ARGUMENTS:
����EXAMPLE: <%
����strTest = "This is a test!! "
����response.write RTrim(strTest)
����%[/IMG]
����RESULT: This is a test!!

Second()
����FUNCTION: ������.
����SYNTAX: Second(time)
����ARGUMENTS: .
����EXAMPLE: <%=Second(#12:34:28 PM#)%[/IMG]
����RESULT: 28

StrReverse()
����FUNCTION: ����һ�ַ���
����SYNTAX: StrReverse(string)
����ARGUMENTS:
����EXAMPLE: <%
����strTest = "This is a test!!"
����response.write StrReverse(strTest)
����%[/IMG]
����RESULT: !!tset a si sihT

Time()
����FUNCTION: ����ϵͳʱ��.
����SYNTAX: Time()
����ARGUMENTS: .
����EXAMPLE: <%=Time%[/IMG]
����RESULT: 9:58:28 AM

Trim()
����FUNCTION: ȥ���ַ������ҵĿո�.
����SYNTAX: Trim(string)
����ARGUMENTS: string is any valid string expression.
����EXAMPLE: <%
����strTest = " This is a test!! "
����response.write Trim(strTest)
����%[/IMG]
����RESULT: This is a test!!

UBound()
����FUNCTION: ����ָ������ά�����������±�.
����SYNTAX: Ubound(arrayname [, dimension[/IMG])
����ARGUMENTS: dimension (optional) ָ��������һά�Ͻ��������1 ��ʾ��һά��2 ��ʾ�ڶ�ά���Դ����ơ����ʡ�� dimension ��������Ĭ��ֵΪ 1.
����EXAMPLE: <%
����i = Array("Monday","Tuesday","Wednesday")
����response.write UBound(i)
����%[/IMG]
����RESULT: 2

UCase()
����FUNCTION: �����ַ����Ĵ�д��ʽ.
����SYNTAX: UCase(string)
����ARGUMENTS:
����EXAMPLE: <%
����strTest = "This is a test!!"
����response.write UCase(strTest)
����%[/IMG]
����RESULT: THIS IS A TEST!!

VarType()
����FUNCTION: ����ָʾ���������͵�ֵ
����SYNTAX: VarType(varName)
����ARGUMENTS:
����EXAMPLE: <%
����i = 3
����response.write varType(i)
����%[/IMG]
����RESULT: 2(����)���"asp����"

WeekDay()
����FUNCTION: ������һ�ܵĵڼ���.
����SYNTAX: WeekDay(date [, firstdayofweek[/IMG])
����ARGUMENTS: .
����EXAMPLE: <%
����d = #8/4/99#
����response.write Weekday(d)
����%[/IMG]
����RESULT: 4(������)

WeekDayName()
FUNCTION: ����һ�ܵڼ��������.
SYNTAX: WeekDayName(weekday [, Abb [, firstdayofweek[/IMG][/IMG])
ARGUMENTS: Abb��ѡ��Boolean ֵ��ָ���Ƿ���д��ʾ���ڸ�������ơ����ʡ�ԣ� Ĭ��ֵΪ False��������д���ڸ��������.firstdayofweekָ�����ڵ�һ�����ֵ
EXAMPLE: <%
d = #8/4/99#
response.write WeekdayName(Weekday(d))
%[/IMG]
RESULT: Wednesday

Year()
����FUNCTION: ���ص�ǰ�����.
����SYNTAX: Year(date)
����ARGUMENTS:
����EXAMPLE: <%=Year(#8/4/99#)%[/IMG]
����RESULT: 1999 

