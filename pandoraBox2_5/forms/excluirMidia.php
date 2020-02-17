<?php $midiaId = $_GET['midiaId'];
$tipo_midia = @$_GET['tipo_midia'];
if( $midia->CheckPendenteFavorito($midiaId) == true ){
    header('location:index.php?pagina=detalhes_'.$tipo_midia.'&id='.$midiaId.'&erro=Primeiro remova o conteudo das listas: pendentes e favoritos');
} else {
    if( $midia->DeleteMidia($midiaId) == true ) { 
        header('location:index.php?pagina='.$tipo_midia);
    } else {
        header('location:index.php?pagina=detalhes_'.$tipo_midia.'&id='.$midiaId.'erro=Falha ao deletar');
    }
} ?>
