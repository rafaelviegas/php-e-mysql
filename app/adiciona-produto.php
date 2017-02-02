<?php include "cabecalho.php" ?>
<?php include "connection.php" ?>
<?php

function insereProduto($conn,$nome,$preco){
    $query = "insert into produtos(nome,preco) values('{$nome}', {$preco})";
    return mysqli_query($conn,$query);
}

    $nome = $_GET["nome"];
    $preco = $_GET["preco"];


if(insereProduto($conn, $nome, $preco)){ ?>

   <p class="alert-success">Produto <?= $nome ?>, <?= $preco ?> adicionado com sucesso!</p>
<?php } else{ 
    $msg = mysqli_error($conn);
    ?>
   <p class="alert-danger">Produto <?= $nome ?>, <?= $preco ?> não foi adicionado: <?= $msg ?></p>
<?php
}
?>
 
<?php include "rodape.php" ?>
