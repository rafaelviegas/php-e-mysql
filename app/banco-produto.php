<?php
    function listaProdutos($conn){
        $produtos = array();
        $results = mysqli_query($conn, "select * from produtos");

        while($produto = mysqli_fetch_assoc($results)){
            array_push($produtos,$produto);
        }
        return $produtos;
    }
    
    function insereProduto($conn,$nome,$preco){
        $query = "insert into produtos(nome,preco) values('{$nome}', {$preco})";
        return mysqli_query($conn,$query);

    }

    function removeProduto($conn, $id){
        $query = "delete from produtos where id = {$id}";
        return mysqli_query($conn,$query);
    }
?>