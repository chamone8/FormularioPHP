<?php 
session_start() ;

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Formulario Principal</title>
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
		.msg{
			color: red;
			font-size: 20px;
			width: 330px;
			font-style: normal;
		}
	</style>

</head>

<body>

	<div class="container">
		<h2>Formulario</h2>
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h5>Bem Vindo!!!</h5>
				<div class="msg">
					<?php

					if (isset($_SESSION['msg'])) {
						echo $_SESSION['msg'];
						unset($_SESSION['msg']);
					}
					?>
				</div>
			</div>
			<div class="panel-body">
				<form action="resume.php" method="POST">


					<!--DATA-->
					<div class="form-group col-md-3">
						<label for="data">Data</label>
						<input type="text" class="form-control" id="date" name='date'>
					</div>
					<!--TEXTO-->
					<div class="form-group col-md-12">
						<label for="data">Texto</label>
						<input type="text" class="form-control" id="texto" name='texto'>
					</div>
					<!--CHECKBOX-->
					<div class="checkbox col-md-12">
						<label><input type="checkbox" name="check">Checkbox</label>
					</div>
					<!--TEXTAREA-->
					<div class="col-md-7 form-group textarea">
						<label for="validationTextarea">Textarea</label>
						<textarea class="form-control " id="textoLongo" name='textoLongo'></textarea>
					</div>
					<div class="form-group">
						<div class="col-sm-10">
							<button type="submit" class="btn btn-primary">Enviar</button>
						</div>
					</div>

				</form>


			</div>
		</div>
	</div>		

	<script type="text/javascript" src="scripts/formulario.js"></script>
</body>