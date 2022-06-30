<?php
    $login = trim($_POST['user']); 
    $pwd = trim($_POST['password']); 

    //echo $login . " - " . $pwd; 
   include 'conexao.php';
   $sql = "select * from usuario where login LIKE ?";
   $pdo = Conexao::conectar(); 
   $query = $pdo->prepare($sql);
   $query->execute (array($login));
   $dados = $query->fetch(PDO::FETCH_ASSOC);

   echo $dados['login']; 
  
   Conexao::desconectar(); 
   if (md5($pwd)==$dados['password']){
    //  echo "passei aqui"; 
      session_start();
      $_SESSION['login'] = $dados['login'];
      $_SESSION['pwd'] = $dados['pwd']; 
      header("location:menu.php"); 
  }
  else header("location:index.html"); 
?>
