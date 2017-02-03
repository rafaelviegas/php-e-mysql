<?php 
    include "cabecalho.php"; 
    include "connection.php"; 
    include "banco-produto.php"; 
?>
<?php if(array_key_exists("removido",$_GET) && $_GET["removido"] == true){ ?>
    <p class="alert-success">Produto removido com sucesso.</p>
<?php } ?>

<table class="table table-striped table-bordered">

    <?php foreach(listaProdutos($conn) as $produto): ?>
        <tr>
            <td><?=$produto['nome'] ?></td>
            <td><?=$produto['preco'] ?></td>
            <td><a href="remove-produto.php?id=<?=$produto['id']?>" class="text-danger">remover</a></td>
        </tr>
    <?php endforeach?>
 </table>
<?php include "rodape.php" ?>