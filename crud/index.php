<?php 


require_once 'vendor/autoload.php';

$produto = new \App\Model\Produto();
$produto->setId(7);
$produto->setNome("IPhone 11");
$produto->setDescricao("i7 4GB");



$produtoDao = new \App\Model\ProdutoDao();
$produtoDao->create($produto);


//$produtoDao->update($produto);
//$produtoDao->delete(5);
$produtoDao->read($produto);


foreach ($produtoDao->read() as $produto) {
	echo $produto['nome'];
	echo $produto['descricao'];
	echo "<br/>";
}