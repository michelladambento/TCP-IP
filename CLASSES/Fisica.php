<?php

	class Fisica{	
		
			public $transmPacotes; //transmissão de pacotes de dados ou datagramas IP
			public $recebPacotes ; //recebe pacotes de dados ou datagramas IP
			public $enviaPacotes; //envia pacotes de dados ou datagramas IP
		function encapsular(){										
			
			echo '
		          <div class="card flex-md-row mb-4 box-shadow h-md-250">
		            <div class="card-body d-flex flex-column align-items-start">               
		                           
		              <p class="card-text mb-auto">
						Passou pela Camada Fisica
		              </p>                
		            </div>            
		          </div>
		        '	;	
		}
		
	}

?>