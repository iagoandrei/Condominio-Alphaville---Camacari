<!DOCTYPE html>
<html>
<head lang="pt-br">
	<title>Cadastro</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/estilo_login.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
	<?php 
	?>
<body>
	<img id="img_logo" src="fotos/logo-login.png" style="margin-top: 30px;">
	<div class="container">
		<div class="row justify-content-center" style="margin-top: 210px;">
		<div class="col-sm-5 ">
		<form action="#" method="post" >
			<div class="form-group fg">
			<div class="col-auto" style="padding: 20px;">
      			<label class="sr-only" for="inlineFormInputGroup">Usuário</label>
     				<div class="input-group mb-2">
        				<div class="input-group-prepend">
          				<div class="input-group-text"><i class="fas fa-at"></i></div>
        			</div>
        				<input type="text" class="form-control" id="inlineFormInputGroup" placeholder="e-mail">
					</div><br>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user-lock"></i></span>
						</div>
						<input type="text" class="form-control" name="senha" id="s" placeholder="senha">
					<!--asd-->
				</div><br>
				<div class="form-group">
	
					<button type="submit" class="btn btn-success" style="position: absolute; left: 78.5%;"><a href="adm.php" style="text-decoration: none; color:#fff;">Acessar</a></button><br><br>
					<button type="button" class="btn btn-link bt-lg btn-block" style="background-color: #ededed;" data-toggle="modal" data-target="#esqueceu">Esqueceu sua senha?</button>
					<button type="button" class="btn btn-link bt-lg btn-block" style="background-color: #ededed;" data-toggle="modal" data-target="#cadastro">Solicite o seu cadastro</button>
				
				</div>
    		</div>
		</form>
		<!--MODAL-->
			<div class="modal fade" id="esqueceu" role="dialog" tabindex="-1" >
				<div class="modal-dialog" role=document>
					<div class="modal-content">

						<div class="modal-header">
							<h5 class="modal-title">Esqueceu sua senha?</h5>
							<button class="close" type="button" data-dismiss="modal">
								<span>&times;</span>
							</button>
						</div>
						
						<div class="modal-body">
						<p>Informe seu e-mail cadastrado para solicitar o reenvio da senha:</p>
							<form action="#" method="post">	
								<label for="email-e">Email:</label>
								<input required type="text" class="form-control" id="email-e" name="email-recu" placeholder="e-mail">
							
						</div>

						<div class="modal-footer">
							<button class="btn btn-success" type="submit">Enviar</button>
							<button class="btn btn-danger" type="button" data-dismiss="modal">Cancelar</button>
						
						</div>
						</form>
					</div>
				</div>
			</div>
			<!--MODAL CAD-->
			<div class="modal fade" role="dialog" id="cadastro" tabindex="-1">
				<div class="modal-dialog" role="document">
					<div class="modal-content">

						<div class="modal-header">
							<h5 class="modal-title">Preencha os campos abaixo:</h5>
							<button class="close" type="button" data-dismiss="modal">
								<span>&times;</span>
							</button>
						</div>

						<div class="modal-body">
							<form action="#" method="post">

								<div class="form-group row row">
									<label class="col-sm-3 col-form-label" for="n">Nome</label>
									<div class="col-sm-9">
										<input required type="text" class="form-control" id="n" name="nome" placeholder="nome completo">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-sm-3 col-form-label" for="nasc">Nascimento</label>
									<div class="col-sm-9">
										<input required type="text" class="form-control" id="nasc" name="nascimento" placeholder="data de nascimento">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-sm-3 col-form-label" for="e">E-mail</label>
									<div class="col-sm-9">
										<input required type="text" class="form-control" id="e" name="email" placeholder="e-mail">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-sm-3 col-form-label" for="nt">Número de Telefone</label>
									<div class="col-sm-9">
										<input required type="text" class="form-control" id="nt" name="number-tel" placeholder="telefone">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-sm-3 col-form-label" for="c">Condomínio</label>
									<div class="col-sm-9">
										<input required type="text" class="form-control" id="c" name="condominio" placeholder="nome do condominio">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-sm-3 col-form-label" for="ba">Bloco e Ap.</label>
									<div class="col-sm-9">
										<input required type="text" class="form-control" id="ba" name="blocoAp" placeholder="número ou bloco do apartamento ou casa">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-sm-3 col-form-label" for="city">Cidade</label>
									<div class="col-sm-9">
										<input required type="text" class="form-control" name="cidade" id="city" placeholder="cidade">
									</div>
								</div>

						</div>

						<div class="modal-footer">
							<button class="btn btn-success" type="submit">Enviar</button>
							<button class="btn btn-danger" type="button" data-dismiss="modal">Cancelar</button>
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>