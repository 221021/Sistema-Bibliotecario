<?php
    include 'conexao.php';
    //programa php para inserir dados do livro
    $nome = trim($_POST['txtNome']); 

   
    if (!empty($nome)){
        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sql = "INSERT INTO locador (nome) VALUES (?);";
        $query = $pdo->prepare($sql);
        $query->execute(array($nome));
        Conexao::desconectar(); 
    }

    header("location:lstLivro.php"); 

?>
