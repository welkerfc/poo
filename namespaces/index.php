<?php 

require 'Classes/produto.php';
require 'Models/produto.php';

use models\Produto as produtoctModel;
use classes\Produto as produtoctClass;

$p = new produtoctModel();
$p->mostrarDetalhes();

echo "<br/>";

$p2 = new produtoctClass();
$p2->mostrarDetalhes();