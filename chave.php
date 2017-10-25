<?php
function tabela_chave($int_player_total, $jogadores){

	//get rounds
	$int_round = (int)log($int_player_total,2);

	
	//set header
	$arr_round_data = array();
	if($int_player_total == 32){
		$arr_round_data = array(
				32 => array(
					32 => array("fase" => 'R1',"players" => $jogadores[32]),
					16 => array("fase" => 'R2',"players" => $jogadores[16]), 
					8 => array("fase" => 'QF',"players" => $jogadores[8]), 
					4 => array("fase" => 'SF',"players" => $jogadores[4]), 
					2 => array("fase" => 'Final',"players" => $jogadores[2]),
					1 => array("fase" => "Campeão","players" => $jogadores[1])
				)

		);
	}else if($int_player_total == 16){
			$arr_round_data = array(
				16 => array(
					16 => array("fase" => 'R1',"players" => $jogadores[16]), 
					8 => array("fase" => 'QF',"players" => $jogadores[8]), 
					4 => array("fase" => 'SF',"players" => $jogadores[4]), 
					2 => array("fase" => 'Final',"players" => $jogadores[2]),
					1 => array("fase" => "Campeão","players" => $jogadores[1])
				)
			);
	}else if($int_player_total == 8){
			$arr_round_data = array(
				2 => array(2 => 'Final'),
				4 => array(4 => 'SF', 2 => 'Final'),
				8 => array( 
					8 => array("fase" => 'QF', "players" => $jogadores[8]), 
					4 => array("fase" => 'SF', "players" => $jogadores[4]), 
					2 => array("fase" => 'Final', "players" => $jogadores[2]),
					1 => array("fase" => "Campeão","players" => $jogadores[1])
				)
			);
	}
	
	
	$jogadores_ja_exibidos_por_fase = array();
	$numero_fase = $int_player_total;
	while($numero_fase >= 1){
		$jogadores_ja_exibidos_por_fase[$numero_fase] = 0;
		$numero_fase = $numero_fase / 2;
	}
	
	// make a table element
	$html = '<table>';

	$html.= '<tr>';

	//round header words by setting "int_round" as header array index
	foreach($arr_round_data[$int_player_total] as $key => $value)
		$html.= '<td class="center head">'.$arr_round_data[$int_player_total][$key]["fase"].'</td>';

	//add "Champion" header if you wanna put champion player's name below it.
	//$html.= '<td class="center head">Champion</td>';

	$html.= '</tr>';

	/* 
	 * 1. begin to make a draw for some matches like tennis, table tennis and so on.
	 * 2. r equals to ROW, c equals to COLUMN.
	 * 3. r starts from 0, so does c.
	 * */

	$linha_horizontal_anterior = false;
	for($r = 0; $r < $int_player_total; $r++)
	{
		$numero_fase = $int_player_total;
		$html.= '<tr>';
		for($c = 0; $c <= $int_round; $c++)
		{
			//initialize some variables for CSS setting, meanwhile, set them empty.
			$str_class_underline = "";
			$str_class_left = "";
			$str_class_right = "";
			$linha_horizontal = false;
			
			//because of zero as initial index, we need to get number less than last round, otherwise, it will print something redundant out.
			if( $c < $int_round )
			{
				/*
				 * it's my algorism to run this code as following code,
				 * you can analyze how it works or send a mail to me,
				 * I'll explain how I use for you.
				 * */
				
				//horizontal line
				if( ($r%((pow(2,$c)-1)*2+2)) == (pow(2,$c)-1) )
				{
					$str_class_underline = "underline";
					$linha_horizontal = true;
					$linha_horizontal_anterior = true;
				}

				//vertical line
				for($t = 0; $t < ($int_player_total*2/pow(2,$c+2)-1); $t++)
				{
					for($tt = pow(2,$c)+$t*pow(2, $c+2); $tt <= pow(2,$c)+$t*pow(2,$c+2)+pow(2,$c+1)-1; $tt++)
					{
						if( $r == $tt )
						{
							$str_class_right = "right";
						}
					}
				}
			}

			//print appropriate line when it's satisfied with above condition.
			$html.= '<td class="';
			$html.= $str_class_underline.' ';
			$html.= $str_class_left.' ';
			$html.= $str_class_right.' ';
			$html.= '">';
			
			$exibiu_anterior = false;
			if($jogadores_ja_exibidos_por_fase[$numero_fase] > 0)
				$exibiu_anterior = $arr_round_data[$int_player_total][$numero_fase]["players"][$jogadores_ja_exibidos_por_fase[$numero_fase] - 1][1] == true;
			if(($linha_horizontal == true || $exibiu_anterior == true) && $jogadores_ja_exibidos_por_fase[$numero_fase] < sizeof($arr_round_data[$int_player_total][$numero_fase]["players"])){
				$html.=$arr_round_data[$int_player_total][$numero_fase]["players"][$jogadores_ja_exibidos_por_fase[$numero_fase]][0];
				//$html.=$numero_fase . "|" . $jogadores_ja_exibidos_por_fase[$numero_fase] . "|" . sizeof($arr_round_data[$int_player_total][$numero_fase]["players"]);
				if($linha_horizontal == true)
					$arr_round_data[$int_player_total][$numero_fase]["players"][$jogadores_ja_exibidos_por_fase[$numero_fase]][1] = true;
				$jogadores_ja_exibidos_por_fase[$numero_fase] = $jogadores_ja_exibidos_por_fase[$numero_fase] + 1 ;
				
			}
			//if($linha_horizontal == false && $linha_horizontal_anterior == true){
				//console_log($numero_fase);
				//$html.=$arr_round_data[$int_player_total][$numero_fase]["players"][$r];
				//$linha_horizontal_anterior = false;
			//}
			$numero_fase = $numero_fase / 2;
			//print my coordinate (you can set your player's name here)
			
			//if($c == 0){
				//$html.= $players[$r];
			//}else{
				//$html.= "";
			//}
			
			$html.= '</td>';
		}
		$html.= '</tr>';
	}

	$html.= '</table>';
	return $html;
}
?>