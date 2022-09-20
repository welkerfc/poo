<?php 


class Pessoa{
	const nome = "Welker";

	public function exibirNome(){
		echo self::nome;
	}
}


class Rodrigo extends Pessoa{

const nome = "Oliveira";

public function exibirNome(){
		echo parent::nome;
	}

}


$p = new Rodrigo();
$p->exibirNome();