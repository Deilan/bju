 <?php
/* ���������� ��� ���������� � ����� ������ */
$hostname = "localhost";
$username = "root";
$password = "";
$dbName = "bju";

/* ������� MySQL, � ������� �������� ������ */
$userstable = "genus";

$genus=iconv("windows-1251","utf-8",$_GET['genus']);
$query = "INSERT INTO $userstable VALUES('0','$genus');"; 

/* ������� ���������� */
mysql_connect($hostname,$username,$password) OR DIE("�� ���� ������� ���������� ");
/* ������� ���� ������. ���� ���������� ������ - ������� �� */
mysql_select_db($dbName) or die(mysql_error()); 

/* ��������� ������. ���� ���������� ������ - ������� ��. */
mysql_query($query) or die(mysql_error());

mysql_close();
//include("genus.php");  
//$host  = $_SERVER['HTTP_HOST'];
//$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
//echo "<meta http-equiv=\"refresh\" content=\"0; url=http://$host$uri/genus.php\">";
echo "<script type=\"text/javascript\">document.location.href = \"genus.php\";</script>";
?> 