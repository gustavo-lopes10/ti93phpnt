<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Reservas</title>
</head>
<body>
    <?php include 'menu_reserva.php'; ?>
    <div>
    <?php 
include '../conn/connect.php';

if($_GET){
    $id_usuario = $_GET['id_usuario_reserva'];
}

if($_POST){ 
    $date = $_POST['data_reserva'];
    $status = "enviado";
    $num_pess = $_POST['numero_pessoas'];
    $now = date('Y-m-d');
   
    $insertSql = "INSERT INTO pedido_reserva (data_atu, data_reserv, num_pess, status_pedido, id_usuario_reserva,)
                  values('$now','$date','$num_pess','$status', '$id_usuario')";
    $resultado = $conn->query($insertSql);
    if($resultado){
        header('location: reservas.php');
        echo "<script>alert('Pedido enviado com sucesso')</script><br>";
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
<main class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-offset-2 col-sm-6 col-md-8">
            <h2 class="breadcrumb text-danger">
                Pedido de Reserva
            </h2>
            <div class="thumnail">
                <div class="alert alert-danger" role="alert">
                <form action="reservas.php?id_usuario_reserva=<?php echo $id_usuario ?>" method="post" name="form_tipo_atualiza" enctype="multipart/form-data" id="form_tipo_atualiza">
                       <input type="hidden" name="id_tipo" id="id_tipo">
                       <label for="sigla_tipo">Data da Reserva:</label>
                           <div class="input-group">
                               <span class="input-group-addon">
                                   <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                               </span>
                               <input type="date" name="data_reserva" id="data_reserva" class="form-control" placeholder="" maxlength="100" required>
                           </div>
                           <label for="numero_pessoas">Número de pessoas:</label>
                           <div class="input-group">
                               <span class="input-group-addon">
                                   <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                               </span>
                               <input type="text" name="numero_pessoas" id="numero_pessoas" class="form-control" placeholder="Digite o número de pessoas" maxlength="100" required>
                           </div>
                           <br>
                           <input type="submit" name="fazer_reserva" class="bt btn-danger btn-block" id="fazer_reserva" value="Fazer Pedido">
                       </form>
                </div>
            </div>
        </div>
    </div>
</main>
</body>
</html>
    </div>
</body>
</html>
