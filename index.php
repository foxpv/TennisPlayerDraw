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
	
	<div class="tab-content" >
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
							array(" ", false), 
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
							array("  ", false), 
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
							array("<div class='data_horario_jogo'> 30/09 13hs </div>Bruno G.", false), 
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
					<ul>
						<li>Edson vs Thiago 30/09 10:00</li>
						<li>Caio vs Alessandra 30/09 12:00</li>
						<li>Edson vs Alessandra 01/10 08:00</li>
						<li>Caio vs Thiago 01/10 10:00</li>
						<li>Edson vs Caio</li>
						<li>Thiago vs Alessandra</li>
					</ul>
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
					<ul>
						<li>Fabio vs Vagner 30/09 11:00</li>
						<li>Fernanda vs Mariliane 30/09 15:00</li>
						<li>Vagner vs Mariliane 01/10 09:00</li>
						<li>Fernanda vs Fabio 01/10 14:00</li>
						<li>Fernanda vs Vagner</li>
						<li>Fabio vs Mariliane</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	
</body>
</html>