<?
/* ���������� ��� ���������� � ����� ������ */
$hostname = "localhost";
$username = "root";
$password = "";
$dbName = "bju";

/* ������� MySQL, � ������� �������� ������ */
$userstable = "cloudy";
/* ��������� ������, ������� ������� ��� ������*/
$query = "SELECT * FROM $userstable ORDER BY $userstable.cloudy";

/* ������� ���������� */
mysql_connect($hostname,$username,$password) OR DIE("�� ���� ������� ���������� ");
/* ������� ���� ������. ���� ���������� ������ - ������� �� */
mysql_select_db($dbName) or die(mysql_error()); 

/* ��������� ������. ���� ���������� ������ - ������� ��. */
$res = mysql_query($query) or die(mysql_error());

/* ��� ����� ������� ����� */
$number = mysql_num_rows($res);

/* ���������� ���� � �������� ����*/
echo "<html>\n<head>\n";
echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=windows-1251\">\n";
echo "<title>cloudy</title>\n";
echo "</head><body>\n";
echo "��������� �������� ����������:<br>";
echo "<form action=\"fins.php\" method=\"GET\"><br>";
echo "����������:\n<input type=\"text\" name=\"cloudy\" size=\"20\" maxlength=\"30\">\n\n";
echo "<input TYPE=\"submit\" VALUE=\"Ok\">\n";
echo "<input TYPE=\"reset\"  VALUE=\"No\">\n";
echo "</form>\n";
echo "<p>������ �����������<br><br>";
if ($number != 0) {
  /*echo "<p>������� $userstable �����";
} else { */
  /* echo "<p>���������� �����: $number<BR><BR>"; */
  /* �������� �� ����� ������ �� ������� � ������ $row, ���� ������ �� �������� */ 
  while ($row=mysql_fetch_array($res)) {
	$qw = iconv("utf-8","windows-1251",$row['cloudy']);
	echo "<a href=\"fmupd.php?ID=".$row['ID']."&cloudy=".$qw."\">";
    echo "<img border=\"0\" src=\"img/b_edit.png\"></a> ";
	echo "<a href=\"fmdel.php?ID=".$row['ID']."&cloudy=".$qw."\">";
    echo "<img border=\"0\" src=\"img/b_drop.png\"></a> ";
	echo $qw."<BR>\n";
  }
  echo "</p>\n";
}
mysql_close();
echo "</body>\n</html>\n";
?>