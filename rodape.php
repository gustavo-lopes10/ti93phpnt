<?php ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rodapé</title>
</head>
<body class="fundofixo">
    <div class="row panel-footer fundo-rodape">
        <!-- area de localização  -->
        <div class="col-sm-6 col-md-4">
            <div class="panel-footer" style="background: none;">
                <img src="images/logo.png" alt="logo pequeno">
                <br>
                <i><strong>O melhor churrasco da zona leste</strong></i>
                <address>
                    <i>Avenida Itaquera, 8266 - Itaquera - São Paulo - sp - cep 00000</i>
                    <br>
                    <span class="glyphicon glyphicon-phpne-alt"></span>
                    &nbsp;(11) 20202-0202
                    <br>
                    <span class="glyphicon glyphicon-envelope"></span>
                    &nbsp;
                    <a href="mailto:contato@chuleta.com.br?subject=Contato do Site&cc=gustavodlopes10@gmail.com">
                        contato@chuletaquente.com.br
                    </a>
                </address>
                <div class="embed-responsive embed-responsive-4by3">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.7948465173126!2d-46.45864738442823!3d-23.53988006668582!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce66bf222d207b%3A0x1939a901dce47f36!2sAv.%20Itaquera%2C%208266%20-%20Vila%20Carmosina%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2008295-000!5e0!3m2!1spt-BR!2sbr!4v1674235502557!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
        <!-- final area de localização  -->
        <div class="col-sm-6 col-md-4">
            <div class="panel-footer">
                <h4>Links</h4>
                <ul class="nav nav-pills nav-stacked">
                    <li class="glyphicon glyphicon-">
                        <a href="index.php#home" class="text-danger">
                            <span class="glyphicon glyphicon-home" aria-hidden="true">&nbsp;Home</span>
                        </a>
                    </li>
                    <li class="glyphicon glyphicon-">
                        <a href="index.php#destaques" class="text-danger">
                            <span class="glyphicon glyphicon-ok-sign" aria-hidden="true">&nbsp;Destaques</span>
                        </a>
                    </li>
                    <li class="glyphicon glyphicon-">
                        <a href="index.php#produtos" class="text-danger">
                            <span class="glyphicon glyphicon-cutlery" aria-hidden="true">&nbsp;Produtos</span>
                        </a>
                    </li>
                    <li class="glyphicon glyphicon-">
                        <a href="index.php#contato" class="text-danger">
                            <span class="glyphicon glyphicon-envelope" aria-hidden="true">&nbsp;Contato</span>
                        </a>
                    </li>
                    <li class="glyphicon glyphicon-">
                        <a href="admin/index.php" class="text-danger">
                            <span class="glyphicon glyphicon-user" aria-hidden="true">&nbsp;Administração</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- area de contatos  -->
        <div class="col-sm-6 col-md-4">
            <div class="panel-footer" style="background: none;">
                    <h4>Contato</h4>
                    <form action="rodape_contato_envia.php" name="form_contato" id="form_contato" method="post">
                        <p>
                            <span class="input-group">
                                <span class="input-group-addon" id="basic-addon1">
                                    <span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input type="text" name="nome_contato" placeholder="digite seu nome" aria-describedby="basic-addon1" class="form-control" required>
                            </span>
                        </p>
                        <p>
                            <span class="input-group">
                                <span class="input-group-addon" id="basic-addon2">
                                    <span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="text" name="email_contato" placeholder="digite seu email" aria-describedby="basic-addon1" class="form-control" required>
                            </span>
                        </p>
                        <p>
                            <span class="input-group">
                                <span class="input-group-addon" id="basic-addon3">
                                    <span class="glyphicon glyphicon-pencil"></span>
                                </span>
                                <textarea type="text" name="comentario_contato" cols="30" rows="5" placeholder="digite seu comentário" aria-describedby="basic-addon1" class="form-control" required></textarea>
                            </span>
                        </p>
                        <p>
                            <button class="btn btn-danger btn-block" aria-label="enviar" role="button">
                                Enviar
                                <span class="glyphicon glyphicon-send" aria-hidden="true"></span>
                
                            </button>
                        </p>
                    </form>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="panel-footer" style="background: none;">
                <h6 class="text-danger text-center">
                    Desenvolvido por gustavo&trade; 2023 
                    <br>
                    <a href="https://www.google.com" target="_blank">google.com</a>
                </h6>
            </div>
        </div>
    </div>
</body>
</html>
