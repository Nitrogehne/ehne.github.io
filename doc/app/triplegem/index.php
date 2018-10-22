<style>
  #pageTripleGem table {
    margin: auto;
  }
  #pageTripleGem td {
    border: 2px solid;
    background-repeat: no-repeat;
    background-position: center center;
    padding: 3px;
    text-align : center;
  }
  #pageTripleGem .swap {
    cursor: pointer;
  }
  #pageTripleGem .t {
  }
  .block_set {
    width:50px;
    height:50px;
    text-align : center;
    border-width: 2px;
    border-style: solid;
    background-repeat:no-repeat;
    background-position:center center;
  }
  .b_888 {
    border-color:#888;
  }
  .b_000 {
    border-color:#000;
  }
  .b_f88 {
    border-color:#f88;
  }
  .b_f00 {
    border-color:#f00;
  }
  .b_fff{
    border-color:#fff;
  }
  .b_bb0{
    border-color:#bb0;
  }
  .b_88f{
    border-color:#88f;
  }
  .b_44f{
    border-color:#44f;
  }
  .bg_000 {
    background-color : #000;
  }
  .bg_200{
    background-color : #200;
  }
  .bg_400{
    background-color : #400;
  }
  .bg_600{
    background-color : #600;
  }
  .bg_800 {
    background-color : #800;
  }
  .bg_a00 {
    background-color : #a00;
  }
  .bg_c00 {
    background-color : #c00;
  }
  .bg_330{
    background-color : #330;
  }
  .bg_660{
    background-color : #660;
  }
  .bg_990{
    background-color : #990;
  }
  .bg_cc0{
    background-color : #cc0;
  }
  .bg_004{
    background-color : #004;
  }
  .bg_008{
    background-color : #008;
  }
  .bi_blk {
    background-image:url("blk.png");
  }
  .bi_r1 {
    background-image:url("r1.png");
  }
  .bi_r2 {
    background-image:url("r2.png");
  }
  .bi_r3 {
    background-image:url("r3.png");
  }
  .bi_r4 {
    background-image:url("r4.png");
  }
  .bi_r5 {
    background-image:url("r5.png");
  }
  .bi_r6 {
    background-image:url("r6.png");
  }
  .bi_r7 {
    background-image:url("r7.png");
  }
  .bi_y1 {
    background-image:url("y1.png");
  }
  .bi_y2 {
    background-image:url("y2.png");
  }
  .bi_y3 {
    background-image:url("y3.png");
  }
  .bi_y4 {
    background-image:url("y4.png");
  }
  .bi_y5 {
    background-image:url("y5.png");
  }
  .bi_b1 {
    background-image:url("b1.png");
  }
  .bi_b2 {
    background-image:url("b2.png");
  }
  .bi_b3 {
    background-image:url("b3.png");
  }
  .block_up{
    border:1px solid #fff;
  }
  .block_up table tr td {
    vertical-align : middle;
  }
</style>
<article id="triplegem">
<table class="hidden2">
  <tr>
    <td class="block_set b_888 bg_000 bi_blk">0</td>
    <td class="block_set b_000 bg_000 bi_blk">1</td>
    <td class="block_set b_888 bg_000 bi_blk">2</td>
    <td class="block_set"></td>
    <td class="block_set"></td>
    <td class="block_set"></td>
    <td class="block_set"></td>
    <td class="block_set"></td>
    <td class="block_set"></td>
    <td class="block_set"></td>
  </tr>
  <tr>
    <td class="block_set b_f88 bg_000 bi_blk">10</td>
    <td class="block_set b_f00 bg_000 bi_r1">11</td>
    <td class="block_set b_f00 bg_200 bi_r2">12</td>
    <td class="block_set b_f00 bg_400 bi_r3">13</td>
    <td class="block_set b_f00 bg_600 bi_r4">14</td>
    <td class="block_set b_f00 bg_800 bi_r5">15</td>
    <td class="block_set b_f00 bg_a00 bi_r6">16</td>
    <td class="block_set b_f00 bg_c00 bi_r7">19</td>
    <td class="block_set"></td>
    <td class="block_set b_f00 bg_c00 bi_r7">19</td>
  </tr>
  <tr>
    <td class="block_set b_fff bg_000 bi_blk">20</td>
    <td class="block_set b_bb0 bg_000 bi_y1">21</td>
    <td class="block_set b_bb0 bg_330 bi_y2">22</td>
    <td class="block_set b_bb0 bg_660 bi_y3">23</td>
    <td class="block_set b_bb0 bg_990 bi_y4">24</td>
    <td class="block_set b_bb0 bg_cc0 bi_y5">29</td>
    <td class="block_set"></td>
    <td class="block_set"></td>
    <td class="block_set"></td>
    <td class="block_set b_bb0 bg_cc0 bi_y5">29</td>
  </tr>
  <tr>
    <td class="block_set b_88f bg_000 bi_blk">30</td>
    <td class="block_set b_44f bg_000 bi_b1">31</td>
    <td class="block_set b_44f bg_004 bi_b2">32</td>
    <td class="block_set b_44f bg_008 bi_b3">39</td>
    <td class="block_set"></td>
    <td class="block_set"></td>
    <td class="block_set"></td>
    <td class="block_set"></td>
    <td class="block_set"></td>
    <td class="block_set b_44f bg_008 bi_b3">39</td>
  </tr>
