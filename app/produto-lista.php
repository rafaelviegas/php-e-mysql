<?php include "cabecalho.php" ?>
<?php include "connection.php";

$results = mysqli_query($conn, "select * from produtos");
while($produto = mysqli_fetch_assoc($results)){
     echo $produto['nome'] ."<br/>";
}

 ?>

<?php include "rodape.php" ?>