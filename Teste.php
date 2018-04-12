<?php


class Fisica{	
	
	function encapsular(){
		echo "passou camada Fisica<br>";
	}
	
}

class Rede extends Fisica {
	
	function encapsular(){		
		echo "passou camada Rede<br>";
		parent::encapsular()."<br>";
	}
	
}

class Transporte extends Rede {
	
	function encapsular(){		
		echo "passou camada Transporte<br>";
		parent::encapsular()."<br>";
	}
	
}

class Aplicacao extends Transporte {
	
	function encapsular(){		
		echo "passou camada Aplicacao<br>";
		parent::encapsular()."<br>";
	}
	
}

$tete= new Aplicacao();
$tete->encapsular();