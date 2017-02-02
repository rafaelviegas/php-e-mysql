<?php include "cabecalho.php" ?>
    <form action="adiciona-produto.php">
        <table class="table">
            <tr>
                <td><label for="nome">Nome:</label></td>
                <td><input type="text" class="form-control" name ="nome"></br></td>
            </tr>
            <tr>
                <td><label for="preco">Preço:</label></td>
                <td><input type="text" class="form-control" name ="preco"></br></br></td>
            </tr>
            <tr>
                <td><input class="btn btn-primary" type="submit" value="Cadastrar"></td>
            </tr>
        </table>
    </form>
<?php include "rodape.php" ?>