<?php
/**
 * Description of Paciente
 *
 * @author Lara Ludwig e Thomas Martinez
 * @since 18/11/2016
 * @version 1.0 Beta
 */
class Paciente {
    private $idPaciente;
    private $nome;
    private $anoNasc;
    private $telefone1;
    private $telefone2;
    private $email;
    private $altura;
    private $peso;
    private $meta;
    private $obs;
	//modifiquei
	private $idade;
	private $imc;
	private $vImc;
	//acrescentei eles

    public function __construct() {}
    public function __destruct() {}
    
    public function __get($name) {
        return $this->$name;
    }
    public function __set($name, $value) {
        $this->$name = $value;
    }
    
    public function calcularIdade(){
        return date('Y') - $this->anoNasc;
    }
    
    public function calcularImc(){
        return $this->peso / ($this->altura * $this->altura);
    }
    
    public function verificarImc(){
        $imc = $this->calcularImc();
        if($imc < 17){
            return "Muito Abaixo do Peso";
        }else if($imc >= 17 && $imc < 18.5 ){
            return "Abaixo do Peso";
        }else if($imc >= 18.5 && $imc < 25){
            return "Peso Normal";
        }else if($imc >= 25 && $imc < 30){
            return "Acima do Peso";
        }else if($imc >= 30 && $imc < 35){
            return "Obesidade 1";
        }else if($imc >= 35 && $imc < 40){
            return "Obesidade 2";
        }else{
            return "Obesidade 3";
        }
    }//fecha if

    public function __toString() {
       /* $idade = $this->calcularIdade();
        $imc = $this->calcularImc();
        $vImc = $this->verificarImc();
		*/
		$this->idade = $this->calcularIdade();
		$this->imc = $this->calcularImc();
		$this->vImc = $this->verificarImc();
		
        return nl2br("Nome: $this->nome
                     Ano Nascimento: $this->anoNasc
                     Telefone 1: $this->telefone1
                     Telefone 2: $this->telefone2
                     Email: $this->email
                     Altura: $this->altura
                     Peso: $this->peso
                     Meta: $this->meta
                     Observação: $this->obs
                     Idade: $this->idade
                     IMC: $this->imc
                     Situação IMC: $this->vImc");
    }
    
    
    
}//fecha class
