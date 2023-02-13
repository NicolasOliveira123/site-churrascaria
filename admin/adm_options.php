<!-- html:5 -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Área Administrativa</title>
    <meta charset="UTF-8">
    <!-- Link arquivos Bootstrap CSS -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Link para CSS específico -->
    <link rel="stylesheet" href="../css/meu_estilo.css" type="text/css">
</head>
<body class="fundofixo">
<main class="container">
<h1 class="breadcrumb">Área Administrativa</h1>
<div class="row"><!-- manter os elementos na linha -->

<!-- ADM PRODUTOS -->
<div class="col-sm-6 col-md-4">
    <div class="thumbnail alert-danger">
        <img src="../imagens/icone_produtos.png" alt="">
        <br>
        <div class="alert-danger">

            <div class="btn-group btn-group-justified" role="group">
                <div class="btn-group">
                    <button class="btn btn-default disabled" role="alert" style="cursor: default;">
                        PRODUTOS
                    </button>
                </div><!-- fecha btn-group -->
            </div><!-- fecha btn-group-justified -->

            <div class="btn-group btn-group-justified" role="group">
                <div class="btn-group">
                    <a href="produtos_lista.php">
                        <button class="btn btn-danger">
                            LISTAR
                        </button>
                    </a>
                </div><!-- fecha btn-group -->
                <div class="btn-group">
                    <a href="produtos_insere.php">
                        <button class="btn btn-danger">
                            INSERIR
                        </button>
                    </a>
                </div><!-- fecha btn-group -->
            </div><!-- fecha btn-group-justified -->

        </div><!-- fecha alert-danger -->
    </div><!-- fecha thumbnail -->
</div><!-- fecha col -->
<!-- fecha ADM PRODUTOS -->