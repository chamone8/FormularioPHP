<?php
session_start();

class UI_Comp_Formulario
{

	//Classe que trata a Validação dos Campos, mas o mesmo ja esta sendo tatado via javascript88
	public static function UI_Comp_Formularios($valor){
		
		if($valor){
			return;
		}else{
			$_SESSION['msg'] = "Campos não foram preenchidos corretamente !!!</p>";
			header("location: index.php");
		}
		
	}

	public static function Renderer()
	{
		$Campos = [];

		$Campos['texto'] = $_POST['texto'];

		$Campos['date'] = $_POST['date'];

		$Campos['textoLongo'] = $_POST['textoLongo'];

		$Campos['check'] = isset($_POST['check']) == true ? "Marcado" : "Desmarcado";


		return $Campos;
	}


	public static function Validator()
	{
		if($_POST['texto'] == "" || $_POST['date'] == "" || $_POST['textoLongo'] == ""){
			return false;
		}

		return true;	
	}
}
