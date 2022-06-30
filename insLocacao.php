<?php 
include 'conexao.php'; 

$livroID = trim($_POST['slcLivro']); 
$locadorID = trim($_POST['slcLocador']); 
$data  = trim($_POST['txtData']); 
$valor = trim($_POST['txtValor']);
$quantidades = trim($_POST['txtQuantidade']);


if (!empty($locadorID) && !empty($livroID) && !empty($data) && !empty($valor) && !empty($quantidades)){
 
    //estabelecer conexão com banco de dados
    $pdo = Conexao::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    

    //recuperar livro
    $sql = "select * from livro where id=?;";
    $query = $pdo->prepare($sql);
    $query->execute (array(intval($livroID)));
    $livro = $query->fetch(PDO::FETCH_ASSOC);

    $quantlocada = $livro['quantidade'] - $quantidades;

    $sql = "UPDATE livro SET quantidade=? WHERE id=?;";
    $query = $pdo->prepare($sql);
    $query->execute(array($quantlocada, $livroID));

     //gravar a locacao 
     $sql = "INSERT INTO locacao(livro, locador, data, valor, quantidades) VALUES (?, ?, ?, ?, ?);";
     $query = $pdo->prepare($sql);
     $query->execute(array($livroID, $locadorID, $data, $valor, $quantidades));
     
    
    Conexao::desconectar(); 

}

header("location:lstLivro.php"); 


?> 