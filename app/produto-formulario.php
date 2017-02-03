<?php include "cabecalho.php"; 
      include "connection.php";
      include "banco-categoria.php"; 

     $categorias = listaCategorias($conn);

?>

    <form action="adiciona-produto.php" method="POST">
        <table class="table">
            <tr>
                <td><label for="nome">Nome:</label></td>
                <td><input type="text" class="form-control" name ="nome"></br></td>
            </tr>
            <tr>
                <td><label for="preco">Preço:</label></td>
                <td><input type="text" class="form-control" name ="preco"></br></td>
            </tr>
            <tr>
                <td><label for="descricao">Descrição:</label></td>
                <td><textarea name="descricao" class="form-control"></textarea></br></td>
            </tr>
            <tr>
                <td><label for="preco">Categorias:</label></td>
                <td>
                    <?php foreach($categorias as $categoria): ?>
                    <input type="radio"  name ="categoria_id" value="<?=$categoria["id"] ?>"><?=$categoria["nome"] ?></br>
                    <?php endforeach?>
                 </td>
            </tr>
            <tr>
                <td><input class="btn btn-primary" type="submit" value="Cadastrar"></td>
            </tr>
        </table>
    </form>
<?php include "rodape.php" ?>