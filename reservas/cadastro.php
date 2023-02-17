
<?php 
    include '../conn/connect.php';
      // iniciar o cadastro
      if($_POST){
        $nome = $_POST['nome_usuario_reserva'];
        $senha = md5($_POST['senha_usuario_reserva']);
        $cpf = $_POST['cpf_usuario_reserva'];
        $email = $_POST['email_usuario_reserva'];
        $cadRes = $conn->query("INSERT INTO usuarios_reserva (nome ,senha, cpf, email) values('$nome', '$senha', '$cpf', '$email')");
        // se a sessão não existir
        if(!isset($_SESSION)){
            $sessaoAntiga = session_name('chulettaaa');
            session_start();
            $session_name_new = session_name();
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
    
    <title>Chuleta Quente - Cadastro</title>
</head>

<body>
    <main class="container">
        <section>
            <article>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                        <h1 class="breadcrumb text-info text-center">Faça seu cadastro de Reserva</h1>
                        <div class="thumbnail">
                            <p class="text-info text-center" role="alert">
                                <i class="fas fa-users fa-10x"></i>
                            </p>
                            <br>
                            <div class="alert alert-info" role="alert">
                                <form action="cadastro.php" name="form_login" id="form_login" method="POST" enctype="multipart/form-data">
                                    <label for="nome_usuario_reserva">Nome Completo:</label>
                                    <p class="input-group">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-user text-info" aria-hidden="true"></span>
                                        </span>
                                        <input type="text" name="nome_usuario_reserva" id="nome_usuario_reserva" class="form-control" autofocus required autocomplete="off" placeholder="Digite seu nome completo.">
                                    </p>
                                    <label for="cpf_usuario_reserva">CPF:</label>
                                    <p class="input-group">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-user text-info" aria-hidden="true"></span>
                                        </span>
                                        <input type="text" name="cpf_usuario_reserva" id="cpf_usuario_reserva" class="form-control" autofocus required autocomplete="off" placeholder="Digite seu nome completo.">
                                    </p>
                                    <label for="email_usuario_reserva">E-mail:</label>
                                    <p class="input-group">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-user text-info" aria-hidden="true"></span>
                                        </span>
                                        <input type="email" name="email_usuario_reserva" id="email_usuario_reserva" class="form-control" autofocus required autocomplete="off" placeholder="Digite seu nome completo.">
                                    </p>
                                    <label for="senha_usuario_reserva">Senha:</label>
                                    <p class="input-group">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-qrcode text-info" aria-hidden="true"></span>
                                        </span>
                                        <input type="password" name="senha_usuario_reserva" id="senha_usuario_reserva" class="form-control" required autocomplete="off" placeholder="Digite sua senha.">
                                    </p>
                                    <p class="text-right">
                                        <input type="submit" value="Fazer Cadastro" class="btn btn-primary">
                                    </p>
                                </form>
                                <a href="login.php">
                                    <h5 class="text-center">
                                        <br>
                                        Clique aqui para voltar para a página de login
                                    </h5>
                                </a>
                                <p class="text-center">
                                    <small>
                                        <br>
                                        Caso não faça o cadastro em 30 segundos será redirecionado automaticamente para página inicial.
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