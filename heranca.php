<?php 
class Veiculo{
	    public $modelo;
		public $cor;
		public $ano;

		public function Andar(){
			echo "Andou";
		}

		public function Parar(){
			echo "parou";
		}
}

class Carro extends Veiculo{
	
	public function piscaAlerta(){
			echo "Ligou Pisca Alerta";
		}
}


class Moto extends Veiculo{
	
	public function darGrau(){
			echo "empinou";
		}

}

$p = new Moto();
$p->modelo = "Harley";
$p->cor = "Preta";
$p->ano = 2010;


echo "A Moto de modelo: ".$p->modelo." e cor: ".$p->cor." do ano de ".$p->ano." ".$p->darGrau();


echo "<br/>";
echo "<br/>";

$p2 = new Carro();
$p2->modelo = "Fiat Toro";
$p2->cor = "Vinho";
$p2->ano = 2022;

echo "O Carro de modelo: ".$p2->modelo." e cor: ".$p2->cor." do ano de ".$p2->ano." ".$p2->piscaAlerta();
