<? 
/* ���� ������ �������� ���������� �� cloudy.php */ 
$st1="<html>\n<head>\n<meta http-equiv=\"Content-Type\" content=\"text/html; charset=windows-1251\">\n<title>cloudy</title>\n</head>\n<body>\n";
$st21="������ ";
$st22="��������� ";
$st3="�������� ����������:<br />\n";
$st4="<FORM ACTION=\"fcloudy.php\" METHOD=\"GET\">\n";
$st5="����������:<br /><INPUT TYPE=\"text\" NAME=\"cloudy\" SIZE=\"20\" MAXLENGTH=\"30\" ";
$st7="<INPUT TYPE=\"hidden\" NAME=\"ID\" VALUE=\"";
$stval="VALUE=\"";
$stk="\"";
$stbr="><br />";
$stfm="<INPUT TYPE=\"submit\" VALUE=\"Ok\">\n<INPUT TYPE=\"reset\"  VALUE=\"No\">\n</FORM>\n";
$stfi="</body>\n</html>\n";
$id=$_GET['ID'];
$cloudy=$_GET['cloudy'];

echo $st1;
/* echo "�� ������� �� ".$id.", � ���������� ".$cloudy."<br>\n"; */
if ($id!='0') echo $st21;
else echo $st22;
echo $st3.$st4.$st5;
if ($id!='0') echo $stval.$cloudy.$stk;
echo $stbr.$st7.$id.$stk.$stbr;
echo $stfm;
echo $stfi;
?> 