<? 
/* Этот скрипт получает переменные из genus.php */ 
$st1="<html>\n<head>\n<meta http-equiv=\"Content-Type\" content=\"text/html; charset=windows-1251\">\n<title>genus</title>\n</head>\n<body>\n";

$st3="Уничтожаем род: ";
$st4="<FORM ACTION=\"fdel.php\" METHOD=\"GET\">\n";
//$st5="<INPUT TYPE=\"text\" NAME=\"genus\" SIZE=\"20\" MAXLENGTH=\"30\" ";
//$st6="вид (латин.):<br /><INPUT TYPE=\"text\" NAME=\"lgenus\" SIZE=\"20\" MAXLENGTH=\"30\" ";
$st7="<INPUT TYPE=\"hidden\" NAME=\"ID\" VALUE=\"";

$stk="\"";
$stbr="><br />";
$stfm="<INPUT TYPE=\"submit\" VALUE=\"Ok\">\n</FORM>\n";
$stfi="</body>\n</html>\n";
$id=$_GET['ID'];
$genus=$_GET['genus'];

echo $st1;
/* echo "Вы выбрали ид ".$id.", и вид ".$genus."<br>\n"; */

echo $st4;
echo $st3.$genus."<br />";
echo $st7.$id.$stk.$stbr;
echo $stfm;
echo $stfi;
?> 