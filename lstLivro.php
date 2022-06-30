<?php
   include 'menu.php'; 
   include 'conexao.php';
   $sql = "select * from livro order by titulo;";
   $pdo = conexao::conectar(); 
   $lstLivro = $pdo->query($sql); 
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

    <title>Listar Livros</title>
</head>

<body>
    <div class="container deep-orange lighten-5">
        <div class="card-panel grey darken-1">
            <H1>Listar Livros</H1>
        </div>

        <div class="col s10">
            <table class="striped blue lighten-4">
                <tr>
                    <th>ID</th>
                    <th>TITULO</th>
                    <th>AUTOR</th>
                    <th>DESCRICAO</th>
                    <th>QUANTIDADE</th>
                    <th>
                        <a class="btn-floating btn-small waves-effect waves-light green"
                            onclick="JavaScript:location.href='frmInsLivro.php'">
                            <i class="material-icons">add</i>
                        </a>
                    </th>
                </tr>
                <?php 
           foreach($lstLivro as $livro) {
        ?>
                <tr>
                    <td><?php echo $livro['id']?> </td>
                    <td><?php echo $livro['titulo']?> </td>
                    <td><?php echo $livro['autor']?> </td>
                    <td><?php echo $livro['descricao']?> </td>
                    <td><?php echo $livro['quantidade']?> </td>
                    <td class="center">
                        <a class="btn-floating btn-small waves-effect waves-light orange" onclick="JavaScript:location.href='frmEdtLivro.php?id=' + 
                           <?php echo $livro['id'];?>">
                            <i class="material-icons">edit</i>
                        </a>
                        <a class="btn-floating btn-small waves-effect waves-light red"
                            onclick="JavaScript:remover(<?php echo $livro['id'];?>)">
                            <i class="material-icons">delete</i>
                        </a>
                        <a class="btn-floating btn-small waves-effect waves-light  light-blue darken-3" onclick="JavaScript:location.href='frmDetLivro.php?id=' + 
                           <?php echo $livro['id'];?>">
                            <i class="material-icons">info</i>
                        </a>
                    </td>
                    <td></td>
                </tr>
                <?php } ?>
            </table>
        </div>
        <br>
        <br>
    </div>

</body>

</html>

<?php include 'footer.php'?> 

<script>
function remover(id) {
    if (confirm('Excluir o livro ' + id + '?')) {
        location.href = 'remLivro.php?id=' + id;
    }
}
</script>