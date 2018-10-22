<meta http-equiv="content-type" content="text/html; charset=utf-8">
<html>
<head>
<link rel="stylesheet" type="text/css" href="../../style.css">
<meta name="viewport" content="width=device-width,initial-scale=0.75,user-scalable=no">
<title>N</title>
<script language="JavaScript">

<? include "script.php"; ?>

</script>
</head>
<body onContextMenu="Swap();return false;" onLoad="DisplayGameboard()">
<table class="table" id="Rainbow"><tr><td align="center">
<div id="test" style="display:none">test area</div>
<? include "gemTable.php"; ?>
<table>
  <tr>
    <td valign="bottom">
      <table style="width:342px;border:2px solid #000">
        <tr>
          <td width="54"></td>
          <td width="25"></td>
          <td align="center" width="54">Next</td>
          <td width="54"></td>
          <td width="83"></td>
          <td align="center" width="54">Swap</td>
        </tr>
        <tr height="54">
          <td id="prv_block" style="border:2px solid #fff;background-repeat:no-repeat;background-position:center center;" onMouseOver="POver('prv_block[0]')" onMouseOut="POut('prv_block[0]')">
            &nbsp;
          </td>
          <td valign="middle"><img src="arrow_left.png"></td>
          <td id="prv_block" style="border:2px solid #fff;background-repeat:no-repeat;background-position:center center;" onMouseOver="POver('prv_block[1]')" onMouseOut="POut('prv_block[1]')">
            &nbsp;
          </td>
          <td id="prv_block" style="border:2px solid #fff;background-repeat:no-repeat;background-position:center center;" onMouseOver="POver('prv_block[1]')" onMouseOut="POut('prv_block[1]')">
            &nbsp;
          </td>
          <td></td>
          <td id="swap" style="border:2px solid #fff;background-repeat:no-repeat;background-position:center center;cursor:pointer" onClick="Swap()" onMouseOver="POver('swap')" onMouseOut="POut('swap')">
            &nbsp;
          </td>
        </tr>
        <tr height="25">
          <td align="center"><img src="arrow_down.png"></td>
          <td colspan="5" align="right" valign="bottom">
            ★×<span id="star">0</span>, Score : <span id="score">0</span>(<span id="p_score" style="font-weight:bold">+0</span>)
          </td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td valign="top">
      <span id="game_board">
1. Triple Town이라는 게임을 배껴 만들었습니다.<BR>
2. 보석 이미지의 출처는 Diablo3입니다.<BR>
3. Swap은 우클릭으로도 가능합니다.<BR>
4. 크롬, 사파리에서 정상작동 됨을 확인했습니다.
      </span>
    </td>
  </tr>
  <tr>
    <td>
      <div id="help" style="height:60px;"></div>
      <div id="record" style="height:60px;display:none;">
        <form id="f_record" action="recordPro.php?src=m_index.php" method="post" onSubmit="Record()">
          <input type="hidden" name="workType" value="record">
          <input type="hidden" name="score" value="">
          <input type="hidden" name="star" value="">
        <table>
          <tr>
            <td align="left">ID</td>
            <td align="left">
              <input class="nForm" type="text" name="id" maxlength="10" style="width:100px" value="Guest<?= $r_num = floor(rand(1,100)); ?>" onFocus="(this.value==f_record.temp_id.value)?(this.value=''):(true)" onBlur="(this.value=='')?(this.value=f_record.temp_id.value):(true);">
              <input type="hidden" name="temp_id" value="Guest<?= $r_num; ?>">
            </td>
            <td align="right">
              <input class="nForm" type="submit" value="Submit" style="width:75px" onClick="Record()">
            </td>
          </tr>
          <tr>
            <td align="left">Comment</td>
            <td colspan="2" align="left">
              <input class="nForm" type="text" name="comment" maxlength="20" style="width:250px">
            </td>
          </tr>
        </table>
        </form>
      </div>
    </td>
  </tr>
</table>
</td></tr></table>
</body>
</html>