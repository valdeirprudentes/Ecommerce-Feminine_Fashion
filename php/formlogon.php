<!DOCTYPE html>
<html lang="pt-br">
<!-- indicando a linguagem que iremos usar no codigo html -->

<head>
	<meta charset="uft-8"> <!-- indicando o sistema de caractere utf-8 -->

	<title>login de usuário</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<style>
		.navbar {
			margin-bottom: 0;
		}
	</style>

</head>

<body>

	<?php

	include 'conexao.php';
	include 'nav.php';
	include 'cabecalho.html';

	?>

	<div class="container-fluid">

		<div class="row">

			<div class="col-sm-4 col-sm-offset-4">

				<h2>Logon de Usuário</h2>
				<form name="frmusuario" method="POST" action="validausuario.php">

					<div class="form-group">

						<label for="email">Email</label>
						<input name="txtemail" type="email" class="form-control" required id="email">
					</div>

					<div class="form-group">

						<label for="senha">Senha</label>
						<input name="txtsenha" type="password" class="form-control" required id="senha">
					</div>


					<button type="submit" class="btn btn-lg btn-default">

						<span class="glyphicon glyphicon-ok"> Entrar</span>

					</button>
					</form>

					<a href="formusuario.php"> 
						<button type="button" class="btn btn-lg btn-link">

						Ainda não sou cadastrado

						</button>
					</a>

					<a href="esquecisenha.php" class="btn btn-lg btn-link">						

						Esqueci minha senha

						</button>
					</a>			

			</div>
		</div>
	</div>

	<?php include 'rodape.html' ?>

</body>

</html>