<?php include "Class/includes.php";
    $usuario = ($_POST['usuario']);
    $senha = ($_POST['senha']);

    $user = new ClassUser( DB_STRING, DB_USER, DB_PASS );
    if( $user->ValidarCampos( $usuario, $senha ) ) {
        if( $user->UserGravar( $usuario, $senha ) ) {
            header('location:index.php?pagina=home');
        } else {
            header('location:index.php?pagina=cadastrar&&erro=Nome de usuario já existe!'); 
        }
    } else { 
    header('location:index.php?pagina=cadastrar&&erro=Preencha todos os campos!'); 
    } ?>
