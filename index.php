<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Copa Joselito Alimentos</title>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>

<script src="http://code.jquery.com/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</head>
<body>	
	<?php

			include 'chave.php';
	?>
	<h1>Copa Joselito Alimentos</h1>
	
    <ul class="nav nav-tabs" >
      <li class="active"><a href="#dv_classe_a" data-toggle="tab">Classe A</a></li>
      <li><a href="#dv_classe_b" data-toggle="tab">Classe B</a></li>
      <li><a href="#dv_classe_c" data-toggle="tab">Classe C</a></li>
    </ul>
	
	<div class="tab-content" id="dvChave">
		<div class="tab-pane active" id="dv_classe_a">
			
			<div class="row" >
				<div class="span12">
					<?php

					$jogadoresA = array(
						32 => array(
							array("Alfredo", false), 
							array(" ", false), 
							array("<div class='data_horario_jogo'> 29/09 18hs </div>Fred", false), 
							array(" ", false), 
							array("Fabio", false), 
							array(" ", false), 
							array("<div class='data_horario_jogo'> 29/09 19:30hs </div>Diogo", false), 
							array(" ", false), 
							array("Luciano", false), 
							array(" ", false), 
							array("Marcelo", false), 
							array(" ", false), 
							array("Bye", false), 
							array(" ", false), 
							array("Mauricio", false), 
							array(" ", false),
							array("Juliano", false),
							array(" ", false),
							array("Bye", false),
							array(" ", false),
							array("João", false),
							array(" ", false),
							array("<div class='data_horario_jogo'> 30/09 16hs </div>Dalmy", false),
							array(" ", false),
							array("Aldren", false),
							array(" ", false),
							array("<div class='data_horario_jogo'> 29/09 21hs </div>Pedro", false),
							array(" ", false),
							array("Bye", false),
							array(" ", false),
							array("Nelson", false),
							array(" ", false)),
						16 => array(
							array("Alfredo 6/1 6/3", false), 
							array(" ", false), 
							array(" ", false), 
							array(" ", false), 
							array(" ", false), 
							array(" ", false), 
							array("Mauricio", false), 
							array(" ", false), 
							array(" Juliano", false), 
							array("", false), 
							array(" ", false), 
							array(" ", false), 
							array("Pedro 6/2 2/6 10/5", false), 
							array("", false), 
							array("Nelson", false), 
							array(" ", false)),
						8 => array(
							array(" ", false), 
							array("", false), 
							array("", false), 
							array(" ", false), 
							array(" ", false), 
							array("", false), 
							array("", false), 
							array(" ", false)),
						4 => array(array("", false),array("", false),array("", false),array("", false)),
						2 => array(array("", false),array("", false)),
						1 => array(array("", false)),
						);
					$html = tabela_chave(32, $jogadoresA);
					echo($html);
					?>
				</div>
				
			</div>
			<a href="javascript:printDiv('dv_classe_a')">Imprimir</a>
		</div>
	

	
		<div class="tab-pane" id="dv_classe_b">
			
			<div class="row" >
				<div class="span12">
					<?php

					$jogadoresB = array(
						32 => array(
							array("Marcelo", false), 
							array(" ", false), 
							array("Bye", false), 
							array(" ", false), 
							array("Luis", false), 
							array(" ", false), 
							array("<div class='data_horario_jogo'> 30/09 17hs </div>Diogo", false), 
							array(" ", false), 
							array("Pedro A.", false), 
							array(" ", false), 
							array("<div class='data_horario_jogo'> 30/09 15hs </div>Bruno G.", false), 
							array(" ", false), 
							array("Bye", false), 
							array(" ", false), 
							array("Maria", false), 
							array(" ", false),
							array("Duda", false),
							array(" ", false),
							array("Bye", false),
							array(" ", false),
							array("Pedro S.", false),
							array(" ", false),
							array("<div class='data_horario_jogo'> 30/09 14hs </div>Dado", false),
							array(" ", false),
							array("Fabricio", false),
							array(" ", false),
							array("<div class='data_horario_jogo'> 30/09 13hs </div>Paulo", false),
							array(" ", false),
							array("Bye", false),
							array(" ", false),
							array("Aldren", false),
							array(" ", false)),
						16 => array(
							array("Marcelo", false), 
							array("", false), 
							array("<div class='data_horario_jogo_r2'> 01/10 12:30hs </div>", false), 
							array("", false), 
							array("", false),
							array("", false), 
							array("<div class='data_horario_jogo_r2'> 01/10 15hs </div><div class='jogador_de_baixo'>Maria</div>", false), 
							array("", false), 
							array("Duda", false), 
							array("", false), 
							array("<div class='data_horario_jogo_r2'> 01/10 16hs </div>", false), 
							array("", false), 
							array("", false), 
							array("", false), 
							array("<div class='data_horario_jogo_r2'> 01/10 11hs </div><div class='jogador_de_baixo'>Aldren</div>", false), 
							array("", false)),
						8 => array(
							array("", false), 
							array("", false), 
							array("", false), 
							array("", false), 
							array("", false), 
							array("", false), 
							array("", false), 
							array("", false)),
						4 => array(array("", false),array("", false),array("", false),array("", false)),
						2 => array(array("", false),array("", false)),
						1 => array(array("", false)),
						);
					$html = tabela_chave(32, $jogadoresB);
					echo($html);
					?>
				</div>
				
			</div>
			<a href="javascript:printDiv('dv_classe_b')">Imprimir</a>
		</div>

		<div class="tab-pane" id="dv_classe_c">
			
			<div class="row" >
				<div class="span6">
					<h3>Grupo A</h3>
					<table>
						<tr>
							<td class="head">Nome</td>
						</tr>
						<tr>
							<td>Edson</td>
						</tr>
						<tr>
							<td>Caio</td>
						</tr>
						<tr>
							<td>Thiago</td>
						</tr>
						<tr>
							<td>Alessandra</td>
						</tr>
					</table>
				</div>
				<div class="span6">
					<h3>Jogos</h3>
					<table>
						<tr><td class="head" style="width:250px;">Jogo</td><td class="head">Resultado</td></tr>
						<tr><td>Edson vs Thiago 30/09 10:00</td><td></td></tr>
						<tr><td>Caio vs Alessandra 30/09 12:00</td><td></td></tr>
						<tr><td>Edson vs Alessandra 01/10 08:00</td><td></td></tr>
						<tr><td>Caio vs <b>Thiago</b> 01/10 10:00</td><td>Thiago 8/5</td></tr>
						<tr><td>Edson vs Caio</td><td></td></tr>
						<tr><td>Thiago vs Alessandra</td><td></td></tr>
					</table>
				</div>
			</div>
			<div class="row" >
				<div class="span6">
					<h3>Grupo B</h3>
					<table>
						<tr>
							<td class="head">Nome</td>
						</tr>
						<tr>
							<td>Fernanda</td>
						</tr>
						<tr>
							<td>Fabio</td>
						</tr>
						<tr>
							<td>Vagner</td>
						</tr>
						<tr>
							<td>Mariliane</td>
						</tr>
					</table>
				</div>
				<div class="span6">
					<h3>Jogos</h3>
					<table>
						<tr><td class="head" style="width:250px;">Jogo</td><td class="head">Resultado</td></tr>
						<tr><td>Fabio vs Vagner 30/09 11:00</td><td></td></tr>
						<tr><td>Fernanda vs Mariliane 30/09 15:00</td><td></td></tr>
						<tr><td>Vagner vs Mariliane 01/10 09:00</td><td></td></tr>
						<tr><td>Fernanda vs <b>Fabio</b> 01/10 14:00 </td><td>Fabio 8/6</td></tr>
						<tr><td>Fernanda vs Vagner</td><td></td></tr>
						<tr><td>Fabio vs Mariliane</td><td></td></tr>
					</table>
				</div>
			</div>
			<a href="javascript:printDiv('dv_classe_c')">Imprimir</a>
		</div>
	</div>
	
	<iframe name="print_frame" width="0" height="0" frameborder="0" src="about:blank"></iframe>
</body>
<script>
    printDivCSS = new String ('<style>td{width: 150px;height: 25px;}td.underline{border-bottom: 1px solid #000000;}td.left{border-left: 1px solid #000000;}td.right{border-right: 1px solid #000000;}td.center{text-align: center;}td.head{background-color: #EFEFEF;}.data_horario_jogo{margin-bottom: 10px;font-weight: bold;}.data_horario_jogo_r2{margin-top: -53px;font-weight: bold;}.jogador_de_baixo{margin-top: 24px;}</style>');
    function printDiv(divId) {
        window.frames["print_frame"].document.body.innerHTML=printDivCSS + document.getElementById(divId).innerHTML;
        window.frames["print_frame"].window.focus();
        window.frames["print_frame"].window.print();
    }
</script>
</html>