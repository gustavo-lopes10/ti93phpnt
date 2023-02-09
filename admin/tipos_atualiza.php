<?php 
include 'acesso_com.php';
include '../conn/connect.php';

if($_POST){ 
    if($_FILES['imagem_produto']['name']){
        $nome_img = $_FILES['imagem_produto']['name'];
        $tmp_img = $_FILES['imagem_produto']['tmp_name'];
        $dir_img = "../images/".$nome_img;
        move_uploaded_file($tmp_img, $dir_img);
    }else{
        $nome_img = $_POST['imagem_produto_atual'];
    }
    $id_tipo = $_POST['id_tipo'];
    $rotulo_tipo = $_POST['rotulo_tipo'];

    $updateSql = "update tbprodutos
                    set rotulo_tipo = '$rotulo_tipo',
                     where id_tipo = $id_tipo;";
    $resultado = $conn->query($updateSql);
    if($resultado){
        header('location: produtos_lista.php');
    }
}
if($_GET){
    $id_form = $_GET['id_tipo'];
}else{
    $id_form = 0;
}
$lista = $conn->query("select * from tbprodutos where id_produto = $id_form");
$row = $lista->fetch_assoc();
$numRows = $lista->num_rows;

    //selecionar os dados de chave estrangeira (lista de tipos de produtos)
    $consulta_fk = "select * from tbtipos order by rotulo_tipo";
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
    <title>Produto - Insere</title>
</head>
<body>
<?php include 'menu_adm.php';?>    
<main class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-offset-2 col-sm-6 col-md-8">
            <h2 class="breadcrumb text-danger">
                <a href="produtos_lista.php">
                    <button class="btn btn-danger">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </button>
                </a>
                Atualizando Tipo
            </h2>
            <div class="thumnail">
                <div class="alert alert-danger" role="alert">
                    <form action="produtos_atualiza.php" method="post" 
                    name="form_produto_insere" enctype="multipart/form-data"
                    id="form_produto_insere">

                    <input type="hidden" name="id_tipo" id="id_tipo" value="<?php echo $row['id_tipo'] ?>">

                        <label for="id_tipo">Tipo: </label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-tasks" aria-hidden="true"></span>
                            </span>
                            <select name="id_tipo" id="id_tipo" class="form-control" required>
                                <?php do {?>
                                    <option value="<?php echo $row_fk['id_tipo'];?>"
                                        <?php if(!(strcmp($row_fk['id_tipo'],$row['id_tipo']))){
                                            echo "selected=\"selected\"";                                
                                        }
                                        ?> >
                                        <?php echo $row_fk['rotulo_tipo'];?>
                                    </option>
                                <?php } while($row_fk=$lista_fk->fetch_assoc()); ?>
                            </select>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

</body>
</html>