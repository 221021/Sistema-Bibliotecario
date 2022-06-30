<?php 
    include 'menu.php'; 
    
    $id = $_GET['id']; 

    include 'conexao.php';
    $sql = "select * from livro where id=?;";
    $pdo = Conexao::conectar(); 
    $query = $pdo->prepare($sql);
    $query->execute (array($id));
    $dados = $query->fetch(PDO::FETCH_ASSOC);

    Conexao::desconectar(); 
 ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <title>Editar Dados do Livro</title>
</head>
<body>
    <div class= "container brown lighten-4  black-text col s12">
        <div class = "brown lighten-2 col s12">
            <h1>Editar Livro</h1>
        </div>
        <div class="row">
            <form action="edtLivro.php" method="post" id="frmEdtLivro"  class="col s12">
                <div class="input-field col s8">
                    <label for="lblid" class="black-text" >ID: <?php echo $dados['id'];?></label>
                    <br/>
                    <input type="hidden" name="id" id="id" value="<?php echo $id;?>">
                </div>
            
                <div class="input-field col s8">
                    <label for="lblTitulo" class="black-text">Informe o titulo: </label> 
                    <input placeholder="" id="txt_titulo" name="txtTitulo" value="<?php echo $dados['titulo']?>" type="text">
                </div>
                <div class="input-field col s8">
                    <label for="lblAutor" class="black-text">Informe o Autor: </label> 
                    <input placeholder="" id="txt_autor" name="txtAutor" value="<?php echo $dados['autor']?>" type="text">
                </div>
                <div class="input-field col s8">
                    <label for="lblDescricao" class="black-text">Informe a descricao: </label> 
                    <input placeholder="" id="txt_descricao" name="txtDescricao" value="<?php echo $dados['descricao']?>" type="text">
                </div>

                <div class="input-field col s8">
                    <label for="lblQuantidade" class="black-text">Informe a Quantidade: </label> 
                    <input placeholder="" id="txt_quantidade" name="txtQuantidade" value="<?php echo $dados['quantidade']?>" type="number">
                </div> 
                
                <div class = "input-field col s8">
                    <br>
                    <button class="btn waves-effect waves-light green" type="submit" >Salvar
                        <i class="material-icons right">save</i>
                    </button>
                    <button class="btn waves-effect waves-light red" type="reset" >Limpar
                        <i class="material-icons right">brush</i>
                    </button>

                    <button class="btn waves-effect waves-light  indigo darken-4" 
                    type="button" id="btnVoltar" onclick="JavaScript:location.href='lstLivro.php'">
                    Voltar <i class="material-icons right">arrow_back</i> 
                    </button>
                    
                </div>

            </form>
        </div>
    </div> 
</body>
</html>