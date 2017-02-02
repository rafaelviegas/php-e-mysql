<?php include "cabecalho.php" ?>
<?php

    $nome = $_GET["nome"];
    $preco = $_GET["preco"];

$conn = mysqli_connect('localhost:3307','root','','loja');

$query = "insert into produtos(nome,preco) values('{$nome}', {$preco})";

if(mysqli_query($conn,$query)){ ?>

   <p class="alert-success">Produto <?= $nome ?>, <?= $preco ?> adicionado com sucesso!</p>
<?php } else{ ?>

   <p class="alert-danger">Produto <?= $nome ?>, <?= $preco ?> não foi adicionado!</p>
<?php
}
?>
 
<?php include "rodape.php" ?>