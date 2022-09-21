<?php 


class Animal{

	public function Andar(){
		echo "O Animal Andou";
	}

	public function Correr(){
		echo "O Animal Correu";
	}

}

class Cavalo extends Animal{

	public function Andar(){
		$this->Correr();
	}

}


$p = new Cavalo();
$p->Andar();