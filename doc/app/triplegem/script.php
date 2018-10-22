<script language="JavaScript">
	var board_size = 6, gameover_flag = 0;
	var v_block = new Array(1);
	var v_swap = 1;
	var v_temp = 1;
	var v_prv_block = new Array(1, 1);
	function DisplayGameboard()// 게임보드 만들기
	{
		var sc = "";
		//메인 보드 만들기
		sc = "\n<table style=\"width:342px;height:342px;border:2px solid #fff\">\n";
		for(var c_row = 0; c_row < board_size; c_row++) {
			sc += "\t<tr>\n";
			for(var c_col = 0; c_col < board_size; c_col++) {
				sc += "\t\t<td align=\"center\" width=\"54\" height=\"54\"";
				sc += " style=\"border:2px solid #000;background-color:#000;background-repeat:no-repeat;background-position:center center;\"";
				sc += " id=\"block\"";
				sc += " onMouseOver=\"BOver(" + (c_row * board_size + c_col) + ")\"";
				sc += " onMouseOut=\"BOut(" + (c_row * board_size + c_col) + ")\"";
				sc += " onClick=\"BClick(" + (c_row * board_size + c_col) + ")\"";
				sc += ">";
				sc += "&nbsp;";
				sc += "</td>\n";
				v_block[c_row * board_size + c_col] = 1;
			}
			sc += "\t</tr>\n";
		}
		sc += "</table>\n";
		game_board.innerHTML = sc;

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
		DisplayGameboard();
		SwapView();
	});

</script>