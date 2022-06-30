<?php

    //programa php para remover dados do livro
    $id = trim($_GET['id']); 
   

   include 'conexao.php';
    if (!empty($id) ){
        $sql = "DELETE from livro WHERE id=?";

        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $query = $pdo->prepare($sql);
        $query->execute(array($id));
        Conexao::desconectar(); 
    }

    header("location:lstLivro.php"); 

?>