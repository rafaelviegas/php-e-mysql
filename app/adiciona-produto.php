<?php 
    include "cabecalho.php";
    include "connection.php";
    include "banco-produto.php";
?>

<?php

    $nome = $_POST["nome"];
    $preco = $_POST["preco"];
    $descricao = $_POST["descricao"];
    $categoria_id = $_POST["categoria_id"];

if(insereProduto($conn, $nome, $preco, $descricao, $categoria_id)){ ?>

   <p class="alert-success">Produto <?= $nome ?>, <?= $preco ?> adicionado com sucesso!</p>
<?php } else{ 
    $msg = mysqli_error($conn);
    ?>
   <p class="alert-danger">Produto <?= $nome ?>, <?= $preco ?> não foi adicionado: <?= $msg ?></p>
<?php
}
?>
 
<?php include "rodape.php" ?>
