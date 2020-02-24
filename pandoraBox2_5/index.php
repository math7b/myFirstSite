<?php 
error_reporting(0);
session_start();

#check de usuario
if( !isset($_SESSION['login']) ) {
    if( $_GET['pagina'] == "logar" ) {
        $pagina = "logar";
    } else if( $_GET['pagina'] == "cadastrar" ) {
        $pagina = "cadastrar";
    } else {
        $pagina = "logar";
    }
} else {
    if( isset($_GET["pagina"]) ) {
        $pagina = $_GET["pagina"];
    } else {
        $pagina = "home";
    }
}

#Class
include "Class/includes.php";

#Conteúdo da página
$user = new ClassUser( DB_STRING, DB_USER, DB_PASS );
$midia = new ClassMidia( DB_STRING, DB_USER, DB_PASS );

#Inicio
include "rules/users.php";
include "views/includes/head.php";

    switch($pagina) {
        case "logar":
            include "views/usuario_logar.php";
            break;
        case "cadastrar":
            include "views/usuario_incluir.php";
            break;
        case "home":
            include "views/home.php";
            break;
        case "anime":
            include "views/anime.php";
            break;
        case "serie":
            include "views/serie.php";
            break;
        case "filme":
            include "views/filme.php";
            break;
        case "detalhes_anime":
            include "views/detalhes_anime.php";
            break;
        case "detalhes_filme":
            include "views/detalhes_filme.php";
            break;
        case "detalhes_serie":
            include "views/detalhes_serie.php";
            break;
        case "editar_anime":
            include "views/editar_anime.php";
            break;
        case "editar_filme":
            include "views/editar_filme.php";
            break;
        case "editar_serie":
            include "views/editar_serie.php";
            break;
        case "incluir_anime":
            include "views/incluir_anime.php";
            break;
        case "incluir_filme":
            include "views/incluir_filme.php";
            break;
        case "incluir_serie":
            include "views/incluir_serie.php";
            break;
        case "alt_pendente":
            include "forms/alt_pendente.php";
            break;
        case "alt_favorito":
            include "forms/alt_favorito.php";
            break;
        case "logout":
            include "forms/logout.php";
            break;
        case "addMidia":
            include "forms/addMidia.php";
            break;
        case "editarMidia":
            include "forms/editarMidia.php";
            break;
        case "excluirMidia":
            include "forms/excluirMidia.php";
            break;
        
    }

#Rodapé
include "views/includes/footer.php";
?>
