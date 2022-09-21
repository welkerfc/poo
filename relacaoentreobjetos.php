<?php 


class Pedido{
	public $numero;
	public $cliente;
}

class Cliente{
	public $nome;
	public $endereco;
}


$c = new Cliente();
$c->nome = "Welker";
$c->endereco = "Avenida Brasil";


$p = new Pedido();
$p->numero = 156;
$p->cliente = $c;

$dados = array(

	'numero' => $p->numero,
	'nome' => $p->cliente->nome,
	'endereco' => $p->cliente->endereco
);

var_dump($dados);