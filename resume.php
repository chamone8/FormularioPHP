<?php

require 'formulario.php';


$dados = UI_Comp_Formulario::Renderer();

$valida =  UI_Comp_Formulario::Validator();
 
UI_Comp_Formulario::UI_Comp_Formularios($valida);

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Resultado</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<script src="scripts/plug/jquery.mask.js"></script>

	<style>
		.menu {
			margin-top: 30px;
		}


		.Checkbox {
			margin-top: 20px;
		}

		.textarea {
			margin-top: 20px;
		}

		.text {
			word-wrap: break-word;
		}
	</style>

</head>

<body>

	<div class="container">
		<h2>Resultado Form</h2>
		<div class="panel panel-primary">
			<div class="panel-heading">
			Cadastro realizado com sucesso !!!
			</div>
			<div class="panel-body">

				<ul class="list-group">
					<p>Data:</p>
					<li class="list-group-item col-md-3">
						<?php
						echo $dados['date'];
						?>
					</li>
					<br />

					<p>Checkbox:</p>
					<li class="list-group-item col-md-3">
						<?php
						echo $dados['check'];
						?>
					</li>
					<br />


					<p>Texto:</p>
					<li class="list-group-item text">
						<?php
						echo $dados['texto'];
						?>
					</li>
					<br />

					<p>Texto Longo</p>
					<li class="list-group-item text">
							<?php
							echo $dados['textoLongo'];
							?>
					</li>

				</ul>

				<a href="index.php" class="btn btn-default">Voltar</a>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="scripts/formulario.js"></script>
</body>