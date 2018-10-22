<?

  mysql_query("SET NAMES UTF8");
  //TOP10을 불러온다.
  $result = mysql_query("select SQL_CALC_FOUND_ROWS * from `Ehne_TripleGem` order by `Score` desc limit 10");
  $row = mysql_fetch_array(mysql_query("SELECT FOUND_ROWS()"));
  //Weekly TOP10을 불러온다.
  $wday = getdate(mktime());
  $result_w = mysql_query("select SQL_CALC_FOUND_ROWS * from `Ehne_TripleGem` where `Date` > ".(mktime()-86400*$wday["wday"])." and `Date` < ".(mktime()+86400*(7-$wday["wday"]))." order by `Score` desc limit 10");
  $row_w = mysql_fetch_array(mysql_query("SELECT FOUND_ROWS()"));
?>
      <table width="300" style="border-top:2px solid #fff">
<?
  if($row[0] == 0)
  {
?>
        <tr>
          <td align="center">No Data</td>
        </tr>
<?
  }
  else
  {
?>
        <tr>
          <td></td>
          <td align="left" width="100">ID</td>
          <td align="left">Score & Star </td>
        </tr>
<?
    for($i=0; $i<$row[0] && $i<10; $i++)
    {
      mysql_data_seek($result, $i);
      $data = mysql_fetch_array($result);
?>
        <tr>
          <td align="left"><?= ($i+1); ?></td>
          <td align="left" title="<?= date("Y/m/d, H:i:s", $data['Date']); ?>"><?= $data['ID']; ?></td>
          <td id="scoreboard" align="left"><?= $data['Score']; ?>, ★×<?= $data['Star']; ?></td>
        </tr>
        <tr>
          <td></td>
          <td id="commentboard" colspan="2" align="left">
            <!-- marquee direction="left" behavior="alternate" scrollamount="1"> -->
              <?= $data['Comment']; ?>&nbsp;
            <!-- /marquee -->
          </td>
        </tr>
<?
    }
?>
      </table>
<?
  }
?>