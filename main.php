<?php
	
	include 'CLASSES/Aplicacao.php';	

	$camada = $_POST["camada"];	
	$camada = strtoupper($camada);		
	
	switch ($camada) {
		case 'FISICA':
			$teste = new Fisica();
			$teste->encapsular();
					break;
		case 'REDE':
			$teste = new Rede();
			$teste->encapsular();
			break;
		case 'TRANSPORTE':
			$teste = new Transporte();
			$teste->encapsular();
			break;
		case 'APLICACAO':
			$teste = new Aplicacao();
			$teste->encapsular();
			break;		
		default:			
			echo "<h1><center>Essa Camada Não Existe</center></h1>";
			break;
	}	

?>