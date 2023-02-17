
<?php 
    include '../conn/connect.php';
      // iniciar a verificação do login
      if($_POST){
        $cpf = $_POST['cpf_usuario'];
        $email = ($_POST['email_usuario']);
        $senha = md5($_POST['senha_usuario']);
        $loginRes = $conn->query("select * from usuarios_reserva where email = '$email' and cpf = '$cpf' and senha = '$senha'");
        $rowLogin = $loginRes->fetch_assoc();
        $numRow = mysqli_num_rows($loginRes);
        // se a sessão não existir
        if(!isset($_SESSION)){
            $sessaoAntiga = session_name('chulettaaa');
            session_start();
            $session_name_new = session_name();
        }
        if($numRow>0){
            $_SESSION['cpf_usuario'] = $cpf;
            $_SESSION['email_usuario'] = $rowLogin['email'];
            $_SESSION['nome_da_sessao'] = session_name();
            $id = $rowLogin['id_usuario_reserva'];
            header('location: reservas.php'."?id_usuario_reserva=$id");
            }else{
                 echo "<h4>Acesso negado. Tente novamente</h4><br>";
            }
        }
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="50;URL=../index.php">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/2495680ceb.js" crossorigin="anonymous"></script>
    <!-- Link para CSS específico -->
    <link rel="stylesheet" href="../css/meu_estilo.css" type="text/css">
    
    <title>Chuleta Quente - Login</title>
</head>

<body>
    <main class="container">
        <section>
            <article>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 bg-danger">
                        <h1 class="text-center text-danger">Informações de Reserva</h1>
                        <ol>
                            <li>A reserva só poderá ser feita com no mínimo 48 horas de antecedência e no máximo 90 dias.</li>
                            <li>Apenas um pedido de reserva por dia para um mesmo cpf.</li>
                            <li>Reservas realizadas podem ser canceladas pelo cliente.</li>
                            <li>Em caso de confirmação o cliente receberá uma notificação por email com o código gerado pelo sistema (Número de reserva) em formato numérico</li>
                            <li>Em caso de pedido de reserva negado, o cliente recebe por email essa informação.</li>
                        </ol>
                        <h1 class="breadcrumb text-info text-center">Faça seu login</h1>
                        <div class="thumbnail">
                            <p class="text-info text-center" role="alert">
                                <i class="fas fa-users fa-10x"></i>
                            </p>
                            <br>
                            <div class="alert alert-info" role="alert">
                                <form action="login.php" name="form_login" id="form_login" method="POST" enctype="multipart/form-data">
                                    <label for="cpf_usuario">CPF:</label>
                                    <p class="input-group">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-user text-info" aria-hidden="true"></span>
                                        </span>
                                        <input type="text" name="cpf_usuario" id="cpf_usuario" class="form-control" autofocus required autocomplete="off" placeholder="Digite seu login.">
                                    </p>
                                    <label for="email_usuario">E-mail:</label>
                                    <p class="input-group">
                                        <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-user text-info" aria-hidden="true"></span>
                                        </span>
                                        <input type="email" name="email_usuario" id="email_usuario" class="form-control" required autocomplete="off" placeholder="Digite sua senha.">
                                    </p>
                                    <label for="senha_usuario">Senha:</label>
                                    <p class="input-group">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-qrcode text-info" aria-hidden="true"></span>
                                        </span>
                                        <input type="password" name="senha_usuario" id="senha_usuario" class="form-control" required autocomplete="off" placeholder="Digite sua senha.">
                                    </p>
                                    <p class="text-right">
                                        <input type="submit" value="Entrar" class="btn btn-primary">
                                    </p>
                                </form>
                                <a href="cadastro.php"><h5 class="text-center">Primeiro acesso? Faça seu cadastro aqui</h5></a>
                                <p class="text-center">
                                    <small>
                                        <br>
                                        Caso não faça o login em 50 segundos será redirecionado automaticamente para página inicial.
                                    </small>
                                </p>
                            </div><!-- fecha alert -->
                        </div><!-- fecha thumbnail -->
                    </div><!-- fecha dimensionamento -->
                </div><!-- fecha row -->
            </article>
        </section>
    </main>


    <!-- Link arquivos Bootstrap js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>

</html>