<?php 
    include 'conn/connect.php';
    $produto = $_GET['id_produto'];
    $lista = $conn->query("select * from vw_tbprodutos where id_produto = '$produto'");
    $row_produto = $lista->fetch_assoc();
    $num_linhas = $lista->num_rows;
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Busca por palavra</title>
</head> 
<body class="fundofixo">
    <?php include 'menu_publico.php'; ?>
    <div class="container">

        <!-- mostrar se a consulta retornou produtos -->
            <h2 class="breadcrumb alert-danger">
                <strong><?php echo $row_produto['descri_produto']?></strong>
            </h2>
            <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                                <img src="images/<?php echo $row_produto['imagem_produto']?>" class="img-responsive img-roundes">
                            </a>
                            <div class="caption text-right">
                                <h3 class="text-danger">
                                    <strong><?php echo $row_produto['descri_produto']?></strong>   
                                </h3>
                                <p class="text-warning">
                                    <strong><?php echo $row_produto['rotulo_tipo']?></strong>   
                                </p>
                                <p class="text-left">
                                    <?php echo mb_strimwidth($row_produto['resumo_produto'],0,42,'...'); ?>
                                </p>
                                <p>
                                    <button class="btn btn-default disabled" role="button" style="cursor:default;">
                                        <?php echo "R$ ".number_format($row_produto['valor_produto'],2,) ?>
                                    </button>
                                    <a href="produto_detalhes.php?id_produto=<?php echo $row_produto['id_produto']?>">
                                        <span class="hidden-xs">Saiba mais...</span>
                                        <span class="hidden-xs glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                                    </a>
                                </p>
                            </div>
                            
                        </div>
                    </div>
            </div>
        </div>
</body>
</html>