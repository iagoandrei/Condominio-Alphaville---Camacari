<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>ADM de Chamadas</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/estilo_adm_chamada.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<body>
	<header id="cabecalho">
		<a href="adm.php"><button style="background-color: transparent;border: none; outline: none; cursor: pointer;"><i id="arrow" class="fas fa-arrow-circle-left"></i></button></a>&nbsp&nbsp<img src="fotos/alphaville.png">
	</header>
	<div id="area">
		<h1 id="form_title">Atendimento de Chamadas</h1>
		<form class="form_chamada" method="post" action="">
			<div id="part1">
				<input type="radio" name="option" id="option1"><label name="opt1" for="option1" style="font-family: arial;">Abertos</label>
				<input type="radio" name="option" id="option2"><label name="opt1" for="option2" style="font-family: arial;">Fechados</label>
				<input type="radio" name="option" id="option3"><label name="opt1" for="option3" style="font-family: arial;">Todos</label>
				<input type="radio" name="option" id="option4"><label name="opt1" for="option4" style="font-family: arial;">Codigos</label>
			</div><br>
			<div id="part2">
				<table>
					<tr>
						<td>
						<select name="result_pag" id="rp">
							<option name="opcao1" id="op1">10</option>
							<option name="opcao2" id="op2">25</option>
							<option name="opcao3" id="op3">50</option>
							<option name="opcao4" id="op4">100</option>
						</select>
					</td>
					<td>
						<p style="font-family: sans-serif"> Resultados por pagina</p>
					</td>
				</tr>
			</table>
			</div>
			<div id="pesquisa">
				<p>Pesquisar&nbsp&nbsp<input type='text' name="search" id="search"></p>
			</div>
			<div id="part3">
				<table class="table_dados">
					<tr>
						<th>#</th>
						<th><i class="fas fa-long-arrow-alt-up"></i><i class="fas fa-long-arrow-alt-down"></i>&nbsp&nbspCondominio</th>
						<th><i class="fas fa-long-arrow-alt-up"></i><i class="fas fa-long-arrow-alt-down"></i>&nbsp&nbspA/C</th>
						<th><i class="fas fa-long-arrow-alt-up"></i><i class="fas fa-long-arrow-alt-down"></i>&nbsp&nbspAssunto</th>
						<th><i class="fas fa-long-arrow-alt-up"></i><i class="fas fa-long-arrow-alt-down"></i>&nbsp&nbspSolicitante</th>
						<th><i class="fas fa-long-arrow-alt-up"></i><i class="fas fa-long-arrow-alt-down"></i>&nbsp&nbspAbertura</th>
						<th><i class="fas fa-long-arrow-alt-up"></i><i class="fas fa-long-arrow-alt-down"></i>&nbsp&nbspStatus</th>
						<th><i class="fas fa-long-arrow-alt-up"></i><i class="fas fa-long-arrow-alt-down"></i>&nbsp&nbspData Atendimento:</th>
					</tr>
					<tr><td colspan="8" style="font-family: sans-serif; font-size: 15px; text-align: center;">Nenhum resultado encontrado</td></tr>
				</table>
			</div>
		</form>

	</div>
	<script src="js/admin_calls.js"></script>
</body>
</html>
