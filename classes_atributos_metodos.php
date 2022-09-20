<?php 

//classe
class Pessoa{
	//metodos
	public $nome;
	public $idade;


//atributos
	public function Falar(){
		echo $this->nome." de idade $this->idade anos Falou";
	}
}

$pessoa = new Pessoa();
$pessoa->nome = "Welker";
$pessoa->idade = 30;
$pessoa->Falar();