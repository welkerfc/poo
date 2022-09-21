<?php 


class Newslatter{

	public function cadastrarEmail($email){

		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){

			throw new Exception("Email Inválido",1);

		}else{
			echo "Email Cadastrado";
		}

	}

}

$n = new Newslatter();

try{

$n->cadastrarEmail("asggttd@");


}catch(Exception $e){

	echo "Mensagem: ".$e->getMessage()."<br/>";
	echo "Código: ".$e->getCode()."<br/>";
	echo "Linha: ".$e->getLine()."<br/>";
	echo "Arquivo: ".$e->getFile()."<br/>";
}