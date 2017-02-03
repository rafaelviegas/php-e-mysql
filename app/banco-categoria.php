<?php
    function listaCategorias($conn){
        $categorias = array();
        $results = mysqli_query($conn, "select * from categorias");

        while($categoria = mysqli_fetch_assoc($results)){
            array_push($categorias,$categoria);
        }
        return $categorias;
    }
?>