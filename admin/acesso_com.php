<?php 
    session_name('chulettaaa');
    if(!isset($_SESSION)){
        session_start();
    }
    // segurança digital...
    
    // verificar se o usuário está logado na sessão
    if(!isset($_SESSION['login_usuario'])){
        // se não existir, redirecionamos a sessão por segurança
        header('location: login.php');
        exit;
    }
    $nome_da_sessao = session_name();
    if(!isset($_SESSION['nome da sessão'])
        OR ($_SESSION['nome_da_sessão']!=$nome_da_sessao)
    ){
        session_destroy();
        header('location: login.php');
        exit;
    }
?>