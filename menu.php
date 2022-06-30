<?php
  session_start(); 
   if (!isset($_SESSION['login']))
       Header("Location: index.html");   
?> 

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <title>Sistema Bibliotecário</title>
</head>

<body>
    <nav>
        <div class="nav-wrapper light-blue darken-4">
            <a href="#" class="brand-logo right"><img src="./imagens/MicrosoftTeams-image (2).png" width="120"></a>
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="frmInsLocador.php">Inserir Locador</a></li>
                <li><a href="frmInsLivro.php">Inserir Livros</a></li>
                <li><a href="lstLivro.php">Livros</a></li>
                <li><a href="frmInsLocacao.php">Inserir Locação</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>

        </div>
    </nav>

    <ul id="slide-out" class="sidenav indigo lighten-1">
        <li>
            <div class="user-view">
                <div class="background">
                    <img src="./imagens/casafundo.png">
                </div>
                <a href="#user"><img class="circle" src="./imagens/perfil.jpg"></a>
                <a href="http://www.fema.edu.br"><span class="white-text name">Maria</span></a>
                <a href="mailto: maria@hotmail.com"><span class="white-text email">maria@hotmail.com</span></a>
            </div>
        </li>
        <li><a href="lstLivro.php"><i class="material-icons">cloud</i>Listar Livros</a></li>
        <li><a href="frmInsLivro.php">Inserir Livros</a></li>
        <li>
            <div class="divider"></div>
        </li>
           </ul>
    <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>

</body>

</html>

<script type="text/javascript">
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, options);
});

// Initialize collapsible (uncomment the lines below if you use the dropdown variation)
// var collapsibleElem = document.querySelector('.collapsible');
// var collapsibleInstance = M.Collapsible.init(collapsibleElem, options);

// Or with jQuery

$(document).ready(function() {
    $('.sidenav').sidenav();
});
</script>