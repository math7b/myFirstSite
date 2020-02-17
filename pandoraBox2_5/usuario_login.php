<?php include "Class/includes.php";
    $usuario = addslashes($_POST['usuario']);
    $senha = md5($_POST['senha']);
    
    $user = new ClassUser( DB_STRING, DB_USER, DB_PASS );
    if( $user->UserLogar( $usuario, $senha )){
        header('location:index.php?pagina=home');
    } else {
        header('location:index.php?pagina=logar&&erro=Nome e/ou senha invalido');
    } ?>
