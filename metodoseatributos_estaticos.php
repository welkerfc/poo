<?php 

class Login{

	public static $user;

	public static function verificaLogin(){
		echo "Usuário ".self::$user."Verificado";
	}

}

Login::$user = "Admin";
Login::verificaLogin();

