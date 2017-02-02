<?php 
    include "cabecalho.php"; 
    include "connection.php"; 
    include "banco-produto.php"; 
?>
<table class="table table-striped table-bordered">

    <?php foreach(listaProdutos($conn) as $produto): ?>
        <tr>
            <td><?=$produto['nome'] ?></td>
            <td><?=$produto['preco'] ?></td>
        </tr>
    <?php endforeach?>
 </table>
<?php include "rodape.php" ?>