 <?php
/* ���������� ��� ���������� � ����� ������ */
$hostname = "localhost";
$username = "root";
$password = "";
$dbName = "bju";

/* ������� MySQL, � ������� �������� ������ */
$userstable = "cloudy";

$id=$_GET['ID'];
$cloudy=iconv("windows-1251","utf-8",$_GET['cloudy']);

if ($id!='0'){
$query = "UPDATE $userstable SET cloudy='$cloudy' WHERE ID=$id LIMIT 1;";
}else{
$query = "INSERT INTO $userstable VALUES('0','$cloudy');"; 
}
/* ������� ���������� */
mysql_connect($hostname,$username,$password) OR DIE("�� ���� ������� ���������� ");
/* ������� ���� ������. ���� ���������� ������ - ������� �� */
mysql_select_db($dbName) or die(mysql_error()); 

/* ��������� ������. ���� ���������� ������ - ������� ��. */
mysql_query($query) or die(mysql_error());

mysql_close();
//include("cloudy.php");  
//$host  = $_SERVER['HTTP_HOST'];
//$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
//echo "<meta http-equiv=\"refresh\" content=\"0; url=http://$host$uri/cloudy.php\">";
echo "<script type=\"text/javascript\">document.location.href = \"cloudy.php\";</script>";
?> 