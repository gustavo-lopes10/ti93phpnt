<?php 
include 'acesso_com.php';
include '../conn/connect.php';

if($_POST){ 
    $tipo = $_POST['rotulo_tipo'];
    $sigla = $_POST['sigla_tipo'];

    $insertSql = "INSERT INTO tbtipos
                    values(0,'$sigla','$tipo')";
    $resultado = $conn->query($insertSql);
    if($resultado){
        header('location: tipos_lista.php');
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Tipos - Atualiza</title>
</head>
<body>
<?php include 'menu_adm.php';?>    
<main class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-offset-2 col-sm-6 col-md-8">
            <h2 class="breadcrumb text-danger">
                <a href="tipos_lista.php">
                    <button class="btn btn-danger">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </button>
                </a>
                Inserindo Tipo
            </h2>
            <div class="thumnail">
                <div class="alert alert-danger" role="alert">
                <form action="tipos_insere.php" method="post" name="form_tipo_atualiza" enctype="multipart/form-data" id="form_tipo_atualiza">
                       <input type="hidden" name="id_tipo" id="id_tipo">
                       <label for="sigla_tipo">Sigla:</label>
                           <div class="input-group">
                               <span class="input-group-addon">
                                   <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                               </span>
                               <input type="text" name="sigla_tipo" id="sigla_tipo" class="form-control" placeholder="Digite a Sigla do tipo" maxlength="100" required>
                           </div>
                           <label for="rotulo_tipo">Rotulo:</label>
                           <div class="input-group">
                               <span class="input-group-addon">
                                   <span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span>
                               </span>
                               <input type="text" name="rotulo_tipo" id="rotulo_tipo" class="form-control" placeholder="Digite o rotulo do Tipo" maxlength="100" required>
                           </div>
                           <br>
                           <input type="submit" name="inserir" class="bt btn-danger btn-block" id="inserir" value="Inserir">
                       </form>
                </div>
            </div>
        </div>
    </div>
</main>
</body>
</html>