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
            <td><?=substr($produto['descricao'], 0, 40) ?></td>
            <td><?=$produto['categoria_nome'] ?></td>
            <td><a href="produto-altera-formulario.php?id=<?=$produto['id']?>" class="btn btn-primary" >Alterar</a></td>
            <td>
                <form action="remove-produto.php" method="POST">
                    <input type="hidden" name="id" value="<?=$produto['id']?>">
                    <input type="submit" class="btn btn-danger" value="Remover">
                </form>
             </td>
        </tr>
    <?php endforeach?>
 </table>
<?php include "rodape.php" ?>

