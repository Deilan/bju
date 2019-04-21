<? 
/* Этот скрипт получает переменные из genus.php */ 
$st1="<html>\n<head>\n<meta http-equiv=\"Content-Type\" content=\"text/html; charset=windows-1251\">\n<title>genus</title>\n</head>\n<body>\n";
$st21="Меняем ";
$st22="Добавляем ";
$st3="название вида:<br />\n";
$st4="<FORM ACTION=\"fgenus.php\" METHOD=\"GET\">\n";
$st5="вид:<br /><INPUT TYPE=\"text\" NAME=\"genus\" SIZE=\"20\" MAXLENGTH=\"30\" ";
$st6="вид (латин.):<br /><INPUT TYPE=\"text\" NAME=\"lgenus\" SIZE=\"20\" MAXLENGTH=\"30\" ";
$st7="<INPUT TYPE=\"hidden\" NAME=\"ID\" VALUE=\"";
$stval="VALUE=\"";
$stk="\"";
$stbr="><br />";
$stfm="<INPUT TYPE=\"submit\" VALUE=\"Ok\">\n<INPUT TYPE=\"reset\"  VALUE=\"No\">\n</FORM>\n";
$stfi="</body>\n</html>\n";
$id=$_GET['ID'];
$genus=$_GET['genus'];

echo $st1;
/* echo "Вы выбрали ид ".$id.", и вид ".$genus."<br>\n"; */
if ($id!='0') echo $st21;
else echo $st22;
echo $st3.$st4.$st5;
if ($id!='0') echo $stval.$genus.$stk;
echo $stbr.$st7.$id.$stk.$stbr;
echo $stfm;
echo $stfi;
?> 