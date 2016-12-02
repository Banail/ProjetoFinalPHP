<?php 
class Endereco{
	private $rua;
	private $bairro;
	private $numero;
	private $cidade;
	private $uf;
	
	//metodos 

	public function __construct(){}	
	public function __destruct(){}

	public function __get($a){
		return $this->$a;
	}
	public function __set($a, $v){
		$this->$a = $v;
	}

	public function __toString(){
		return nl2br("
				Rua: $this->rua
				Bairro: $this->bairro 
				Numero: $this->numero
				Cidade: $this->cidade
				Estado: $this->uf
				");	
	}
}//fecha classe endereco