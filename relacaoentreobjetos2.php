<?php 


class Produtos{

	public $nomeProduto;
	public $valor;

	public function __construct($nomeProduto, $valor){
		$this->nomeProduto = $nomeProduto;
		$this->valor = $valor;
	}
}


class Carrinho{
	public $prod;

	public function adiciona(Produtos $p){

		$this->prod[] = $p;

	}

	public function exibe(){

		foreach ($this->prod as $p) {
			echo $p->nomeProduto."<br/>";
			echo $p->valor."<hr/>";
		}
	}
}


$produto1 = new Produtos("iPhone 14", 7500);
$produto2 = new Produtos("iPhone 7 plus", 1500);
$produto3 = new Produtos("Smart TV", 2500);

$carrinho = new Carrinho();
$carrinho->adiciona($produto1);
$carrinho->adiciona($produto2);
$carrinho->adiciona($produto3);
$carrinho->exibe();
