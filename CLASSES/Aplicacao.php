<?php

	include 'CLASSES/Transporte.php';


	class Aplicacao extends Transporte {

		public $fornServInternet; //Fornecimento de serviços pela internet
		public $escolheTransp; // escolhe o tipo de transporte necessário
		
		function encapsular(){			
			echo '
			          <div class="card flex-md-row mb-4 box-shadow h-md-250">
			            <div class="card-body d-flex flex-column align-items-start">             
			                            
			              <p class="card-text mb-auto">
							Passou pela camada Aplicacao
			              </p>                
			            </div>            
			          </div>
			       '	;			
			parent::encapsular()."<br>";
		}
		
	}

?>