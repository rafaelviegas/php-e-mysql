<?php 
    include "cabecalho.php";
    include "connection.php";
    include "banco-produto.php" 
?>

<?php

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
