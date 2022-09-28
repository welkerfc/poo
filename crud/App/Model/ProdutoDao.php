<?php 


namespace App\Model;

class ProdutoDao{

	public function create(Produto $p){

		$sql = 'INSERT INTO produtos (nome,descricao) VALUES(?,?)';

		$sm = Conexao::getConn()->prepare($sql);
		$sm->bindValue(1, $p->getNome());
		$sm->bindValue(2, $p->getDescricao());
		$sm->execute();

	}

	public function read(){

		$sql = 'SELECT * FROM produtos';
		$sm = Conexao::getConn()->prepare($sql);
		$sm->execute();

		if($sm->rowCount() > 0){

		$resul = $sm->fetchAll(\PDO::FETCH_ASSOC);
		return $resul;

		}else{
			return [];
		}
	}


	public function update(Produto $p){

		$sql = 'UPDATE produtos SET nome = ?, descricao = ? WHERE id = ?';
		$sm = Conexao::getConn()->prepare($sql);
		$sm->bindValue(1, $p->getNome());
		$sm->bindValue(2, $p->getDescricao());
		$sm->bindValue(3, $p->getId());
		$sm->execute();

	}

	public function delete($id){

		$sql = 'DELETE FROM produtos WHERE id = ?';
		$sm = Conexao::getConn()->prepare($sql);
		$sm->bindValue(1, $id);
		$sm->execute();
	}

}