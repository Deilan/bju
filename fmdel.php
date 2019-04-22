<? 
/* Этот скрипт получает переменные из cloudy.php */ 
$st1="<html>\n<head>\n<meta http-equiv=\"Content-Type\" content=\"text/html; charset=windows-1251\">\n<title>cloudy</title>\n</head>\n<body>\n";

$st3="Уничтожаем облачность: ";
$st4="<FORM ACTION=\"fdel.php\" METHOD=\"GET\">\n";
//$st5="<INPUT TYPE=\"text\" NAME=\"cloudy\" SIZE=\"20\" MAXLENGTH=\"30\" ";
//$st6="облачность:<br /><INPUT TYPE=\"text\" NAME=\"lcloudy\" SIZE=\"20\" MAXLENGTH=\"30\" ";
$st7="<INPUT TYPE=\"hidden\" NAME=\"ID\" VALUE=\"";

$stk="\"";
$stbr="><br />";
$stfm="<INPUT TYPE=\"submit\" VALUE=\"Ok\">\n</FORM>\n";
$stfi="</body>\n</html>\n";
$id=$_GET['ID'];
$cloudy=$_GET['cloudy'];

echo $st1;
/* echo "Вы выбрали ид ".$id.", и облачность ".$cloudy."<br>\n"; */

echo $st4;
echo $st3.$cloudy."<br />";
echo $st7.$id.$stk.$stbr;
echo $stfm;
echo $stfi;
?> 