</table>
<table class="hidden">
  <tr>
    <td class="block_up">
      <table>
        <tr>
          <td><img src="doc/app/triplegem/blk.png"></td>
  </tr>
        
if($row != 0 && $col != 0 && !is_null($block_set_value[$row*10 + $col]))
{
        ?>
        <td class="block_up" style="border:1px solid #fff">
        <table>
            <tr>
                <td valign="middle"><img src="<?= $path.$block_set_bgImg[$row*10+$col];?>.png"><?
if(!is_null($block_set_value[$row * 10 + $col + 1]) && $col != 9)
{
for($i = 0; $i < 2; $i++)
{
                ?><img src="<?= $path.$block_set_bgImg[$row*10+$col];?>.png"><?
}
}
                ?></td>
                <td valign="middle"><img src="<?= $path;?>arrow_right.png"></td>
                <td valign="middle"><?
if(!is_null($block_set_value[$row * 10 + $col + 1]) && $col != 9)
{
                ?><img src="<?= $path.$block_set_bgImg[$row*10+$col+1];?>.png"><?
}
else
{
                ?>
                ★<?
}
                ?></td>
            </tr>
        </table><?
}
else
{
        ?><td id="block_up"></td>
        <?
}
}
        ?>
    </tr>
    <?
}
    ?>
