<?php 
include 'acesso_com.php';
include '../conn/connect.php';

if($_POST){ 
    $tipo = $_POST['rotulo_tipo'];
    $sigla = $_POST['sigla_tipo'];
    $id = $_POST['id_tipo'];

    $updateSql = "update tbtipos
                    set sigla_tipo = '$sigla',
                    rotulo_tipo = '$tipo'
                     where id_tipo = $id;";
    $resultado = $conn->query($updateSql);
    if($resultado){
        header('location: tipos_lista.php');
    }
}
if($_GET){
    $id_form = $_GET['id_tipo'];
}else{
    $id_form = 0;
}
    //selecionar os dados de chave estrangeira (lista de tipos de produtos)
    $consulta_fk = "select * from tbtipos where id_tipo = $id_form";
    $lista_fk = $conn->query($consulta_fk);
    $row_fk = $lista_fk->fetch_assoc();
    $nlinhas = $lista_fk->num_rows;
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
                Alterando Tipo
            </h2>
            <div class="thumnail">
                <div class="alert alert-danger" role="alert">
                <form action="tipos_atualiza.php" method="post" name="form_tipo_atualiza" enctype="multipart/form-data" id="form_tipo_atualiza">
                       <input type="hidden" name="id_tipo" id="id_tipo" value="<?php echo $row_fk['id_tipo'] ?>">
                       <label for="sigla_tipo">Sigla:</label>
                           <div class="input-group">
                               <span class="input-group-addon">
                                   <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                               </span>
                               <input type="text" name="sigla_tipo" id="sigla_tipo" class="form-control" placeholder="Digite a Sigla do tipo" maxlength="100" value="<?php echo $row_fk['sigla_tipo']; ?>" required>
                           </div>
                           <label for="rotulo_tipo">Rotulo:</label>
                           <div class="input-group">
                               <span class="input-group-addon">
                                   <span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span>
                               </span>
                               <input type="text" name="rotulo_tipo" id="rotulo_tipo" class="form-control" placeholder="Digite o rotulo do Tipo" maxlength="100" value="<?php echo $row_fk['rotulo_tipo']; ?>" required>
                           </div>
                           <br>
                           <input type="submit" name="alterar" class="bt btn-danger btn-block" id="alterar" value="Atualizar">
                       </form>
                </div>
            </div>
        </div>
    </div>
</main>
</body>
</html>