<?php
	
	include 'CLASSES/Fisica.php';

	class Rede extends Fisica {
		
			public $comunDoisPostos; //comunicação entre dois postos de trabalhos
			public $endPacotes; // endereçamento de pacotes
			public $encPacotes; // encaminhamento de pacotes
			public $verifPacotes; // verificação de pacotes
			public $infErros; // recebe e envia mensagens de erros
			public $envDataIP; // envia datagramas IP 

		function encapsular(){
			echo '
		          <div class="card flex-md-row mb-4 box-shadow h-md-250">
		            <div class="card-body d-flex flex-column align-items-start">   
		                             
		              <p class="card-text mb-auto">
						Passou pela Camada de Rede
		              </p>                
		            </div>            
		          </div>
		        '	;	
			parent::encapsular()."<br>";
		}
		
	}

?>