</table>
1. Triple Town이라는 게임을 배껴 만들었습니다.<br>
2. 보석 이미지의 출처는 Diablo3입니다.<br>
3. Swap은 우클릭으로도 가능합니다.<br>
4. 크롬, 사파리에서 정상작동 됨을 확인했습니다.
    <table>
        <tr>
            <td>
                
            <table class="t">
                <tr>
                    <td width="54"></td>
                    <td width="25"></td>
                    <td align="center" width="54">Next</td>
                    <td width="54"></td>
                    <td width="83"></td>
                    <td align="center" width="54">Swap</td>
                </tr>
                <tr height="54">
                    <td class="prv_block" onMouseOver="POver('prv_block[0]')" onMouseOut="POut('prv_block[0]')"> &nbsp; </td>
                    <td valign="middle"><img class="here" src="arrow_left.png"></td>
                    <td class="prv_block"onMouseOver="POver('prv_block[1]')" onMouseOut="POut('prv_block[1]')"> &nbsp; </td>
                    <td class="prv_block" onMouseOver="POver('prv_block[1]')" onMouseOut="POut('prv_block[1]')"> &nbsp; </td>
                    <td></td>
                    <td id="swap" onClick="Swap()" onMouseOver="POver('swap')" onMouseOut="POut('swap')"> &nbsp; </td>
                </tr>
                <tr height="25">
                    <td align="center"><img class="here" src="arrow_down.png"></td>
                    <td colspan="5" align="right" valign="bottom"> ★×<span id="star">0</span>, Score : <span id="score">0</span>(<span id="p_score" style="font-weight:bold">+0</span>) </td>
                </tr>
            </table></td>
        </tr>
        <tr>
            <td valign="top" class="game_board"></td>
        </tr>
        <tr>
            <td><div id="help" style="height:60px;"></div>
            <div id="record" style="height:60px;display:none;">
                <form id="f_record" action="recordPro.php?src=m_index.php" method="post" onSubmit="Record()">
                    <input type="hidden" name="workType" value="record">
                    <input type="hidden" name="score" value="">
                    <input type="hidden" name="star" value="">
                    <table>
                        <tr>
                            <td align="left">ID</td>
                            <td align="left">
                            <input class="nForm" type="text" name="id" maxlength="10" style="width:100px" value="Guest<?= $r_num=floor(rand(1,100));?>" onFocus="(this.value==f_record.temp_id.value)?(this.value=''):(true)" onBlur="(this.value=='')?(this.value=f_record.temp_id.value):(true);">
                            <input type="hidden" name="temp_id" value="Guest<?= $r_num;?>">
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
            </div></td>
        </tr>
    </table>
    </td></tr></table>
    <script language="JavaScript">
		var board_size = 6
		var gameover_flag = 0;
		var v_block = new Array(1);
		var v_swap = 1;
		var v_temp = 1;
		var v_prv_block = new Array(1, 1);
		function DisplayGameboard()// 게임보드 만들기
        {			
            var t_table = $("table").css({
                width : 342px,
                height : 342px,
                border : 2px solid #fff             
            });
            
            for(var c_row = 0; c_row < board_size; c_row++) {
                var t_tr = $("tr");
                for(var c_col = 0; c_col < board_size; c_col++) {
                    var t_td = $("td").css({
                        text-align : center,
                        width : 54px,
                        height : 54px,
                        border : 2px solid #000,
                        background : #000,
                        background-repeat : no-repeat,
                        background-position:center center 
                    }).addClass("block")
                    .mouseenter(BOver(c_row * board_size + c_col))
                    .mouseleave(BOut(c_row * board_size + c_col)
                    .click(BClick(c_row * board_size + c_col);
                    
                    v_block[c_row * board_size + c_col] = 1;
                    
                    t_tr.append(t_td);
                }
                t_table.append(t_tr);
            }            
			
            $(".game_board").append(t_table);
			

			//기본 셋팅 - 벨런스에 따라 조정 필요
			var i, j, r;
			for( i = 0; i < 20; i++)// 빨강
			{
				r = Math.floor(Math.random() * block.length);
				if(Math.random() < 9 / 13)
					PutBlock("block[" + r + "]", "block_set[11]", 2);
				else if(Math.random() < 3 / 4)
					PutBlock("block[" + r + "]", "block_set[12]", 2);
				else
					PutBlock("block[" + r + "]", "block_set[13]", 2);
			}
			for( i = 0; i < 2; i++)// 노랑
			{
				r = Math.floor(Math.random() * block.length);
				PutBlock("block[" + r + "]", "block_set[21]", 2);
			}
			for( i = 0; i < 2; i++)// 파랑
			{
				r = Math.floor(Math.random() * block.length);
				PutBlock("block[" + r + "]", "block_set[31]", 2);
			}

			//프리뷰 블럭 셋팅
			for( i = 0; i < prv_block.length; i++) {
				NewBlock(i);
			}
		}

		function PutBlock(cell, obj, flag) {
			switch(flag) {
				case 0 :
					break;
				case 1 :
					eval("v_" + cell + " = v_" + obj);
					break;
				case 2 :
					eval("v_" + cell + " = parseInt(" + obj + ".innerHTML)");
					break;
			}
			eval(cell + ".style.borderColor = " + obj + ".style.borderColor");
			eval(cell + ".style.backgroundColor = " + obj + ".style.backgroundColor");
			eval(cell + ".style.backgroundImage = " + obj + ".style.backgroundImage");
		}

		function NewBlock(n) {
			if(Math.random() < 8 / 10) {
				if(Math.random() < 2 / 3)
					PutBlock("prv_block[" + n + "]", "block_set[11]", 2);
				else if(Math.random() < 2 / 3)
					PutBlock("prv_block[" + n + "]", "block_set[12]", 2);
				else if(Math.random() < 2 / 3)
					PutBlock("prv_block[" + n + "]", "block_set[13]", 2);
				else if(Math.random() < 2 / 3)
					PutBlock("prv_block[" + n + "]", "block_set[14]", 2);
				else if(Math.random() < 2 / 3)
					PutBlock("prv_block[" + n + "]", "block_set[15]", 2);
				else
					PutBlock("prv_block[" + n + "]", "block_set[16]", 2);
			} else if(Math.random() < 8 / 10) {
				if(Math.random() < 3 / 4)
					PutBlock("prv_block[" + n + "]", "block_set[21]", 2);
				else if(Math.random() < 3 / 4)
					PutBlock("prv_block[" + n + "]", "block_set[22]", 2);
				else if(Math.random() < 3 / 4)
					PutBlock("prv_block[" + n + "]", "block_set[23]", 2);
				else
					PutBlock("prv_block[" + n + "]", "block_set[24]", 2);
			} else {
				PutBlock("prv_block[" + n + "]", "block_set[31]", 2);
			}
		}

		function BClick(n)// 게임 돌아가는 알고리즘
		{
			var i, m;
			if(v_block[n] == 1 && v_prv_block[0] != 1) {
				//프리뷰블럭을 메인블럭에 놓는다.
				block[n].style.cursor = "default";
				PutBlock("block[" + n + "]", "prv_block[0]", 1);

				//블럭 놓기는 +1점 // 점수 함수로 따로 뺄껏.
				score.innerHTML = parseInt(score.innerHTML) + 1;
				p_score.style.color = block[n].style.borderColor;
				p_score.innerHTML = "+1";

				//깜빡이는 효과
				BOver(n);

				//주위블럭을 검색하고 합친다.
				BlockCheck(n);

				//프리뷰 블럭을 재배열하고 하나더 만든다. // 시간나면 스택형식으로 바꾸기
				PrvRefresh();

				//모든 블럭이 채워졌다면 Game Over // 루프 돌지 말고 채워진 블럭을 체크해서 겜오버 시키는 것이 더 효율적이지만 귀찮다. 역시 시간나면...
				for( i = 0; i < board_size * board_size; i++)
				if(v_block[i] == 1 || v_block[i] % 10 == 9)
					break;
				if(i == board_size * board_size) {
					gameover_flag = 1;
					help.style.display = "none";
					f_record.score.value = score.innerHTML;
					f_record.star.value = star.innerHTML;
					record.style.display = "block";
					f_record.id.focus();
					//for(i = 0; i < board_size * board_size; i++) block[i].style.backgroundImage = block_set[1].style.backgroundImage;
					block[13].style.backgroundImage = block_set[1].style.backgroundImage;
					block[13].innerHTML = "G";
					block[14].style.backgroundImage = block_set[1].style.backgroundImage;
					block[14].innerHTML = "a";
					block[15].style.backgroundImage = block_set[1].style.backgroundImage;
					block[15].innerHTML = "m";
					block[16].style.backgroundImage = block_set[1].style.backgroundImage;
					block[16].innerHTML = "e";
					block[19].style.backgroundImage = block_set[1].style.backgroundImage;
					block[19].innerHTML = "O";
					block[20].style.backgroundImage = block_set[1].style.backgroundImage;
					block[20].innerHTML = "v";
					block[21].style.backgroundImage = block_set[1].style.backgroundImage;
					block[21].innerHTML = "e";
					block[22].style.backgroundImage = block_set[1].style.backgroundImage;
					block[22].innerHTML = "r";
					setInterval("GameOver()", 200);
				}
			} else if(v_block[n] % 10 == 9) {
				//별포인트
				star.innerHTML = parseInt(star.innerHTML) + 1;
				PutBlock("block[" + n + "]", "block_set[1]", 2);
				block[n].style.cursor = "default";
				help.innerHTML = "";
			}
		}

		function BlockCheck(n) {
			var count = 0, m = n;
			var stack = new Array();

			do {
				if(v_block[m] < 100)// 아직 체크 안했으면
				{
					v_block[m] += 100;
					// 먼저 체크하고 // 100이상 : 최소 한번 체크 한 곳.
					count++;
					// 세주고
					stack[count - 1] = m;
					// 스택에 저장한다.
				}
				if(m >= board_size && v_block[m] % 100 == v_block[m - board_size])// 위
				{
					m -= board_size;
				} else if(m % board_size < board_size - 1 && v_block[m] % 100 == v_block[m + 1])//오른쪽
				{
					m++;
				} else if(m < board_size * (board_size - 1) && v_block[m] % 100 == v_block[m + board_size])//아래
				{
					m += board_size;
				} else if(m % board_size > 0 && v_block[m] % 100 == v_block[m - 1])//왼쪽
				{
					m--;
				} else {
					v_block[m] = v_block[m] + 1000;
					// 1000이상 : 이 블럭은 체크 완료됐다.
				}
				if(v_block[m] >= 1000)// 스택 되집기
				{
					for( i = count - 1; i >= 0 && v_block[stack[i]] >= 1000; i--)
					if(i >= 0)
						m = stack[i];
				}
			} while(v_block[n] < 1000);// 체크 완료?

			if(count > 2) {
				for( i = 1; i < count; i++) {
					PutBlock("block[" + stack[i] + "]", "block_set[1]", 2);
				}
				v_block[n] = v_block[n] % 100;
				PutBlock("block[" + n + "]", "block_set[" + (v_block[n] + 1) + "]", 2);
				BOver(n);
				setTimeout("BlockCheck(" + n + ")", 100);
			} else {

				for( i = 0; i < count; i++) {
					v_block[stack[i]] = v_block[stack[i]] % 100;
				}
			}
		}

		function PrvRefresh() {
			for( i = 0; i < prv_block.length - 1; i++) {
				PutBlock("prv_block[" + i + "]", "prv_block[" + i + "+1]", 1);
			}
			NewBlock(i);
		}

		function GameOver() {
			BOver(13);
			BOver(14);
			BOver(15);
			BOver(16);
			BOver(19);
			BOver(20);
			BOver(21);
			BOver(22);
		}

		var over = null;
		function BOver(n) {
			over = n;
			if(v_block[n] == 1) {
				block[n].style.cursor = "pointer";
				PutBlock("block[" + n + "]", "prv_block[0]", 0);
				help.innerHTML = block_up[v_prv_block[0]].innerHTML;
			} else {
				block[n].style.borderColor = block_set[Math.floor(v_block[n] / 10) * 10].style.borderColor;
				setTimeout("block[" + n + "].style.borderColor = block_set[" + v_block[n] + "].style.borderColor", 100);
				help.innerHTML = block_up[v_block[n]].innerHTML;
			}

			if(v_block[n] % 10 == 9) {
				block[n].style.cursor = "pointer";
			}
		}

		function BOut(n) {
			over = null;
			if(v_block[n] == 1) {
				block[n].style.cursor = "none";
				PutBlock("block[" + n + "]", "block_set[1]", 0);
			}
			help.innerHTML = "";
		}

		function POver(obj) {
			if(eval("v_" + obj) != 1) {
				eval(obj + ".style.borderColor = block_set[Math.floor(v_" + obj + " / 10) * 10].style.borderColor");
				setTimeout("eval(\"" + obj + ".style.borderColor = block_set[v_" + obj + "].style.borderColor\")", 100);
				help.innerHTML = eval("block_up[v_" + obj + "].innerHTML");
			}
		}

		function POut(obj) {
			help.innerHTML = "";
		}

		function Swap() {
			if(!gameover_flag) {
				if(v_swap == 1) {
					PutBlock("swap", "prv_block[0]", 1);
					PrvRefresh();
				} else {
					PutBlock("temp", "swap", 1);
					PutBlock("swap", "prv_block[0]", 1);
					PutBlock("prv_block[0]", "temp", 1);
				}
				if(over != null && v_block[over] == 1)
					BOver(over);
				else
					POver("swap");
			}
		}

		var view_flag = 0;
		var tid = null;
		function SwapView() {
			scoreboard[view_flag].style.display = "block";
			for(var i = ((view_flag + 1) % scoreboard.length); i != view_flag; i = ((i + 1) % scoreboard.length)) {
				scoreboard[i].style.display = "none";
			}
			view_flag = (view_flag + 1) % scoreboard.length;
			clearTimeout(tid);
			tid = setTimeout("SwapView()", 7000);
		}

		var flag_record = 1;
		function Record() {
			if(flag_record) {
				flag_record--;
				if(f_record.id.value == "")
					f_record.id.value = f_record.temp_id.value;
				f_record.submit();
			}
			return false;
		}


		$(window).ready(function() {
            $(".here").each(function(){
                $(this).attr("src", "<?= $path; ?>"+$(this).attr("src"));
            });
			DisplayGameboard();
			//SwapView();
			
		});

    </script>
