<?php 


class Login{
	private $email;
	private $senha;
	private $nome;

	public function __construct($email, $senha, $nome){
		$this->nome = $nome;
		$emaila = filter_var($email, FILTER_SANITIZE_EMAIL);
		$this->email = $emaila;
		$this->senha = $this->setSenha($senha);

	}

	public function getNome(){
		return $this->nome;
	}

	public function getEmail(){
		return $this->email;
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


$p= new Login("teste@teste.com", "123", "Welker");
$p->Logar();

echo "<br/>";
echo $p->getNome();
echo "<br/>";
echo $p->getEmail();