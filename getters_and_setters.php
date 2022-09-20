<?php 


class Login{
	private $email;
	private $senha;

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		$emaila = filter_var($email, FILTER_SANITIZE_EMAIL);
		$this->email = $emaila;
	}

	public function getSenha(){
		return $this->senha;
	}

	public function setSenha($senha){
		$this->senha = $senha;
	}

	public function Logar(){
		if($this->email == "teste@teste.com" AND $this->senha = "123"){

			echo "Logado com sucesso";

		}else{

			echo "Error";
		}

	}
}


$p= new Login();
$p->setEmail("te/()ste/@teste.com");
$p->setSenha("123");

$p->Logar();

echo "<br/>";
echo $p->getEmail();