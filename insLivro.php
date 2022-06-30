<?php
    include 'conexao.php';
    //programa php para inserir dados do livro
    $titulo = trim($_POST['txtTitulo']); 
    $autor = trim($_POST['txtAutor']); 
    $descricao = trim($_POST['txtDescricao']);
    $quantidade = trim($_POST['txtQuantidade']);
   
    if (!empty($titulo) && !empty($autor) && !empty($descricao)){
        $sql = "INSERT INTO livro(titulo, autor, descricao, quantidade) VALUES (?, ?, ?, ?)";

        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $query = $pdo->prepare($sql);
        $query->execute(array($titulo, $autor, $descricao, $quantidade));
        Conexao::desconectar(); 
    }
    else echo "campo titulo, autor, descricao ou quantidade sem preencher...";

    header("location:lstLivro.php"); 

?>
