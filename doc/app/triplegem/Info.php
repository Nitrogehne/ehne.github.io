<meta http-equiv="content-type" content="text/html; charset=utf-8">
<?
	// 로컬호스트1에 DB에 접속
	$dbconn = mysql_connect("localhost1", "ehne", "3141592db") || die("데이터베이스 연결에 실패하였습니다.");
	
	//상태가 괜찮으면 진행 아니면 종료
	$status = mysql_select_db("ehne");
	if(!$status)
	{
		error("DB_ERROR");
		exit;
	}
  mysql_query("SET NAMES UTF8");
  
  //TOP5을 불러온다.
  $result = mysql_query("select SQL_CALC_FOUND_ROWS * from `Ehne_TripleGem` order by `Date` desc limit 30");
  $row = mysql_fetch_array(mysql_query("SELECT FOUND_ROWS()"));
?>
<table class="table"><tr><td align="center">
<table border="1">
  <tr>
    <td>Y-M-D, h:m:s</td>
    <td>ID</td>
    <td>Score, Star</td>
    <td>Comment</td>
  </tr>
<?
  for($i = 0; $i < 30 && $i < $row[0]; $i++)
  {
    mysql_data_seek($result, $i);
    $data = mysql_fetch_array($result);
?>
  <tr>
    <td><?= date("Y/m/d, H:i:s", $data['Date']); ?></td>
    <td><?= $data['ID']; ?></td>
    <td><?= $data['Score']; ?>, ★×<?= $data['Star']; ?></td>
    <td><?= $data['Comment']; ?></td>
  </tr>
<?
  }
?>
</tr></td></table>
</table>
</body>
</html>