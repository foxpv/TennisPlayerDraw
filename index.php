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
				<div class="span6">
					<?php

					$jogadoresA = array(
						32 => array(
							array("Alfredo", false), 
							array(" ", false), 
							array("Fred", false), 
							array(" ", false), 
							array("Fabio", false), 
							array(" ", false), 
							array("Diogo", false), 
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
							array("Dalmy", false),
							array(" ", false),
							array("Aldren", false),
							array(" ", false),
							array("Pedro", false),
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
				<div class="span6">
					<h3>Rodada1</h3>
					<ul>
						<li>Fabio vs Diogo</li>
						<li>Luciano vs Marcelo</li>
						<li>João Pedro vs Dalmy</li>
						<li>Aldren vs Pedro A.</li>
					</ul>
				</div>
			</div>
		</div>
	

	
		<div class="tab-pane" id="dv_classe_b">
			
			<div class="row" >
				<div class="span6">
					<?php

					$jogadoresB = array(
						32 => array(
							array("Marcelo", false), 
							array(" ", false), 
							array("Bye", false), 
							array(" ", false), 
							array("Luis", false), 
							array(" ", false), 
							array("Diogo", false), 
							array(" ", false), 
							array("Pedro A.", false), 
							array(" ", false), 
							array("Bruno G.", false), 
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
							array("Dado", false),
							array(" ", false),
							array("Fabricio", false),
							array(" ", false),
							array("Paulo", false),
							array(" ", false),
							array("Bye", false),
							array(" ", false),
							array("Aldren", false),
							array(" ", false)),
						16 => array(
							array("Marcelo", false), 
							array("", false), 
							array("", false), 
							array("", false), 
							array("", false),
							array("", false), 
							array("Maria", false), 
							array("", false), 
							array("Duda", false), 
							array("", false), 
							array("", false), 
							array("", false), 
							array("", false), 
							array("", false), 
							array("Aldren", false), 
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
				<div class="span6">
					<h3>Rodada1</h3>
					<ul>
						<li>Luis vs Diogo</li>
						<li>Pedro A. vs Bruno G.</li>
						<li>Pedro S. vs Dado</li>
						<li>Fabricio vs Paulo</li>
					</ul>
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
							<td>Fabio</td>
						</tr>
						<tr>
							<td>Wagner</td>
						</tr>
						<tr>
							<td>Alessandra</td>
						</tr>
					</table>
				</div>
				<div class="span6">
					<h3>Jogos</h3>
					<ul>
						<li>Edson vs Fabio</li>
						<li>Wagner vs Alessandra</li>
						<li>Edson vs Alessandra</li>
						<li>Fabio vs Wagner</li>
						<li>Edson vs Wager</li>
						<li>Fabio vs Alessandra</li>
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
							<td>Mayconl</td>
						</tr>
						<tr>
							<td>Caio</td>
						</tr>
						<tr>
							<td>Thiago</td>
						</tr>
						<tr>
							<td>Lucas</td>
						</tr>
					</table>
				</div>
				<div class="span6">
					<h3>Jogos</h3>
					<ul>
						<li>Mayconl vs Caio</li>
						<li>Thiago vs Lucas</li>
						<li>Mayconl vs Lucas</li>
						<li>Caio vs Thiago</li>
						<li>Mayconl vs Thiago</li>
						<li>Caio vs Lucas</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	
</body>
</html>