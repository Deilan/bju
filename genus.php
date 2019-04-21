 <?
/* Переменные для соединения с базой данных */
$hostname = "localhost";
$username = "root";
$password = "";
$dbName = "bju";

/* Таблица MySQL, в которой хранятся данные */
$userstable = "genus";
/* составить запрос, который выберет все строки*/
$query = "SELECT * FROM $userstable ORDER BY $userstable.genus";

/* создать соединение */
mysql_connect($hostname,$username,$password) OR DIE("Не могу создать соединение ");
/* выбрать базу данных. Если произойдет ошибка - вывести ее */
mysql_select_db($dbName) or die(mysql_error()); 

/* Выполнить запрос. Если произойдет ошибка - вывести ее. */
$res = mysql_query($query) or die(mysql_error());

/* Как много нашлось таких */
$number = mysql_num_rows($res);

/* Напечатать всех в красивом виде*/
echo "<html>\n<head>\n";
echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=windows-1251\">\n";
echo "<title>genus</title>\n";
echo "</head><body>\n";
echo "<p>Список родов птиц<BR><BR>";
if ($number != 0) {
  /*echo "<p>Таблица $userstable пуста";
} else { */
  /* echo "<p>Количество строк: $number<BR><BR>"; */
  /* Получать по одной строке из таблицы в массив $row, пока строки не кончатся */ 
  while ($row=mysql_fetch_array($res)) {
	$qw = iconv("utf-8","windows-1251",$row['genus']);
	echo "<a href=\"fmupd.php?ID=".$row['ID']."&genus=".$qw."\">";
    echo "<img border=\"0\" src=\"img/b_edit.png\"></a> ";
	echo "<a href=\"fmdel.php?ID=".$row['ID']."&genus=".$qw."\">";
    echo "<img border=\"0\" src=\"img/b_drop.png\"></a> ";
	echo $qw."<BR>\n";
  }
  echo "</p>\n";
}
mysql_close();
echo "<a href=\"fmins.php\"><img border=\"0\" src=\"img/s_success.png\"></a>";
echo " Добавить род в список...<BR>\n";
echo "</body>\n</html>\n";
?>