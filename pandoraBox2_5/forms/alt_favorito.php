<?php $midiaId = $_GET['id'];
$tipo_midia = @$_GET['tipo_midia'];

$midia->AltFavorito($midiaId);
header('location:index.php?pagina=detalhes_'.$tipo_midia.'&id='.$midiaId) ?>
