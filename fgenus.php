 <?php
/* ���������� ��� ���������� � ����� ������ */
$hostname = "localhost";
$username = "root";
$password = "";
$dbName = "bju";

/* ������� MySQL, � ������� �������� ������ */
$userstable = "genus";

$id=$_GET['ID'];
$genus=iconv("windows-1251","utf-8",$_GET['genus']);

if ($id!='0'){
$query = "UPDATE $userstable SET genus='$genus' WHERE ID=$id LIMIT 1;";
}else{
$query = "INSERT INTO $userstable VALUES('0','$genus');"; 
}
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