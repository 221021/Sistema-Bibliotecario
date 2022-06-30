<?php
    include 'conexao.php';
    //programa php para editar dados do livro
    $id = trim($_POST['id']); 
    $titulo = trim($_POST['txtTitulo']); 
    $autor = trim($_POST['txtAutor']); 
    $descricao = trim($_POST['txtDescricao']);
    $quantidade = trim($_POST['txtQuantidade']);

    if  (!empty($titulo) && !empty($autor) && !empty($quantidade)){
        $sql = "UPDATE livro SET titulo=?, autor=?, descricao=?, quantidade=? WHERE id=?";
        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        
        $query = $pdo->prepare($sql);
        $query->execute(array($titulo, $autor, $descricao, $quantidade, $id));
        Conexao::desconectar(); 
    }

    header("location:lstLivro.php"); 

?>
