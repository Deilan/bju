<? 
/* ���� ������ �������� ���������� �� genus.php */ 
$st1="<html>\n<head>\n<meta http-equiv=\"Content-Type\" content=\"text/html; charset=windows-1251\">\n<title>genus</title>\n</head>\n<body>\n";


$st3="��������� �������� ����:<br />\n";
$st4="<FORM ACTION=\"fins.php\" METHOD=\"GET\">\n";
$st5="���:<br /><INPUT TYPE=\"text\" NAME=\"genus\" SIZE=\"20\" MAXLENGTH=\"30\" ";
//$st6="��� (�����.):<br /><INPUT TYPE=\"text\" NAME=\"lgenus\" SIZE=\"20\" MAXLENGTH=\"30\" ";

$stbr="><br />";
$stfm="<INPUT TYPE=\"submit\" VALUE=\"Ok\">\n<INPUT TYPE=\"reset\"  VALUE=\"No\">\n</FORM>\n";
$stfi="</body>\n</html>\n";

echo $st1;
/* echo "�� ������� �� ".$id.", � ��� ".$genus."<br>\n"; */

echo $st3.$st4.$st5.$stbr.$stfm.$stfi;
?> 