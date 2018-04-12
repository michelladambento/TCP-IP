<?php

	include 'CLASSES/Rede.php';

	class Transporte extends Rede {
		
		public $comPontoaPonto; // fornece comunicação entre aplicações ponto-a-ponto
		public $controlFluxoDados;// controla o fluxo de dados
		public $controlErros; // controle de erros
		public $segMensagens; // segmentação de mensagens
		
		function encapsular(){

			echo '
		          <div class="card flex-md-row mb-4 box-shadow h-md-250">
		            <div class="card-body d-flex flex-column align-items-start">               
		                             
		              <p class="card-text mb-auto">
						Passou pela Camada de Transporte
		              </p>                
		            </div>            
		          </div>
		        '	;	
			parent::encapsular()."<br>";
		}
		
	}

?>