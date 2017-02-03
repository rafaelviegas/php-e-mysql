<?php
    function listaProdutos($conn){
        $produtos = array();
        $results = mysqli_query($conn, "select p.*, c.nome as categoria_nome from produtos as p join categorias as c on c.id=p.categoria_id");

        while($produto = mysqli_fetch_assoc($results)){
            array_push($produtos,$produto);
        }
        return $produtos;
    }
    
    function insereProduto($conn, $nome, $preco, $descricao, $categoria_id){
        $query = "insert into produtos(nome, preco, descricao, categoria_id) values('{$nome}', {$preco}, '{$descricao}', {$categoria_id})";
        return mysqli_query($conn,$query);

    }

    function removeProduto($conn, $id){
        $query = "delete from produtos where id = {$id}";
        return mysqli_query($conn,$query);
    }
?>