<?php 
   include 'menu.php'; 
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

    <title>Inserir Dados do Locador</title>
</head>

<body>
    <div class="container deep-orange lighten-5 s12">

        <div class="col s12">
            <h1>Cadastro do Locador</h1>

            <div class="row">
                <form action="insLocador.php" method="post" id="frmInsLocador" class="col s12">
                    <div class="col s11">
                        <div class="input-field col s8">
                            <label for="lblLocador" class="black-text">Informe o Nome do Locador: </label>
                            <input placeholder="" id="txt_nome" name="txtNome" type="text">
                        </div>
                       
                        <div class="input-field col s8">
                            <br>
                            <button class="btn waves-effect waves-light green" type="submit">Salvar
                                <i class="material-icons right">save</i>
                            </button>
                            <button class="btn waves-effect waves-light red" type="reset">Limpar
                                <i class="material-icons right">brush</i>
                            </button>

                            <button class="btn waves-effect waves-light  indigo darken-4" type="button" id="btnVoltar"
                                onclick="JavaScript:location.href='lstLivro.php'">
                                Voltar <i class="material-icons right">arrow_back</i>
                            </button>

                        </div>
                    </div>
                </form>

            </div>
        </div>
</body>

</html>
<?php include 'footer.php'?> 