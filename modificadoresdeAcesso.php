<?php 


class Veiculo{

	private $modelo;
	private $cor;
	private $ano;

	protected function Andar(){
		echo "Andou";
	}


	private function Parar(){
		echo "Parou";
	}

	
}



class Carro extends Veiculo{

	public function ligarLimpador(){
		echo "Ligou limpador";
	}

	public function mostrarAcao(){
		$this->Andar();
	}
}

$p = new Carro();
$p->mostrarAcao();