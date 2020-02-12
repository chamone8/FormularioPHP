var formulario = function (){
	
	var date = '#date';
	var textoCurto = '#texto';
	var textoLongo = '#textoLongo';
	var Letra ="";
	
	function inicializar () {
		validaCamposComMascara();
		validarCampoTexte();
		validarCampoTextoLongo();
		VerificarDataValida();
	}
	
	function validaCamposComMascara() {
		$(date).mask("99/99/9999");    
    }
	
	function validarCampoTexte(){
		Letra = "";
		 $(textoCurto).on('keyup', function (event) {
			 
			 if(Letra.length >= 144){
				 alert("Campo texto so pode ter no maximo 144 caracteres");
			 }else{
				Letra = event.target.value.replace(/[^a-z ]/g, "").substring(0,144);
				console.log(Letra.length);
				$(this).val(Letra || '');
			 }
        });
	}
	
		function validarCampoTextoLongo(){
		Letra = "";
		 $(textoLongo).on('keyup', function (event) {
			 
			 if(Letra.length >= 255){
				 alert("Campo texto so pode ter no maximo 255 caracteres");
			 }else{
				Letra = event.target.value.replace(/[^A-Z\d ]/g, "").substring(0,255);
				console.log(Letra.length);
				$(this).val(Letra || '');
			 }
        });
	}
	inicializar();
	
}();