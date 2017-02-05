<?php 
    include "cabecalho.php"; 
    include "connection.php";
    include "banco-produto.php"; 
    include "banco-categoria.php"; 
    $id = $_GET['id'];

    $produto = buscaProduto($conn, $id);
    $categorias = listaCategorias($conn);

?>

    <form action="altera-produto.php" method="POST">
        <table class="table">
            <tr>
                <td><label for="nome">Nome:</label></td>
                <input type="hidden" name="id" value="<?= $produto["id"]?>">
                <td><input type="text" class="form-control" name ="nome" value="<?= $produto["nome"]?>"></br></td>
            </tr>
            <tr>
                <td><label for="preco">Preço:</label></td>
                <td><input type="text" class="form-control" name ="preco"value="<?= $produto["preco"]?>" ></br></td>
            </tr>
            <tr>
                <td><label for="descricao">Descrição:</label></td>
                 <td><textarea name="descricao" class="form-control"><?= $produto["descricao"]?></textarea></br></td>
            </tr>
            <tr>
                <td></td>
                 <td><input type="checkbox" name="usado" <?= $produto["usado"] ?  'checked="checked"' : "" ?>>Usado</br></td>
            </tr>
            <tr>
                <td><label for="preco">Categorias:</label></td>
                <td>
                    <select name="categoria_id" class="form-control">
                        <?php foreach($categorias as $categoria): ?>
                            <option value="<?=$categoria["id"] ?>" <?= $categoria["id"] == $produto["categoria_id"] ? 'selected="selected"' : ''  ?> ><?=$categoria["nome"] ?></option>
                        <?php endforeach?>
                    </select>
                 </td>
            </tr>
            <tr>
                <td><input class="btn btn-primary" type="submit" value="Alterar"></td>
            </tr>
        </table>
    </form>
<?php include "rodape.php" ?>