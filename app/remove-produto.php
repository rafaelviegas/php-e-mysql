<?php 
include "cabecalho.php";
include "connection.php";
include "banco-produto.php";

$id = $_GET['id'];
removeProduto($conn,$id);
header("Location: produto-lista.php?removido=true");
die();
?>